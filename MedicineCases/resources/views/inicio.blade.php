@extends('layouts.master')
@section('titulo','Inicio')

@section('content')
<h2 class="display-4 text-center">Diario de Guardia: Apuntes de Medicina Intensiva</h2>
<div class="separator"></div>
<div class="row">
    @foreach($categories as $category)
        <a href="#" class="badge badge-secondary ml-2">{{ $category->name }}</a>
    @endforeach
    @if(Route::has('login'))
        @auth
            @if(auth()->user()->role_id === 1)
                <a href="{{ url('/categoria/nueva-categoria') }}" class="badge ml-2 btnAgregar">+</a>
            @endif
        @endauth
    @endif
</div>
<div class="row">
    <div class="separator"></div>
    @foreach($notes as $note)
    <div class="card mt-2 ml-5">
        <div class="card-header">
            <h3 class="tituloEntrada mr-2">{{ $note->name }}</h3>
            <strong class="categoria">{{ $note->type->name }}</strong>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12">
                    <img src="{{ url("/entrada",['image'=>$note->image]) }}" alt="Imagen Entrada" height="195" width="195"/>
                </div>
                <a href="{{ url('/entrada/detalle',['id'=>$note->id]) }}" class="btn btn-info mt-2">Ver</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
<div class="row mt-2">
    <div class="col-6">
        @if(Route::has('login'))
            @auth
                @if(auth()->user()->role_id === 1)
                    <a href="{{ url('/entrada/nueva-entrada') }}" class="btn btnAgregar">Añadir Entrada</a>
                @endif
            @endauth
        @endif
    </div>
    <div class="col-6">
        <div class="clearfix mt-2">
            {{ $notes->links() }}
        </div>
    </div>
</div>
@stop
