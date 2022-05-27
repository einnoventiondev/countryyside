@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.requestForm.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.request-forms.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.requestForm.fields.id') }}
                        </th>
                        <td>
                            {{ $requestForm->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.requestForm.fields.basic_information') }}
                        </th>
                        <td>
                            {{ App\Models\RequestForm::BASIC_INFORMATION_RADIO[$requestForm->basic_information] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.requestForm.fields.first_name') }}
                        </th>
                        <td>
                            {{ $requestForm->first_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.requestForm.fields.last_name') }}
                        </th>
                        <td>
                            {{ $requestForm->last_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.requestForm.fields.city') }}
                        </th>
                        <td>
                            {{ $requestForm->city }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.requestForm.fields.phone') }}
                        </th>
                        <td>
                            {{ $requestForm->phone }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.requestForm.fields.email') }}
                        </th>
                        <td>
                            {{ $requestForm->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.requestForm.fields.additional_details') }}
                        </th>
                        <td>
                            {{ App\Models\RequestForm::ADDITIONAL_DETAILS_RADIO[$requestForm->additional_details] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.requestForm.fields.book_your_appointment') }}
                        </th>
                        <td>
                            {{ App\Models\RequestForm::BOOK_YOUR_APPOINTMENT_RADIO[$requestForm->book_your_appointment] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.requestForm.fields.text') }}
                        </th>
                        <td>
                            {!! $requestForm->text !!}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.request-forms.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection