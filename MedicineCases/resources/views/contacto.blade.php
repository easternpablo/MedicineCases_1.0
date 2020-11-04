@extends('layouts.master')
@section('titulo','Contacto')

@section('content')
<h2 class="display-4 text-center">Contacto</h2>
<div class="row mt-5">
    <div class="col-2"></div>
    <div class="col-8 text-center">
        <div class="card">
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <p>Contacta con nosotros:</p>
                <p><a href="mailto:administradores_intensiva@gmail.com">administradores_intensiva@gmail.com</a></p>
                <p>
                    <a href="#"><i class="fab fa-whatsapp-square fa-3x"></i></a>
                    <a href="#"><i class="fab fa-facebook-square fa-3x ml-2"></i></a>
                    <a href="#"><i class="fab fa-twitter-square fa-3x ml-2"></i></a>
                    <a href="#"><i class="fab fa-instagram-square fa-3x ml-2"></i></a>
                    <a href="#"><i class="fab fa-linkedin fa-3x ml-2"></i></a>
                    <a href="#"><i class="fab fa-youtube-square fa-3x ml-2"></i></a>
                </p>
                <br>
                <div class="row">
                    <div class="col-6 mt-3">
                        <p><i class="fas fa-map-marker-alt fa-3x"></i></p>
                        <p>DÓNDE ESTAMOS</p>
                        <p>Avenida Menendez Pidal S/N</p>
                        <p>14004 Córdoba España</p>
                    </div>
                    <div class="col-6">
                        <img src="{{ url('img/HospitalReinaSofia.jpg') }}" width="300" height="200"/>
                    </div>
                </div>
              </li>
            </ul>
        </div>
    </div>
    <div class="col-2"></div>
</div>
@endsection
