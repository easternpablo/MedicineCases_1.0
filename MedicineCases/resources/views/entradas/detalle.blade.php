@extends('layouts.master')
@section('titulo','Detalle')

@section('content')
<h2 class="display-4 text-center">{{ $note->name }}</h2>
<h4 class="text-white">Categoría: <strong class="text-white">{{ $note->type->name }}</strong></h4>
<div class="card mt-5">
    <ul class="list-group list-group-flush">
      <li class="list-group-item">
        <div class="row">
            <div class="col"><pre>{{ html_entity_decode(strip_tags($note->description)) }}</pre></div>
        </div>
      </li>
      <li class="list-group-item">
        <div class="row">
            <div class="col">
                @if($note->image1 != null)
                    <label>Imagen 1</label>
                    <img src="{{ url('/entrada',['image1'=>$note->image1]) }}" alt="Imagen Entrada" height="300" width="300"/>
                @endif
            </div>
            <div class="col">
                @if($note->image2 != null)
                    <label>Imagen 2</label>
                    <img src="{{ url('/entrada',['image2'=>$note->image2]) }}" alt="Imagen Entrada" height="300" width="300"/>
                @endif
            </div>
            <div class="col">
                @if($note->image3 != null)
                    <label>Imagen 3</label>
                    <img src="{{ url('/entrada',['image3'=>$note->image3]) }}" alt="Imagen Entrada" height="300" width="300"/>
                @endif
            </div>
            <div class="col">
                @if($note->image4 != null)
                    <label>Imagen 4</label>
                    <img src="{{ url('/entrada',['image4'=>$note->image4]) }}" alt="Imagen Entrada" height="300" width="300"/>
                @endif
            </div>
            <div class="col">
                @if($note->image5 != null)
                    <label>Imagen 5</label>
                    <img src="{{ url('/entrada',['image5'=>$note->image5]) }}" alt="Imagen Entrada" height="300" width="300"/>
                @endif
            </div>
            <div class="col">
                @if($note->image6 != null)
                    <label>Imagen 6</label>
                    <img src="{{ url('/entrada',['image6'=>$note->image6]) }}" alt="Imagen Entrada" height="300" width="300"/>
                @endif
            </div>
            <div class="col">
                @if($note->image7 != null)
                    <label>Imagen 7</label>
                    <img src="{{ url('/entrada',['image7'=>$note->image7]) }}" alt="Imagen Entrada" height="300" width="300"/>
                @endif
            </div>
            <div class="col">
                @if($note->image8 != null)
                    <label>Imagen 8</label>
                    <img src="{{ url('/entrada',['image8'=>$note->image8]) }}" alt="Imagen Entrada" height="300" width="300"/>
                @endif
            </div>
            <div class="col">
                @if($note->image9 != null)
                    <label>Imagen 9</label>
                    <img src="{{ url('/entrada',['image9'=>$note->image9]) }}" alt="Imagen Entrada" height="300" width="300"/>
                @endif
            </div>
            <div class="col">
                @if($note->image10 != null)
                    <label>Imagen 10</label>
                    <img src="{{ url('/entrada',['image10'=>$note->image10]) }}" alt="Imagen Entrada" height="300" width="300"/>
                @endif
            </div>
        </div>
      </li>
      <li class="list-group-item">
        <div class="row mt-2">
            <div class="col-3"></div>
            <div class="col-6">
                @if($note->file1 != null)
                    <a href="{{ url('/entrada/pdf',['file1'=>$note->file1]) }}"><i class="fas fa-file-download fa-1x mr-1"></i>Descargar Pdf(1)</a>
                @endif
                @if($note->file2 != null)
                    <a href="{{ url('/entrada/pdf',['file2'=>$note->file2]) }}" class="ml-3"><i class="fas fa-file-download fa-1x mr-1"></i>Descargar Pdf(2)</a>
                @endif
            </div>
            <div class="col-3"></div>
        </div>
      </li>
    </ul>
</div>
@endsection
