<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo') - Diario de Guardia</title>
    <link rel="icon" href="{{url('img/logo.jpeg')}}"/>
    <link rel="stylesheet" href="{{ asset('plugins/Bootstrap/css/bootstrap.min.css') }}"/>
    <link href="https://fonts.googleapis.com/css2?family=Wellfleet&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Monofett&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('css/master.css') }}"/>
</head>
<body>
<div class="vertical-nav bg-white" id="sidebar">
    <div class="py-4 px-3 mb-4 bg-light">
        <div class="media d-flex align-items-center">
            <img src="{{ url('img/logo.jpeg') }}" alt="..." width="200" class="mr-3 rounded-circle img-thumbnail shadow-sm">
        </div>
    </div>
    @if(Route::has('login'))
        @auth
            <p class="text-white font-weight-bold text-uppercase px-3 small pb-4 mb-0">
                Bienvenido: {{ auth()->user()->username }}
            </p>
        @endauth
    @endif
    <ul class="nav flex-column mb-0">
        <li class="nav-item">
            <a href="{{ url('/') }}" class="nav-link text-white font-italic">
            Inicio</a>
        </li>
        <li class="nav-item">
            <a href="{{ url('/quienes-somos') }}" class="nav-link text-white font-italic">
            Quiénes somos</a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link text-white font-italic">
            Contacto</a>
        </li>
        <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0">
            <form action="{{ url('/logout') }}" method="POST" style="display:inline">
                @csrf
                <button type="submit" class="btn btn-link nav-link text-bold text-white" style="display:inline;cursor:pointer;">
                    Cerrar sesión
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
    @yield('content')
</div>
<script src="{{ asset('plugins/Jquery/js/jquery-3.5.1.js') }}"></script>
<script src="{{ url('js/master.js') }}"></script>
<script src="{{ asset('plugins/Bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
