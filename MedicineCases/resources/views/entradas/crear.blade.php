@extends('layouts.master')
@section('titulo','Nueva Entrada')

@section('content')
<h2 class="display-4 text-center">Nueva Entrada</h2>
<div class="card mt-5">
    <div class="card-header">{{ __('Nueva Entrada') }}</div>
    <div class="card-body">
        <form method="POST" action="{{ route('guardarEntrada') }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <label for="name" class="col-form-label text-md-right">{{ __('Nombre*') }}</label>
                <input id="name" type="text" class="mb-3 form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
            </div>
            <div class="row">
                <div class="col-12">
                    <textarea id="cke_editor" type="text" rows="20" cols="20" class="ckeditor form-control mt-2 @error('cke_editor') is-invalid @enderror" name="cke_editor" value="{{ old('cke_editor') }}" required autocomplete="cke_editor" autofocus></textarea>
                    @error('cke_editor')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                </div>
            </div>
            <div class="row">
                <label for="type" class="col-form-label text-md-right">{{ __('Categoría*') }}</label>
                <select id="type" class="form-control @error('type') is-invalid @enderror" name="type" value="{{ old('type') }}" required autocomplete="type" autofocus>
                    <option value="#">-- Seleccione una categoría --</option>
                    @foreach($types as $type)
                        <option value="{{$type->id}}">{{$type->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="row">
                <div class="col">
                    <label for="file-note1" class="col-form-label text-md-right">{{ __('Imagen presentación') }}</label>
                    <input id="file-note1" type="file" class="form-control-file border @error('file-note1') is-invalid @enderror" name="file-note1" value="{{ old('file-note1') }}" autocomplete="file-note1">
                    @error('file-note1')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="file-pdf1" class="col-form-label text-md-right">{{ __('Archivo Pdf(1)') }}</label>
                    <input id="file-pdf1" type="file" class="form-control-file border @error('file-pdf') is-invalid @enderror" name="file-pdf1" value="{{ old('file-pdf1') }}" autocomplete="file-pdf1">
                    @error('file-pdf1')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                </div>
                <div class="col">
                    <label for="file-pdf2" class="col-form-label text-md-right">{{ __('Archivo Pdf(2)') }}</label>
                    <input id="file-pdf2" type="file" class="form-control-file border @error('file-pdf2') is-invalid @enderror" name="file-pdf2" value="{{ old('file-pdf2') }}" autocomplete="file-pdf2">
                    @error('file-pdf2')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                </div>
            </div>
            <button type="submit" name="submit" class="btn btn-success mt-4">{{ __('Añadir') }}</button>
        </form>
    </div>
</div>
@endsection
