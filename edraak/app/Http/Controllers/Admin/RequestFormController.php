<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyRequestFormRequest;
use App\Http\Requests\StoreRequestFormRequest;
use App\Http\Requests\UpdateRequestFormRequest;
use App\Models\RequestForm;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class RequestFormController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('request_form_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $requestForms = RequestForm::with(['media'])->get();

        return view('admin.requestForms.index', compact('requestForms'));
    }

    public function create()
    {
        abort_if(Gate::denies('request_form_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.requestForms.create');
    }

    public function store(StoreRequestFormRequest $request)
    {
        $requestForm = RequestForm::create($request->all());

        if ($request->input('audio', false)) {
            $requestForm->addMedia(storage_path('tmp/uploads/' . basename($request->input('audio'))))->toMediaCollection('audio');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $requestForm->id]);
        }

        return redirect()->route('admin.request-forms.index');
    }

    public function edit(RequestForm $requestForm)
    {
        abort_if(Gate::denies('request_form_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.requestForms.edit', compact('requestForm'));
    }

    public function update(UpdateRequestFormRequest $request, RequestForm $requestForm)
    {
        $requestForm->update($request->all());

        if ($request->input('audio', false)) {
            if (!$requestForm->audio || $request->input('audio') !== $requestForm->audio->file_name) {
                if ($requestForm->audio) {
                    $requestForm->audio->delete();
                }
                $requestForm->addMedia(storage_path('tmp/uploads/' . basename($request->input('audio'))))->toMediaCollection('audio');
            }
        } elseif ($requestForm->audio) {
            $requestForm->audio->delete();
        }

        return redirect()->route('admin.request-forms.index');
    }

    public function show(RequestForm $requestForm)
    {
        abort_if(Gate::denies('request_form_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.requestForms.show', compact('requestForm'));
    }

    public function destroy(RequestForm $requestForm)
    {
        abort_if(Gate::denies('request_form_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $requestForm->delete();

        return back();
    }

    public function massDestroy(MassDestroyRequestFormRequest $request)
    {
        RequestForm::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('request_form_create') && Gate::denies('request_form_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new RequestForm();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
