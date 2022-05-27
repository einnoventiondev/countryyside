<?php

namespace App\Http\Requests;

use App\Models\RequestForm;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyRequestFormRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('request_form_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:request_forms,id',
        ];
    }
}
