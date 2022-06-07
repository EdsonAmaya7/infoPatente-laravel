@extends('layouts.base')

<header>
    <div class="container-fluid">
        <div class="row fondoNavBar">
            <div class="col-md-2">
                <img src={{ asset('img/LogoInfopatente.jpg') }} class="img-fluid">
            </div>
            <div class="col-md-8">
                <h3 class="text-center" style="color: white">InfoPatente</h5>
                    <h5 class="text-center" style="color: white">@yield('subtitulo')</h6>
            </div>
            <div class="col-md-2 mt-4" style="text-align: right">
                <a href="{{ route('patentes.view') }}" role="button" class="btn btnSalir" style="color: white">
                    <i class="fas fa-sign-out-alt mt-1"></i>
                    Atras
                </a>
            </div>
        </div>
    </div>
</header>

@yield('main')
