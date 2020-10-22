@extends('layouts.master')
@section('titulo','Detalle Entrada')

@section('content')
<h2 class="display-4 text-center">{{ $note->name }}</h2>
<h4>Categoría: <strong>{{ $note->type->name }}</strong></h4>
<div class="row mt-5">
    <div class="col-8"><pre>{{ html_entity_decode($note->description) }}</pre></div>
    <div class="col-4">
        @if($note->image1 != null)
            <label>Imagen 1</label>
            <img src="{{ url('/entrada',['image1'=>$note->image1]) }}" alt="Imagen Entrada" height="350" width="350"/>
        @endif
        <br>
        @if($note->image2 != null)
            <label>Imagen 2</label>
            <img src="{{ url('/entrada',['image2'=>$note->image2]) }}" alt="Imagen Entrada" height="350" width="350"/>
        @endif
        <br>
        @if($note->image3 != null)
            <label>Imagen 3</label>
            <img src="{{ url('/entrada',['image3'=>$note->image3]) }}" alt="Imagen Entrada" height="350" width="350"/>
        @endif
        <br>
        @if($note->image4 != null)
            <label>Imagen 4</label>
            <img src="{{ url('/entrada',['image4'=>$note->image4]) }}" alt="Imagen Entrada" height="350" width="350"/>
        @endif
        <br>
        @if($note->image5 != null)
            <label>Imagen 5</label>
            <img src="{{ url('/entrada',['image5'=>$note->image5]) }}" alt="Imagen Entrada" height="350" width="350"/>
        @endif
        <br>
        @if($note->image6 != null)
            <label>Imagen 6</label>
            <img src="{{ url('/entrada',['image6'=>$note->image6]) }}" alt="Imagen Entrada" height="350" width="350"/>
        @endif
        <br>
        @if($note->image7 != null)
            <label>Imagen 7</label>
            <img src="{{ url('/entrada',['image7'=>$note->image7]) }}" alt="Imagen Entrada" height="350" width="350"/>
        @endif
        <br>
        @if($note->image8 != null)
            <label>Imagen 8</label>
            <img src="{{ url('/entrada',['image8'=>$note->image8]) }}" alt="Imagen Entrada" height="350" width="350"/>
        @endif
        <br>
        @if($note->image9 != null)
            <label>Imagen 9</label>
            <img src="{{ url('/entrada',['image9'=>$note->image9]) }}" alt="Imagen Entrada" height="350" width="350"/>
        @endif
        <br>
        @if($note->image10 != null)
            <label>Imagen 10</label>
            <img src="{{ url('/entrada',['image10'=>$note->image10]) }}" alt="Imagen Entrada" height="350" width="350"/>
        @endif
    </div>
</div>
<div class="row mt-2">
    <div class="col-3"></div>
    <div class="col-6">
        <a target="_blank" href="#">Ver Pdf</a>
    </div>
    <div class="col-3"></div>
</div>
@endsection
