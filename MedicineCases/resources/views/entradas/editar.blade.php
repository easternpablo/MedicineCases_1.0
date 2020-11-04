@extends('layouts.master')
@section('titulo','Editar entrada')

@section('content')
<h2 class="display-4 text-center">Editar Entrada</h2>
<div class="card mt-5">
    <div class="card-header">{{ __('Editar Entrada') }} <strong>{{ $note->name }}</strong></div>
    <div class="card-body">
        <form method="POST" action="{{ route('updateEntrada',['id'=>$note->id]) }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <label for="name" class="col-form-label text-md-right">{{ __('Nombre') }}</label>
                <input id="name" type="text" class="form-control mb-3 @error('name') is-invalid @enderror" name="name" value="{{ $note->name }}" required autocomplete="name" autofocus>
                @error('name')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
            </div>
            <div class="row">
                <div class="col-12">
                    <textarea id="cke_editor" type="text" rows="20" cols="20" class="ckeditor form-control mt-2 @error('cke_editor') is-invalid @enderror" name="cke_editor" value="{{ old('cke_editor') }}" required autocomplete="cke_editor" autofocus>{!! html_entity_decode($note->description) !!}</textarea>
                    @error('cke_editor')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                </div>
            </div>
            <div class="row">
                <label for="type" class="col-form-label text-md-right">{{ __('Categoría') }}</label>
                <select id="type" class="form-control @error('type') is-invalid @enderror" name="type" value="{{ old('type') }}" required autocomplete="type" autofocus>
                    <option value="{{ $category_note->id }}" selected>{{ $category_note->name }}</option>
                    @foreach($categories as $category)
                        @if($category->id != $category_note->id)
                            <option value="{{$category->id}}">{{ $category->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="row">
                <div class="col">
                    <label for="file-note" class="col-form-label text-md-right">{{ __('Imagen presentación') }}</label>
                    <input id="file-note" type="file" class="form-control-file border @error('file-note') is-invalid @enderror" name="file-note" value="{{ old('file-note') }}">
                    <input id="file-note-cambio" type="text" class="form-control-file border @error('file-note-cambio') is-invalid @enderror" name="file-note-cambio" value="{{ $note->image1 }}"/>
                    <img src="{{ url('entrada',['image1'=>$note->image1]) }}" width="50" height="50"/>
                    @error('file-note')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="file-pdf1" class="col-form-label text-md-right">{{ __('Archivo Pdf(1)') }}</label>
                    <input id="file-pdf1" type="file" class="form-control-file border @error('file-pdf1') is-invalid @enderror" name="file-pdf1" value="{{ old('file-pdf1') }}">
                    <input id="file-pdf-cambio1" type="text" class="form-control-file border @error('file-pdf-cambio1') is-invalid @enderror" name="file-pdf-cambio1" value="{{ $note->file1 }}"/>
                    @error('file-pdf1')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                </div>
                <div class="col">
                    <label for="file-pdf2" class="col-form-label text-md-right">{{ __('Archivo Pdf(2)') }}</label>
                    <input id="file-pdf2" type="file" class="form-control-file border @error('file-pdf2') is-invalid @enderror" name="file-pdf2" value="{{ old('file-pdf2') }}">
                    <input id="file-pdf-cambio2" type="text" class="form-control-file border @error('file-pdf-cambio2') is-invalid @enderror" name="file-pdf-cambio2" value="{{ $note->file2 }}"/>
                    @error('file-pdf2')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                </div>
            </div>
            <button type="submit" name="submit" class="btn btn-warning mt-4">{{ __('Actualizar') }}</button>
        </form>
    </div>
</div>
@endsection
