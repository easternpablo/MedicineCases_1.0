@extends('layouts.master')
@section('titulo','Nueva Entrada')

@section('content')
<h2 class="display-4 text-center">Nueva Entrada</h2>
<div class="card mt-5">
    <div class="card-header">{{ __('Nueva Entrada') }}</div>
    <div class="card-body">
        <form method="POST" action="{{ url('/entrada/nueva-entrada/submit') }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <label for="name" class="col-form-label text-md-right">{{ __('Nombre') }}</label>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
            </div>
            <div class="row">
                <label for="description" class="col-form-label text-md-right">{{ __('Descripción') }}</label>
                <textarea id="description" type="text" rows="4" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="description" autofocus></textarea>
                @error('description')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
            </div>
            <div class="row">
                <label for="type" class="col-form-label text-md-right">{{ __('Categoría') }}</label>
                <select id="type" class="form-control @error('type') is-invalid @enderror" name="type" value="{{ old('type') }}" required autocomplete="type" autofocus>
                    <option value="#">-- Seleccione una categoría --</option>
                    @foreach($types as $type)
                        <option value="{{$type->id}}">{{$type->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="row">
                <div class="col">
                    <label for="file-note" class="col-form-label text-md-right">{{ __('Imagen') }}</label>
                    <input id="file-note" type="file" class="form-control-file border @error('file-note') is-invalid @enderror" name="file-note" value="{{ old('file-note') }}" required autocomplete="file-note" autofocus>
                    @error('file-note')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                </div>
                <div class="col">
                    <label for="file-pdf" class="col-form-label text-md-right">{{ __('Archivo Pdf') }}</label>
                    <input id="file-pdf" type="file" class="form-control-file border @error('file-pdf') is-invalid @enderror" name="file-pdf" value="{{ old('file-pdf') }}" autocomplete="file-pdf">
                    @error('file-pdf')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                </div>
            </div>
            <button type="submit" name="submit" class="btn btn-success mt-4">{{ __('Añadir') }}</button>
        </form>
    </div>
</div>
@stop
