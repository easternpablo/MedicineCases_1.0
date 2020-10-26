@extends('layouts.master')
@section('titulo','Inicio')

@section('content')
<h2 class="display-4 text-center"><i class="fas fa-notes-medical mr-3 mt-2"></i>Diario de Guardia: Apuntes de Medicina Intensiva</h2>
<div class="row mt-5">
    @foreach($categories as $category)
        <a href="{{ url('/categoria/filtro',['id'=>$category->id]) }}" class="badge badge-secondary ml-2">
        {{ $category->name }}</a>
    @endforeach
    @if(Route::has('login'))
        @auth
            @if(auth()->user()->role_id === 1)
                <a href="{{ url('/categoria/nueva-categoria') }}" class="badge ml-2 btnAgregar">+</a>
            @endif
        @endauth
    @endif
</div>
<div class="row mt-2">
    @foreach($notes as $note)
    <div class="card text-center mt-2 ml-2" width="250" height="250">
        <div class="card-header">
            <h5 class="tituloEntrada mr-2">{{ $note->name }}</h5>
            <strong class="categoria">{{ $note->type->name }}</strong>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <img src="{{ url("/entrada",['image'=>$note->image1]) }}" alt="Imagen Entrada" height="195" width="195"/>
                </div>
            </div>
        </div>
        <div class="card-footer text-muted">
            <div class="btn-group" role="group">
                <a href="{{ url('/entrada/detalle',['id'=>$note->id]) }}" class="btn btn-info mt-2">Ver</a>
                @if(Route::has('login'))
                    @auth
                        @if(auth()->user()->role_id === 1)
                            <a href="{{ url('/entrada/editar-entrada',['id'=>$note->id]) }}" class="btn btn-warning mt-2 ml-2">Editar</a>
                            <a href="{{ url('/entrada/inicio/delete',['id'=>$note->id]) }}" class="btn btn-danger mt-2 ml-2">Eliminar</a>
                        @endif
                    @endauth
                @endif
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
        <div class="clearfix mt-2 ml-5">
            {{ $notes->links() }}
        </div>
    </div>
</div>
@endsection
