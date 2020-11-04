@extends('layouts.master')
@section('titulo','Quiénes Somos')

@section('content')
<h2 class="display-4 text-center">Quiénes Somos</h2>
<div class="row mt-5">
    <div class="col-1"></div>
    <div class="col-10">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <p>Somos un equipo de Médicos Internos Residentes de Medicina Intensiva del hospital Reina Sofía de Córdoba
                    comprometidos con la formación médica, la buena praxis y la bioética. Nuestro objetivo con esta herramienta
                    web consiste en repasar, de forma esquemática, práctica y útil los aspectos más importantes de aquellos
                    pacientes subsidiarios de ingreso en UCI. No pretendemos redactar un tratado de Medicina Intensiva, sino
                    ofrecer un algoritmo diagnóstico-terapéutico básico para no pasar por alto ningún aspecto importante a la hora
                    de ingresar a un enfermo en nuestras camas. No es un lugar donde empezar a estudiar Cuidados Intensivos, pero
                    sí un buen sitio para repasar los aspectos clave para la guardia.</p>
                </div>
                <div class="row">
                    <p>Esperamos que os resulte útil.</p>
                </div>
                <div class="row">
                    <p>¡Buena guardia!</p>
                </div>
                <div class="row">
                    <img src="{{ url('img/imgSomos.jpeg') }}" height="500" width="800"/>
                </div>
            </div>
        </div>
    </div>
    <div class="col-1"></div>
</div>
@endsection
