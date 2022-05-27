@extends('layouts.admin')
@section('content')
@can('request_form_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.request-forms.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.requestForm.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.requestForm.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-RequestForm">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.requestForm.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.requestForm.fields.basic_information') }}
                        </th>
                        <th>
                            {{ trans('cruds.requestForm.fields.first_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.requestForm.fields.last_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.requestForm.fields.city') }}
                        </th>
                        <th>
                            {{ trans('cruds.requestForm.fields.phone') }}
                        </th>
                        <th>
                            {{ trans('cruds.requestForm.fields.email') }}
                        </th>
                        <th>
                            {{ trans('cruds.requestForm.fields.additional_details') }}
                        </th>
                        <th>
                            {{ trans('cruds.requestForm.fields.book_your_appointment') }}
                        </th>
                        <th>
                            {{ trans('cruds.requestForm.fields.date') }}
                        </th>
                        <th>
                            {{ trans('cruds.requestForm.fields.time') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                    <tr>
                        <td>
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <select class="search" strict="true">
                                <option value>{{ trans('global.all') }}</option>
                                @foreach(App\Models\RequestForm::BASIC_INFORMATION_RADIO as $key => $item)
                                    <option value="{{ $item }}">{{ $item }}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <select class="search" strict="true">
                                <option value>{{ trans('global.all') }}</option>
                                @foreach(App\Models\RequestForm::ADDITIONAL_DETAILS_RADIO as $key => $item)
                                    <option value="{{ $item }}">{{ $item }}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <select class="search" strict="true">
                                <option value>{{ trans('global.all') }}</option>
                                @foreach(App\Models\RequestForm::BOOK_YOUR_APPOINTMENT_RADIO as $key => $item)
                                    <option value="{{ $item }}">{{ $item }}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($requestForms as $key => $requestForm)
                        <tr data-entry-id="{{ $requestForm->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $requestForm->id ?? '' }}
                            </td>
                            <td>
                                {{ App\Models\RequestForm::BASIC_INFORMATION_RADIO[$requestForm->basic_information] ?? '' }}
                            </td>
                            <td>
                                {{ $requestForm->first_name ?? '' }}
                            </td>
                            <td>
                                {{ $requestForm->last_name ?? '' }}
                            </td>
                            <td>
                                {{ $requestForm->city ?? '' }}
                            </td>
                            <td>
                                {{ $requestForm->phone ?? '' }}
                            </td>
                            <td>
                                {{ $requestForm->email ?? '' }}
                            </td>
                            <td>
                                {{ App\Models\RequestForm::ADDITIONAL_DETAILS_RADIO[$requestForm->additional_details] ?? '' }}
                            </td>
                            <td>
                                {{ App\Models\RequestForm::BOOK_YOUR_APPOINTMENT_RADIO[$requestForm->book_your_appointment] ?? '' }}
                            </td>
                            <td>
                                {{ $requestForm->date ?? '' }}
                            </td>
                            <td>
                                {{ $requestForm->time ?? '' }}
                            </td>
                            <td>
                                @can('request_form_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.request-forms.show', $requestForm->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('request_form_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.request-forms.edit', $requestForm->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('request_form_delete')
                                    <form action="{{ route('admin.request-forms.destroy', $requestForm->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('request_form_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.request-forms.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-RequestForm:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
let visibleColumnsIndexes = null;
$('.datatable thead').on('input', '.search', function () {
      let strict = $(this).attr('strict') || false
      let value = strict && this.value ? "^" + this.value + "$" : this.value

      let index = $(this).parent().index()
      if (visibleColumnsIndexes !== null) {
        index = visibleColumnsIndexes[index]
      }

      table
        .column(index)
        .search(value, strict)
        .draw()
  });
table.on('column-visibility.dt', function(e, settings, column, state) {
      visibleColumnsIndexes = []
      table.columns(":visible").every(function(colIdx) {
          visibleColumnsIndexes.push(colIdx);
      });
  })
})

</script>
@endsection