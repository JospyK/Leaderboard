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
                                                    <label class="mr-4" for="vpro">{{ trans('cruds.candidat.fields.vpro') }}: </label>

                                                    <div class="form-check form-check-inline">
                                                        <input {{ old('vpro', $c->vpro) == 1 ? 'checked' : '' }} class="btn-check" type="radio" name="vpro" id="vpro1" value=1>
                                                        <label class="form-check-label" for="vpro1">1</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input {{ old('vpro', $c->vpro) == 2 ? 'checked' : '' }} class="form-check-input" type="radio" name="vpro" id="vpro3" value=3>
                                                        <label class="form-check-label" for="vpro3">2</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input {{ old('vpro', $c->vpro) == 3 ? 'checked' : '' }} class="form-check-input" type="radio" name="vpro" id="vpro3" value=3>
                                                        <label class="form-check-label" for="vpro3">3</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input {{ old('vpro', $c->vpro) == 4 ? 'checked' : '' }} class="form-check-input" type="radio" name="vpro" id="vpro4" value=4>
                                                        <label class="form-check-label" for="vpro4">4</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input {{ old('vpro', $c->vpro) == 5 ? 'checked' : '' }} class="form-check-input" type="radio" name="vpro" id="vpro5" value=5>
                                                        <label class="form-check-label" for="vpro5">5</label>
                                                    </div>


                                                    @if($errors->has('vpro'))
                                                        <div class="invalid-feedback">
                                                            {{ $errors->first('vpro') }}
                                                        </div>
                                                    @endif
                                                    <span class="help-block">{{ trans('cruds.candidat.fields.vpro_helper') }}</span>
                                                </div>
                                                <div class="form-group">
                                                    <label class="mr-4" for="vjury">{{ trans('cruds.candidat.fields.vjury') }}: </label>

                                                    <div class="form-check form-check-inline">
                                                        <input {{ old('vjury', $c->vjury) == 1 ? 'checked' : '' }} class="btn-check" type="radio" name="vjury" id="vjury1" value=1>
                                                        <label class="form-check-label" for="vjury1">1</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input {{ old('vjury', $c->vjury) == 2 ? 'checked' : '' }} class="form-check-input" type="radio" name="vjury" id="vjury3" value=3>
                                                        <label class="form-check-label" for="vjury3">2</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input {{ old('vjury', $c->vjury) == 3 ? 'checked' : '' }} class="form-check-input" type="radio" name="vjury" id="vjury3" value=3>
                                                        <label class="form-check-label" for="vjury3">3</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input {{ old('vjury', $c->vjury) == 4 ? 'checked' : '' }} class="form-check-input" type="radio" name="vjury" id="vjury4" value=4>
                                                        <label class="form-check-label" for="vjury4">4</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input {{ old('vjury', $c->vjury) == 5 ? 'checked' : '' }} class="form-check-input" type="radio" name="vjury" id="vjury5" value=5>
                                                        <label class="form-check-label" for="vjury5">5</label>
                                                    </div>
                                                    @if($errors->has('vjury'))
                                                        <div class="invalid-feedback">
                                                            {{ $errors->first('vjury') }}
                                                        </div>
                                                    @endif
                                                    <span class="help-block">{{ trans('cruds.candidat.fields.vjury_helper') }}</span>
                                                </div>
                                                <div class="form-group">
                                                    <label class="mr-4" for="vpublic">{{ trans('cruds.candidat.fields.vpublic') }}: </label>
                                                    <div class="form-check form-check-inline">
                                                        <input {{ old('vpublic', $c->vpublic) == 1 ? 'checked' : '' }} class="btn-check" type="radio" name="vpublic" id="vpublic1" value=1>
                                                        <label class="form-check-label" for="vpublic1">1</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input {{ old('vpublic', $c->vpublic) == 2 ? 'checked' : '' }} class="form-check-input" type="radio" name="vpublic" id="vpublic3" value=3>
                                                        <label class="form-check-label" for="vpublic3">2</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input {{ old('vpublic', $c->vpublic) == 3 ? 'checked' : '' }} class="form-check-input" type="radio" name="vpublic" id="vpublic3" value=3>
                                                        <label class="form-check-label" for="vpublic3">3</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input {{ old('vpublic', $c->vpublic) == 4 ? 'checked' : '' }} class="form-check-input" type="radio" name="vpublic" id="vpublic4" value=4>
                                                        <label class="form-check-label" for="vpublic4">4</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input {{ old('vpublic', $c->vpublic) == 5 ? 'checked' : '' }} class="form-check-input" type="radio" name="vpublic" id="vpublic5" value=5>
                                                        <label class="form-check-label" for="vpublic5">5</label>
                                                    </div>
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
