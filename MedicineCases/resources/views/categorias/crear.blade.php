@extends('layouts.master')
@section('titulo','Nueva Categoria')

@section('content')
<h2 class="display-4 text-center">Nueva Categoria</h2>
<div class="card mt-5">
    <div class="card-header">{{ __('Nueva Categoria') }}</div>
    <div class="card-body">
        <form method="POST" action="{{ route('guardarCategoria') }}">
            @csrf
            <label for="tipo" class="col-form-label text-md-right">{{ __('Categoria') }}</label>
            <input id="tipo" type="text" class="form-control @error('tipo') is-invalid @enderror" name="tipo" value="{{ old('tipo') }}" required autocomplete="tipo" autofocus>
            @error('tipo')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
            <button type="submit" name="submit" class="btn btn-success mt-4">{{ __('Añadir') }}</button>
        </form>
    </div>
</div>
@endsection
