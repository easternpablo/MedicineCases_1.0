<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalle - Diario de Guardia</title>
    <link rel="icon" href="{{url('img/logo.jpeg')}}"/>
    <link rel="stylesheet" href="{{ asset('plugins/Bootstrap/css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('plugins/Fontawesome/css/all.css') }}"/>
    <link href="https://fonts.googleapis.com/css2?family=Wellfleet&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Monofett&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('css/master.css') }}"/>
</head>
<body>
    <div class="vertical-nav bg-white" id="sidebar">
        <div class="py-4 px-3 mb-4 bg-light">
            <div class="media d-flex align-items-center">
                <img src="{{ url('img/logo.jpeg') }}" width="200" class="mr-3 rounded-circle img-thumbnail shadow-sm">
            </div>
        </div>
        @if(Route::has('login'))
            @auth
                <p class="text-white font-weight-bold text-uppercase px-3 small pb-4 mb-0">
                    Bienvenido: {{ auth()->user()->username }} <i class="fas fa-user-md fa-2x white"></i>
                </p>
            @endauth
        @endif
        <ul class="nav flex-column mb-0">
            <li class="nav-item">
                <a href="{{ url('/') }}" class="nav-link text-white font-italic">
                <i class="fas fa-home fa-1x mr-1"></i>Inicio</a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/quienes-somos') }}" class="nav-link text-white font-italic">
                <i class="fas fa-users fa-1x mr-1"></i>Quiénes somos</a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/contacto') }}" class="nav-link text-white font-italic">
                <i class="fas fa-at fa-1x mr-1"></i>Contacto</a>
            </li>
            <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0">
                <form action="{{ url('/logout') }}" method="POST" style="display:inline">
                    @csrf
                    <button type="submit" class="btn btn-link nav-link text-bold text-white" >
                        <i class="fas fa-power-off fa-1x"></i> Cerrar sesión
                    </button>
                </form>
            </p>
        </ul>
    </div>
    <div class="page-content p-5" id="content">
        <button id="sidebarCollapse" type="button" class="btn btn-light rounded-pill shadow-sm px-4 mb-4">
            <i class="fa fa-bars mr-2"></i>
            <small class="text-uppercase font-weight-bold">Mostrar</small>
        </button>
        <h2 class="display-4 text-center">{{ $note->name }}</h2>
        <h4>Categoría: <strong>{{ $note->type->name }}</strong></h4>
        <div class="row mt-5">
            <div class="col"><pre>{{ html_entity_decode(strip_tags($note->description)) }}</pre></div>
        </div>
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
    </div>
<script src="{{ asset('plugins/Jquery/js/jquery-3.5.1.js') }}"></script>
<script src="{{ url('js/master.js') }}"></script>
<script src="{{ asset('plugins/Bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('ckeditor_basico/ckeditor.js') }}"></script>
<script type="text/javascript">$(document).ready(function () {$('.ckeditor').ckeditor();});</script>
</body>
</html>

