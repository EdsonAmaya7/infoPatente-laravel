@extends('layouts.base')




<header>
    <div class="container-fluid">
        <div class="row fondoNavBar">
            <div class="col-md-2">
                <img src={{ asset('img/MARCAInfoPatente.jpg') }} class="img-fluid">
            </div>
            <div class="col-md-8">
                <h3 class="text-center" style="color: white">InfoPatente</h5>
                    <h5 class="text-center" style="color: white">Sistema de apoyo en el Registro de Patentes</h6>
            </div>
            <div class="col-md-2 mt-4" style="text-align: center">
                {{-- <a class=" " href=""><i class="">input</i>Cerrar Sesion</a> --}}
                
                <i class="fas fa-user-plus fa-4x" style="color:white"></i>
            </div>
        </div>
    </div>
</header>


@yield('main')
