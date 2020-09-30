<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio - Diario de Guardia</title>
    <link rel="icon" href="{{url('img/logo.jpeg')}}"/>
    <link rel="stylesheet" href="{{ asset('plugins/Bootstrap/css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ url('css/master.css') }}"/>
    <link href="https://fonts.googleapis.com/css2?family=Wellfleet&display=swap" rel="stylesheet">
</head>
<body>
<div class="vertical-nav" id="sidebar">
    <div class="py-4 px-3 mb-4 bg-light">
        <div class="media d-flex align-items-center">
            <img src="{{ url('img/logo.jpeg') }}" alt="..." width="200" class="mr-3 rounded-circle img-thumbnail shadow-sm">
        </div>
    </div>
    <p class="text-white font-weight-bold text-uppercase px-3 small pb-4 mb-0">Principal</p>
    <ul id="options" class="nav flex-column mb-0">
        <li class="nav-item">
            <a href="{{ url('/inicio') }}" class="nav-link text-white font-italic">Inicio</a>
        </li>
        <li class="nav-item">
            <a href="{{ url('/quienes-somos') }}" class="nav-link text-white font-italic">Quiénes Somos</a>
        </li>
        <li class="nav-item">
            <a href="{{ url('/apuntes') }}" class="nav-link text-white font-italic">Apuntes</a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link text-white font-italic">Contacto</a>
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
    <!-- Toggle button -->
    <button id="sidebarCollapse" type="button" class="btn btn-light rounded-pill shadow-sm px-4 mb-4">
        <i class="fa fa-bars mr-2"></i>
        <small class="text-uppercase font-weight-bold">Mostrar</small>
    </button>
    <!-- Demo content -->
    <h2 class="display-4 text-center">Diario de Guardia: Apuntes de Medicina Intensiva</h2>
    <div class="separator"></div>
    <div class="row">
      <div class="col-lg-7">
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
            aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
            nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
            officia deserunt mollit anim id est laborum.</p>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
            aute irure dolor.</p>
        <div class="bg-white p-5 rounded my-5 shadow-sm">
          <p class="lead font-italic mb-0">"Lorem ipsum dolor sit amet, consectetur
              adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
              commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
        </div>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
            aute irure dolor.</p>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
            aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
            deserunt mollit anim id est laborum.</p>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
            aute irure dolor.</p>
      </div>
      <div class="col-lg-5">
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
            aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
            nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
            officia deserunt mollit anim id est laborum.</p>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
            aute irure dolor.</p>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
            aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
            nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
            officia deserunt mollit anim id est laborum.</p>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
            aute irure dolor.</p>
      </div>
    </div>
</div>
<script src="{{ asset('plugins/Jquery/js/jquery-3.5.1.js') }}"></script>
<script src="{{ url('js/master.js') }}"></script>
<script src="{{ asset('plugins/Bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>