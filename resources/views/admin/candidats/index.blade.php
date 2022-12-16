@extends('layouts.admin')
@section('content')
@can('candidat_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.candidats.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.candidat.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.candidat.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Candidat">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.candidat.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.candidat.fields.order') }}
                        </th>
                        <th>
                            {{ trans('cruds.candidat.fields.nom') }}
                        </th>
                        <th>
                            {{ trans('cruds.candidat.fields.projet') }}
                        </th>
                        <th>
                            {{ trans('cruds.candidat.fields.categorie') }}
                        </th>
                        <th>
                            {{ trans('cruds.candidat.fields.vpro') }}
                        </th>
                        <th>
                            {{ trans('cruds.candidat.fields.vjury') }}
                        </th>
                        <th>
                            {{ trans('cruds.candidat.fields.vpublic') }}
                        </th>
                        <th>
                            {{ trans('cruds.candidat.fields.total') }}
                        </th>
                        <th>
                            {{ trans('cruds.candidat.fields.classement') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($candidats as $key => $candidat)
                        <tr data-entry-id="{{ $candidat->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $candidat->id ?? '' }}
                            </td>
                            <td>
                                {{ $candidat->order ?? '' }}
                            </td>
                            <td>
                                {{ $candidat->nom ?? '' }}
                            </td>
                            <td>
                                {{ $candidat->projet ?? '' }}
                            </td>
                            <td>
                                {{ App\Models\Candidat::CATEGORIE_RADIO[$candidat->categorie] ?? '' }}
                            </td>
                            <td>
                                {{ $candidat->vpro ?? '' }}
                            </td>
                            <td>
                                {{ $candidat->vjury ?? '' }}
                            </td>
                            <td>
                                {{ $candidat->vpublic ?? '' }}
                            </td>
                            <td>
                                {{ $candidat->total ?? '' }}
                            </td>
                            <td>
                                {{ $candidat->classement ?? '' }}
                            </td>
                            <td>
                                @can('candidat_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.candidats.show', $candidat->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('candidat_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.candidats.edit', $candidat->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('candidat_delete')
                                    <form action="{{ route('admin.candidats.destroy', $candidat->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('candidat_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.candidats.massDestroy') }}",
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
  let table = $('.datatable-Candidat:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });

})

</script>
@endsection
