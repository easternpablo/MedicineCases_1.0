@extends('layouts.master')
@section('titulo','Resultado')

@section('content')
<h2 class="display-4 text-center">{{ $type->name }}</h2>
<div class="row mt-5">
    @foreach($notes as $note)
    <div class="card text-center ml-5">
        <div class="card-header">
            <h3 class="tituloEntrada mr-2">{{ $note->name }}</h3>
            <strong class="categoria">{{ $type->name }}</strong>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <img src="{{ url("/entrada",['image'=>$note->image]) }}" alt="Imagen Entrada" height="195" width="195"/>
                </div>
            </div>
        </div>
        <div class="card-footer text-muted">
            <div class="btn-group" role="group">
                <a href="{{ url('/entrada/detalle',['id'=>$note->id]) }}" class="btn btn-info mt-2">Ver</a>
                @if(Route::has('login'))
                    @auth
                        @if(auth()->user()->role_id === 1)
                            <a href="#" class="btn btn-warning mt-2 ml-2">Editar</a>
                            <a href="{{ url('/entrada/inicio/delete',['id'=>$note->id]) }}" class="btn btn-danger mt-2 ml-2">Eliminar</a>
                        @endif
                    @endauth
                @endif
            </div>
        </div>
    </div>
    @endforeach
</div>
@stop
