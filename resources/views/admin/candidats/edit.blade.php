@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.candidat.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.candidats.update", [$candidat->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="order">{{ trans('cruds.candidat.fields.order') }}</label>
                <input class="form-control {{ $errors->has('order') ? 'is-invalid' : '' }}" type="number" name="order" id="order" value="{{ old('order', $candidat->order) }}" step="1">
                @if($errors->has('order'))
                    <div class="invalid-feedback">
                        {{ $errors->first('order') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.candidat.fields.order_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="nom">{{ trans('cruds.candidat.fields.nom') }}</label>
                <input class="form-control {{ $errors->has('nom') ? 'is-invalid' : '' }}" type="text" name="nom" id="nom" value="{{ old('nom', $candidat->nom) }}">
                @if($errors->has('nom'))
                    <div class="invalid-feedback">
                        {{ $errors->first('nom') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.candidat.fields.nom_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="prenom">{{ trans('cruds.candidat.fields.prenom') }}</label>
                <input class="form-control {{ $errors->has('prenom') ? 'is-invalid' : '' }}" type="text" name="prenom" id="prenom" value="{{ old('prenom', $candidat->prenom) }}">
                @if($errors->has('prenom'))
                    <div class="invalid-feedback">
                        {{ $errors->first('prenom') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.candidat.fields.prenom_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="photo">{{ trans('cruds.candidat.fields.photo') }}</label>
                <input class="form-control {{ $errors->has('photo') ? 'is-invalid' : '' }}" type="text" name="photo" id="photo" value="{{ old('photo', $candidat->photo) }}">
                @if($errors->has('photo'))
                    <div class="invalid-feedback">
                        {{ $errors->first('photo') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.candidat.fields.photo_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.candidat.fields.categorie') }}</label>
                @foreach(App\Models\Candidat::CATEGORIE_RADIO as $key => $label)
                    <div class="form-check {{ $errors->has('categorie') ? 'is-invalid' : '' }}">
                        <input class="form-check-input" type="radio" id="categorie_{{ $key }}" name="categorie" value="{{ $key }}" {{ old('categorie', $candidat->categorie) === (string) $key ? 'checked' : '' }}>
                        <label class="form-check-label" for="categorie_{{ $key }}">{{ $label }}</label>
                    </div>
                @endforeach
                @if($errors->has('categorie'))
                    <div class="invalid-feedback">
                        {{ $errors->first('categorie') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.candidat.fields.categorie_helper') }}</span>
            </div>
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
                <label for="total">{{ trans('cruds.candidat.fields.total') }}</label>
                <input class="form-control {{ $errors->has('total') ? 'is-invalid' : '' }}" type="number" name="total" id="total" value="{{ old('total', $candidat->total) }}" step="1">
                @if($errors->has('total'))
                    <div class="invalid-feedback">
                        {{ $errors->first('total') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.candidat.fields.total_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="classement">{{ trans('cruds.candidat.fields.classement') }}</label>
                <input class="form-control {{ $errors->has('classement') ? 'is-invalid' : '' }}" type="number" name="classement" id="classement" value="{{ old('classement', $candidat->classement) }}" step="1">
                @if($errors->has('classement'))
                    <div class="invalid-feedback">
                        {{ $errors->first('classement') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.candidat.fields.classement_helper') }}</span>
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