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
                        @foreach($candidats as $pos => $c)
                            <tr data-entry-id="{{ $c->id }}">
                                <td>
                                    {{ $c->nom ?? '' }}
                                </td>
                                <td>
                                    {{ $c->vpro ?? '' }}
                                </td>
                                <td>
                                    {{ $c->vjury ?? '' }}
                                </td>
                                <td>
                                    {{ $c->vpublic ?? '' }}
                                </td>
                                <td>
                                    {{ $c->total ?? '' }}
                                </td>
                                {{--
                                <td>
                                    {{ $c->classement ?? '' }}
                                </td> --}}
                                <td>

                                    <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$c->id}}">
                                    vote
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal{{$c->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModal{{$c->id}}Label" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModal{{$c->id}}Label">{{$c->nom}}</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>
                                        <div class="modal-body">

                                            <form method="POST" action="{{ route("admin.candidats.update", [$c->id]) }}" enctype="multipart/form-data">
                                                @method('PUT')
                                                @csrf
                                                <div class="form-group">
                                                    <label for="vpro">{{ trans('cruds.candidat.fields.vpro') }}</label>
                                                    <select class="form-control {{ $errors->has('vpro') ? 'is-invalid' : '' }}" type="number" name="vpro" id="vpro">
                                                        <option selected value="0">Selectionner</option>
                                                        <option {{ ($c->vpro == 1 ||  old('vpro', $c->vpro) == 1) ? 'selected' : ''}} value=1>1</option>
                                                        <option {{ ($c->vpro == 2 ||  old('vpro', $c->vpro) == 2) ? 'selected' : ''}} value=2>2</option>
                                                        <option {{ ($c->vpro == 3 ||  old('vpro', $c->vpro) == 3) ? 'selected' : ''}} value=3>3</option>
                                                        <option {{ ($c->vpro == 4 ||  old('vpro', $c->vpro) == 4) ? 'selected' : ''}} value=4>4</option>
                                                        <option {{ ($c->vpro == 5 ||  old('vpro', $c->vpro) == 5) ? 'selected' : ''}} value=5>5</option>
                                                    </select>

                                                    @if($errors->has('vpro'))
                                                        <div class="invalid-feedback">
                                                            {{ $errors->first('vpro') }}
                                                        </div>
                                                    @endif
                                                    <span class="help-block">{{ trans('cruds.candidat.fields.vpro_helper') }}</span>
                                                </div>
                                                <div class="form-group">
                                                    <label for="vjury">{{ trans('cruds.candidat.fields.vjury') }}</label>
                                                    <select class="form-control {{ $errors->has('vjury') ? 'is-invalid' : '' }}" type="number" name="vjury" id="vjury">
                                                        <option selected value="0">Selectionner</option>
                                                        <option {{ ($c->vjury == 1 ||  old('vjury', $c->vjury) == 1) ? 'selected' : ''}} value=1>1</option>
                                                        <option {{ ($c->vjury == 2 ||  old('vjury', $c->vjury) == 2) ? 'selected' : ''}} value=2>2</option>
                                                        <option {{ ($c->vjury == 3 ||  old('vjury', $c->vjury) == 3) ? 'selected' : ''}} value=3>3</option>
                                                        <option {{ ($c->vjury == 4 ||  old('vjury', $c->vjury) == 4) ? 'selected' : ''}} value=4>4</option>
                                                        <option {{ ($c->vjury == 5 ||  old('vjury', $c->vjury) == 5) ? 'selected' : ''}} value=5>5</option>
                                                    </select>
                                                    @if($errors->has('vjury'))
                                                        <div class="invalid-feedback">
                                                            {{ $errors->first('vjury') }}
                                                        </div>
                                                    @endif
                                                    <span class="help-block">{{ trans('cruds.candidat.fields.vjury_helper') }}</span>
                                                </div>
                                                <div class="form-group">
                                                    <label for="vpublic">{{ trans('cruds.candidat.fields.vpublic') }}</label>
                                                    <select class="form-control {{ $errors->has('vpublic') ? 'is-invalid' : '' }}" type="number" name="vpublic" id="vpublic">
                                                        <option selected value="0">Selectionner</option>
                                                        <option {{ ($c->vpublic == 1 ||  old('vpublic', $c->vpublic) == 1) ? 'selected' : ''}} value=1>1</option>
                                                        <option {{ ($c->vpublic == 2 ||  old('vpublic', $c->vpublic) == 2) ? 'selected' : ''}} value=2>2</option>
                                                        <option {{ ($c->vpublic == 3 ||  old('vpublic', $c->vpublic) == 3) ? 'selected' : ''}} value=3>3</option>
                                                        <option {{ ($c->vpublic == 4 ||  old('vpublic', $c->vpublic) == 4) ? 'selected' : ''}} value=4>4</option>
                                                        <option {{ ($c->vpublic == 5 ||  old('vpublic', $c->vpublic) == 5) ? 'selected' : ''}} value=5>5</option>
                                                    </select>
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
