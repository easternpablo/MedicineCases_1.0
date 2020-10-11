@extends('layouts.master')
@section('titulo','Editar entrada')

@section('content')
<h2 class="display-4 text-center">Editar Entrada</h2>
<div class="card mt-5">
    <div class="card-header">{{ __('Editar Entrada') }} <strong>{{ $note->name }}</strong></div>
    <div class="card-body">
        <form method="POST" action="{{ url('/entrada/editar-entrada/submit',['id'=>$note->id]) }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <label for="name" class="col-form-label text-md-right">{{ __('Nombre') }}</label>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $note->name }}" required autocomplete="name" autofocus>
                @error('name')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
            </div>
            <div class="row">
                <label for="description" class="col-form-label text-md-right">{{ __('Descripción') }}</label>
                <textarea id="description" type="text" rows="4" class="form-control @error('description') is-invalid @enderror" name="description" required autocomplete="description" autofocus>{{ $note->description }}</textarea>
                @error('description')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
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
                    <label for="file-note" class="col-form-label text-md-right">{{ __('Imagen') }}</label>
                    <input id="file-note" type="file" class="form-control-file border @error('file-note') is-invalid @enderror" name="file-note" value="{{ old('file-note') }}">
                    <input id="file-note-cambio" type="text" class="form-control-file border @error('file-note-cambio') is-invalid @enderror" name="file-note-cambio" value="{{ $note->image }}"/>
                    <img src="{{ url('entrada',['image'=>$note->image]) }}" width="50" height="50"/>
                    @error('file-note')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                </div>
                <div class="col">
                    <label for="file-pdf" class="col-form-label text-md-right">{{ __('Archivo Pdf') }}</label>
                    <input id="file-pdf" type="file" class="form-control-file border @error('file-pdf') is-invalid @enderror" name="file-pdf" value="{{ old('file-pdf') }}">
                    <input id="file-pdf-cambio" type="text" class="form-control-file border @error('file-pdf-cambio') is-invalid @enderror" name="file-pdf-cambio" value="{{ $note->file }}"/>
                    @error('file-pdf')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                </div>
            </div>
            <button type="submit" name="submit" class="btn btn-warning mt-4">{{ __('Actualizar') }}</button>
        </form>
    </div>
</div>
@endsection
