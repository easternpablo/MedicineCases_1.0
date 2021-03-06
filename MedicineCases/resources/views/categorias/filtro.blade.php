@extends('layouts.master')
@section('titulo','Resultado')

@section('content')
<h2 class="display-4 text-center">{{ $type->name }}</h2>
@if(Route::has('login'))
    @auth
        <form class="row mt-5" method="POST" action="{{ route('updateCategoria',['id'=>$type->id]) }}">
            @csrf
            <div class="col-6">
                <input id="tipoEdit" type="text" class="form-control mt-2 @error('tipoEdit') is-invalid @enderror" name="tipoEdit" value="{{ $type->name }}" required autocomplete="tipoEdit" autofocus>
            </div>
            <div class="col-6">
                <div class="btn-group" role="group">
                    <button type="submit" name="submit" class="btn btn-warning mt-2">{{ __('Actualizar') }}</button>
                    <a href="{{ route('borrarCategoria',['id'=>$type->id]) }}" class="btn btn-danger mt-2 ml-2">Eliminar</a>
                </div>
            </div>
        </form>
    @endauth
@endif
<div class="row">
    @foreach($notes as $note)
    <div class="card text-center ml-1 mt-5">
        <div class="card-header">
            <h5 class="tituloEntrada mr-2">{{ $note->name }}</h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <img src="{{ url("/entrada",['image'=>$note->image1]) }}" alt="Imagen Entrada" height="200" width="200"/>
                    <p><small>Ultima Actualización: <strong>{{ date("d/m/Y H:i",strtotime($note->updated_at)) }}</strong></small></p>
                </div>
            </div>
        </div>
        <div class="card-footer text-muted">
            <div class="btn-group" role="group">
                <a href="{{ url('/entrada/detalle',['id'=>$note->id]) }}" class="btn btn-info mt-2">Ver</a>
                @if(Route::has('login'))
                    @auth
                        <a href="{{ url('/entrada/editar-entrada',['id'=>$note->id]) }}" class="btn btn-warning mt-2 ml-2">Editar</a>
                        <a href="{{ url('/entrada/inicio/delete',['id'=>$note->id]) }}" class="btn btn-danger mt-2 ml-2">Eliminar</a>
                    @endauth
                @endif
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
