@extends('layouts.admin')
@section('content')
<div class="row">
    @foreach ($categorie as $key => $candidats)
    <div class="card col-md-6 ">
        <div class="card-header">
            {{ App\Models\Candidat::CATEGORIE_RADIO[$key] }}
        </div>

        <div class="card-body">

            <div class="table-responsive">
                <table class=" table table-bordered table-striped table-hover datatable datatable-Candidat">
                    <thead>
                        <tr>
                            <th>
                                {{ trans('cruds.candidat.fields.nom') }}
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
                                &nbsp;
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($candidats as $pos => $candidat)
                            <tr data-entry-id="{{ $candidat->id }}">
                                <td>
                                    {{ $candidat->nom ?? '' }}
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
                                {{--
                                <td>
                                    {{ $candidat->classement ?? '' }}
                                </td> --}}
                                <td>

                                    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$candidat->id}}">
    vote
  </button>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal{{$candidat->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModal{{$candidat->id}}Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModal{{$candidat->id}}Label">{{$candidat->nom}}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">


            <form method="POST" action="{{ route("admin.candidats.update", [$candidat->id]) }}" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="vpro">{{ trans('cruds.candidat.fields.vpro') }}</label>
                    <input class="form-control {{ $errors->has('vpro') ? 'is-invalid' : '' }}" type="number" name="vpro" id="vpro" value="{{ old('vpro', $candidat->vpro) }}" step="1">
                    @if($errors->has('vpro'))
                        <div class="invalid-feedback">
                            {{ $errors->first('vpro') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.candidat.fields.vpro_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="vjury">{{ trans('cruds.candidat.fields.vjury') }}</label>
                    <input class="form-control {{ $errors->has('vjury') ? 'is-invalid' : '' }}" type="number" name="vjury" id="vjury" value="{{ old('vjury', $candidat->vjury) }}" step="1">
                    @if($errors->has('vjury'))
                        <div class="invalid-feedback">
                            {{ $errors->first('vjury') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.candidat.fields.vjury_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="vpublic">{{ trans('cruds.candidat.fields.vpublic') }}</label>
                    <input class="form-control {{ $errors->has('vpublic') ? 'is-invalid' : '' }}" type="number" name="vpublic" id="vpublic" value="{{ old('vpublic', $candidat->vpublic) }}" step="1">
                    @if($errors->has('vpublic'))
                        <div class="invalid-feedback">
                            {{ $errors->first('vpublic') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.candidat.fields.vpublic_helper') }}</span>
                </div>
                <div class="form-group">
                    <button class="btn btn-danger" type="submit">
                        {{ trans('global.save') }}
                    </button>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>

                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
    @endforeach
</div>



@endsection
