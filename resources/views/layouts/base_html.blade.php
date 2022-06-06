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
                <button href="{{ route('logout') }}" role="button"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit()"
                    class="btn btnSalir" style="color: white">
                    <i class="fas fa-sign-out-alt mt-1"></i>
                    CERRAR SESION
                </button>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none"
                    style="display: none">
                    @csrf
                </form>
            </div>
        </div>
    </div>
</header>


@yield('main')
