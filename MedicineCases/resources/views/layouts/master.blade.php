<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo') - Diario de Guardia</title>
    <link rel="icon" href="{{url('img/iconoApp.png')}}"/>
    <link rel="stylesheet" href="{{ asset('plugins/Bootstrap/css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{url('css/master.css')}}"/>
</head>
<body>
<div class="vertical-nav bg-white" id="sidebar">
    <div class="py-4 px-3 mb-4 bg-light">
        <div class="media d-flex align-items-center">
            <img src="{{ url('img/Perfil.png') }}" alt="..." width="65" class="mr-3 rounded-circle img-thumbnail shadow-sm">
            <div class="media-body">
                <h4 class="m-0">Pablo Vilches</h4>
                <p class="font-weight-light text-muted mb-0">Desarrollador Web</p>
            </div>
        </div>
    </div>
    <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0">Principal</p>
    <ul class="nav flex-column bg-white mb-0">
        <li class="nav-item">
            <a href="{{ action('InicioController@index') }}" class="nav-link text-dark font-italic bg-light">
              <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>Inicio
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link text-dark font-italic">
              <i class="fa fa-address-card mr-3 text-primary fa-fw"></i>Quiénes Somos
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link text-dark font-italic">
              <i class="fa fa-cubes mr-3 text-primary fa-fw"></i>Apuntes
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link text-dark font-italic">
              <i class="fa fa-picture-o mr-3 text-primary fa-fw"></i>Contacto
            </a>
        </li>
        <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0">
            <form action="{{ url('/logout') }}" method="POST" style="display:inline">
                @csrf
                <button type="submit" class="btn btn-link nav-link" style="display:inline;cursor:pointer;">
                    Cerrar sesión
                </button>
            </form>
        </p>
    </ul>
</div>
<div class="page-content p-5" id="content">
    @yield('content')
</div>
<script src="{{ asset('plugins/Jquery/js/jquery-3.5.1.js') }}"></script>
<script src="{{ url('js/master.js') }}"></script>
<script src="{{ asset('plugins/Bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
