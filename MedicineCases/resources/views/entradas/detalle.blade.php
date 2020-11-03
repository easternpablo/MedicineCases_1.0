@extends('layouts.master')
@section('titulo','Detalle')

@section('content')
<h2 class="display-4 text-center">{{ $note->name }}</h2>
<h4 class="text-white">Categoría: <strong class="text-white">{{ $note->type->name }}</strong></h4>
<div class="card mt-5">
    <ul class="list-group list-group-flush">
      <li class="list-group-item">
        <div class="row">
            <div class="col">{!! html_entity_decode($note->description) !!}</div>
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
