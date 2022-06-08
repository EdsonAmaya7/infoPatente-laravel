@extends('layouts.base')


<header>
    <div class="container-fluid">
        <div class="row fondoNavBar d-flex align-content-center justify-content-center">
            <div class="  col-md-2 ">
                <img src={{ asset('img/MARCAInfoPatente.jpg') }} class="img-fluid">
            </div>
            <div class="mt-3 col-md-8">
                <h3 class="text-center" style="color: white">InfoPatente</h5>
                    @yield('subtitulo')
            </div>
            <div class=" col-md-2 " style="text-align: center">
                {{-- <a class=" " href=""><i class="">input</i>Cerrar Sesion</a> --}}

                @yield('menuNavBar')

            </div>
        </div>
    </div>
</header>

@yield('main')
