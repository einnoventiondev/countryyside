@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.requestForm.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.request-forms.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>{{ trans('cruds.requestForm.fields.basic_information') }}</label>
                @foreach(App\Models\RequestForm::BASIC_INFORMATION_RADIO as $key => $label)
                    <div class="form-check {{ $errors->has('basic_information') ? 'is-invalid' : '' }}">
                        <input class="form-check-input" type="radio" id="basic_information_{{ $key }}" name="basic_information" value="{{ $key }}" {{ old('basic_information', '') === (string) $key ? 'checked' : '' }}>
                        <label class="form-check-label" for="basic_information_{{ $key }}">{{ $label }}</label>
                    </div>
                @endforeach
                @if($errors->has('basic_information'))
                    <span class="text-danger">{{ $errors->first('basic_information') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.requestForm.fields.basic_information_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="first_name">{{ trans('cruds.requestForm.fields.first_name') }}</label>
                <input class="form-control {{ $errors->has('first_name') ? 'is-invalid' : '' }}" type="text" name="first_name" id="first_name" value="{{ old('first_name', '') }}">
                @if($errors->has('first_name'))
                    <span class="text-danger">{{ $errors->first('first_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.requestForm.fields.first_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="last_name">{{ trans('cruds.requestForm.fields.last_name') }}</label>
                <input class="form-control {{ $errors->has('last_name') ? 'is-invalid' : '' }}" type="text" name="last_name" id="last_name" value="{{ old('last_name', '') }}">
                @if($errors->has('last_name'))
                    <span class="text-danger">{{ $errors->first('last_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.requestForm.fields.last_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="city">{{ trans('cruds.requestForm.fields.city') }}</label>
                <input class="form-control {{ $errors->has('city') ? 'is-invalid' : '' }}" type="text" name="city" id="city" value="{{ old('city', '') }}">
                @if($errors->has('city'))
                    <span class="text-danger">{{ $errors->first('city') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.requestForm.fields.city_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="phone">{{ trans('cruds.requestForm.fields.phone') }}</label>
                <input class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" type="text" name="phone" id="phone" value="{{ old('phone', '') }}">
                @if($errors->has('phone'))
                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.requestForm.fields.phone_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="email">{{ trans('cruds.requestForm.fields.email') }}</label>
                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email" id="email" value="{{ old('email') }}">
                @if($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.requestForm.fields.email_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.requestForm.fields.additional_details') }}</label>
                @foreach(App\Models\RequestForm::ADDITIONAL_DETAILS_RADIO as $key => $label)
                    <div class="form-check {{ $errors->has('additional_details') ? 'is-invalid' : '' }}">
                        <input class="form-check-input" type="radio" id="additional_details_{{ $key }}" name="additional_details" value="{{ $key }}" {{ old('additional_details', '') === (string) $key ? 'checked' : '' }}>
                        <label class="form-check-label" for="additional_details_{{ $key }}">{{ $label }}</label>
                    </div>
                @endforeach
                @if($errors->has('additional_details'))
                    <span class="text-danger">{{ $errors->first('additional_details') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.requestForm.fields.additional_details_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.requestForm.fields.book_your_appointment') }}</label>
                @foreach(App\Models\RequestForm::BOOK_YOUR_APPOINTMENT_RADIO as $key => $label)
                    <div class="form-check {{ $errors->has('book_your_appointment') ? 'is-invalid' : '' }}">
                        <input class="form-check-input" type="radio" id="book_your_appointment_{{ $key }}" name="book_your_appointment" value="{{ $key }}" {{ old('book_your_appointment', '') === (string) $key ? 'checked' : '' }}>
                        <label class="form-check-label" for="book_your_appointment_{{ $key }}">{{ $label }}</label>
                    </div>
                @endforeach
                @if($errors->has('book_your_appointment'))
                    <span class="text-danger">{{ $errors->first('book_your_appointment') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.requestForm.fields.book_your_appointment_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="text">{{ trans('cruds.requestForm.fields.text') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('text') ? 'is-invalid' : '' }}" name="text" id="text">{!! old('text') !!}</textarea>
                @if($errors->has('text'))
                    <span class="text-danger">{{ $errors->first('text') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.requestForm.fields.text_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="audio">{{ trans('cruds.requestForm.fields.audio') }}</label>
                <div class="needsclick dropzone {{ $errors->has('audio') ? 'is-invalid' : '' }}" id="audio-dropzone">
                </div>
                @if($errors->has('audio'))
                    <span class="text-danger">{{ $errors->first('audio') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.requestForm.fields.audio_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="date">{{ trans('cruds.requestForm.fields.date') }}</label>
                <input class="form-control date {{ $errors->has('date') ? 'is-invalid' : '' }}" type="text" name="date" id="date" value="{{ old('date') }}">
                @if($errors->has('date'))
                    <span class="text-danger">{{ $errors->first('date') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.requestForm.fields.date_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="time">{{ trans('cruds.requestForm.fields.time') }}</label>
                <input class="form-control timepicker {{ $errors->has('time') ? 'is-invalid' : '' }}" type="text" name="time" id="time" value="{{ old('time') }}">
                @if($errors->has('time'))
                    <span class="text-danger">{{ $errors->first('time') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.requestForm.fields.time_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection

@section('scripts')
<script>
    $(document).ready(function () {
  function SimpleUploadAdapter(editor) {
    editor.plugins.get('FileRepository').createUploadAdapter = function(loader) {
      return {
        upload: function() {
          return loader.file
            .then(function (file) {
              return new Promise(function(resolve, reject) {
                // Init request
                var xhr = new XMLHttpRequest();
                xhr.open('POST', '{{ route('admin.request-forms.storeCKEditorImages') }}', true);
                xhr.setRequestHeader('x-csrf-token', window._token);
                xhr.setRequestHeader('Accept', 'application/json');
                xhr.responseType = 'json';

                // Init listeners
                var genericErrorText = `Couldn't upload file: ${ file.name }.`;
                xhr.addEventListener('error', function() { reject(genericErrorText) });
                xhr.addEventListener('abort', function() { reject() });
                xhr.addEventListener('load', function() {
                  var response = xhr.response;

                  if (!response || xhr.status !== 201) {
                    return reject(response && response.message ? `${genericErrorText}\n${xhr.status} ${response.message}` : `${genericErrorText}\n ${xhr.status} ${xhr.statusText}`);
                  }

                  $('form').append('<input type="hidden" name="ck-media[]" value="' + response.id + '">');

                  resolve({ default: response.url });
                });

                if (xhr.upload) {
                  xhr.upload.addEventListener('progress', function(e) {
                    if (e.lengthComputable) {
                      loader.uploadTotal = e.total;
                      loader.uploaded = e.loaded;
                    }
                  });
                }

                // Send request
                var data = new FormData();
                data.append('upload', file);
                data.append('crud_id', '{{ $requestForm->id ?? 0 }}');
                xhr.send(data);
              });
            })
        }
      };
    }
  }

  var allEditors = document.querySelectorAll('.ckeditor');
  for (var i = 0; i < allEditors.length; ++i) {
    ClassicEditor.create(
      allEditors[i], {
        extraPlugins: [SimpleUploadAdapter]
      }
    );
  }
});
</script>

<script>
    Dropzone.options.audioDropzone = {
    url: '{{ route('admin.request-forms.storeMedia') }}',
    maxFilesize: 50, // MB
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 50
    },
    success: function (file, response) {
      $('form').find('input[name="audio"]').remove()
      $('form').append('<input type="hidden" name="audio" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="audio"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($requestForm) && $requestForm->audio)
      var file = {!! json_encode($requestForm->audio) !!}
          this.options.addedfile.call(this, file)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="audio" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
     error: function (file, response) {
         if ($.type(response) === 'string') {
             var message = response //dropzone sends it's own error messages in string
         } else {
             var message = response.errors.file
         }
         file.previewElement.classList.add('dz-error')
         _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
         _results = []
         for (_i = 0, _len = _ref.length; _i < _len; _i++) {
             node = _ref[_i]
             _results.push(node.textContent = message)
         }

         return _results
     }
}
</script>
@endsection