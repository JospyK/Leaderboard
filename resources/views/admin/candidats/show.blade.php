@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.candidat.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.candidats.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.candidat.fields.id') }}
                        </th>
                        <td>
                            {{ $candidat->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.candidat.fields.order') }}
                        </th>
                        <td>
                            {{ $candidat->order }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.candidat.fields.nom') }}
                        </th>
                        <td>
                            {{ $candidat->nom }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.candidat.fields.photo') }}
                        </th>
                        <td>
                            {{ $candidat->photo }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.candidat.fields.categorie') }}
                        </th>
                        <td>
                            {{ App\Models\Candidat::CATEGORIE_RADIO[$candidat->categorie] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.candidat.fields.vpro') }}
                        </th>
                        <td>
                            {{ $candidat->vpro }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.candidat.fields.vjury') }}
                        </th>
                        <td>
                            {{ $candidat->vjury }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.candidat.fields.vpublic') }}
                        </th>
                        <td>
                            {{ $candidat->vpublic }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.candidat.fields.total') }}
                        </th>
                        <td>
                            {{ $candidat->total }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.candidat.fields.classement') }}
                        </th>
                        <td>
                            {{ $candidat->classement }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.candidats.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection
