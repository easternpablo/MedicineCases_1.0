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
                    <label for="file-note1" class="col-form-label text-md-right">{{ __('Imagen(1)') }}</label>
                    <input id="file-note1" type="file" class="form-control-file border @error('file-note1') is-invalid @enderror" name="file-note1" value="{{ old('file-note1') }}" autocomplete="file-note1">
                    @error('file-note1')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                </div>
                <div class="col">
                    <label for="file-pdf1" class="col-form-label text-md-right">{{ __('Archivo Pdf(1)') }}</label>
                    <input id="file-pdf1" type="file" class="form-control-file border @error('file-pdf') is-invalid @enderror" name="file-pdf1" value="{{ old('file-pdf1') }}" autocomplete="file-pdf1">
                    @error('file-pdf1')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="file-note2" class="col-form-label text-md-right">{{ __('Imagen(2)') }}</label>
                    <input id="file-note2" type="file" class="form-control-file border @error('file-note2') is-invalid @enderror" name="file-note2" value="{{ old('file-note2') }}" autocomplete="file-note2">
                    @error('file-note2')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                </div>
                <div class="col">
                    <label for="file-pdf2" class="col-form-label text-md-right">{{ __('Archivo Pdf(2)') }}</label>
                    <input id="file-pdf2" type="file" class="form-control-file border @error('file-pdf2') is-invalid @enderror" name="file-pdf2" value="{{ old('file-pdf2') }}" autocomplete="file-pdf2">
                    @error('file-pdf2')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                </div>
            </div>
            <div class="row">
                <label for="file-note3" class="col-form-label text-md-right">{{ __('Imagen(3)') }}</label>
                <input id="file-note3" type="file" class="form-control-file border @error('file-note3') is-invalid @enderror" name="file-note3" value="{{ old('file-note3') }}" autocomplete="file-note3">
                @error('file-note3')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
            </div>
            <div class="row">
                <label for="file-note4" class="col-form-label text-md-right">{{ __('Imagen(4)') }}</label>
                <input id="file-note4" type="file" class="form-control-file border @error('file-note4') is-invalid @enderror" name="file-note4" value="{{ old('file-note4') }}" autocomplete="file-note4">
                @error('file-note4')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
            </div>
            <div class="row">
                <label for="file-note5" class="col-form-label text-md-right">{{ __('Imagen(5)') }}</label>
                <input id="file-note5" type="file" class="form-control-file border @error('file-note5') is-invalid @enderror" name="file-note5" value="{{ old('file-note5') }}" autocomplete="file-note5">
                @error('file-note5')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
            </div>
            <div class="row">
                <label for="file-note6" class="col-form-label text-md-right">{{ __('Imagen(6)') }}</label>
                <input id="file-note6" type="file" class="form-control-file border @error('file-note6') is-invalid @enderror" name="file-note6" value="{{ old('file-note6') }}" autocomplete="file-note6">
                @error('file-note6')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
            </div>
            <div class="row">
                <label for="file-note7" class="col-form-label text-md-right">{{ __('Imagen(7)') }}</label>
                <input id="file-note7" type="file" class="form-control-file border @error('file-note7') is-invalid @enderror" name="file-note7" value="{{ old('file-note7') }}" autocomplete="file-note7">
                @error('file-note7')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
            </div>
            <div class="row">
                <label for="file-note8" class="col-form-label text-md-right">{{ __('Imagen(8)') }}</label>
                <input id="file-note8" type="file" class="form-control-file border @error('file-note8') is-invalid @enderror" name="file-note8" value="{{ old('file-note8') }}" autocomplete="file-note8">
                @error('file-note8')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
            </div>
            <div class="row">
                <label for="file-note9" class="col-form-label text-md-right">{{ __('Imagen(9)') }}</label>
                <input id="file-note9" type="file" class="form-control-file border @error('file-note9') is-invalid @enderror" name="file-note9" value="{{ old('file-note9') }}" autocomplete="file-note9">
                @error('file-note9')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
            </div>
            <div class="row">
                <label for="file-note10" class="col-form-label text-md-right">{{ __('Imagen(10)') }}</label>
                <input id="file-note10" type="file" class="form-control-file border @error('file-note10') is-invalid @enderror" name="file-note10" value="{{ old('file-note10') }}" autocomplete="file-note10">
                @error('file-note10')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
            </div>
            <button type="submit" name="submit" class="btn btn-success mt-4">{{ __('Añadir') }}</button>
        </form>
    </div>
</div>
@endsection
