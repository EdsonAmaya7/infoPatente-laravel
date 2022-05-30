@extends('layouts.base')



@section('header')
    <div class="container-fluid ">
        <div class="row fondoNavBar">
            <div class="col-2">
                <img src={{ asset('img/MARCAInfoPatente.jpg') }} class="img-fluid">
            </div>
            <div class="col-8">
                <h3 class="text-center text-white mb-2">InfoPatente</h5>
                    <h5 class="text-center text-white mb-0">Sistema de apoyo en el Registro de Patentes</h6>
            </div>
            <div class="col-2">
                {{-- <a class=" " href=""><i class="">input</i>Cerrar Sesion</a> --}}
                <a href="{{ route('logout') }}" role="button"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit()"
                    class="d-flex justify-content-end btnLogout text-center">
                    <i class="fas fa-sign-out-alt  mt-1"></i>
                    CERRAR SESION
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none"
                    style="display: none">
                    @csrf
                </form>
            </div>
        </div>
    </div>

    {{-- @section('body')
    <div class="container-fluid">
        <div class="row red accent-4 valign-wrapper z-depth-2">
            <div class="col l2 hide-on-med-and-down">
                <img src="img/MARCAInfoPaente.jpg" class="responsive-img valign-wrapper">
            </div>
            <div class="col l4 m7 s6 offset-s3 offset-m2 offset-l2 center-align white-text">
                <h5>InfoPatente</h5>
                <h6>Sistema de apoyo en el Registro de Patentes</h6>
            </div>
            <div class="col l4 right-align">
                <a class="waves-effect btn red lighten-4 black-text " href="Modelo/Session_destroy.php"><i
                        class="material-icons left hide-on-med-and-down">input</i>Cerrar Sesion</a>
            </div>
        </div>
    </div>
@endsection --}}



    @yield('main')
@endsection
