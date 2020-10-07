@extends('layouts.master')
@section('titulo','Detalle Entrada')

@section('content')
<h2 class="display-4 text-center">{{ $note->name }}</h2>
<h4>Categoría: <strong>{{ $note->type->name }}</strong></h4>
<div class="row mt-5">
    <div class="col-3"></div>
    <div class="col-6">
        <img src="{{ url('/entrada',['image'=>$note->image]) }}" alt="Imagen {{ $note->name }}" height="350" width="350"/>
    </div>
    <div class="col-3"></div>
</div>
<div class="row mt-2">
    <div class="col-12"><p>{{ $note->description }}</p></div>
</div>
<div class="row mt-2">
    <div class="col-3"></div>
    <div class="col-6">
        <a target="_blank" href="{{ url('/entrada', ['file'=>$note->file]) }}">Ver Pdf</a>
    </div>
    <div class="col-3"></div>
</div>
@stop
