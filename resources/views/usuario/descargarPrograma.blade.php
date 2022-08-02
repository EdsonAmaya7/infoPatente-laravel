@extends('layouts.headerAdmin')

@section('title')
Sistema de patentes - Administrador
@endsection

@push('styles')
<style>

</style>
@endpush

@section('subtitulo')
<h5 class="text-center" style="color: white">Sistema de apoyo en el Registro de Patentes</h6>
    @endsection
    @section('menuNavBar')
    <a href="{{ route('register') }}">
        <i class="fas fa-user-plus fa-4x" style="color:white"></i>
    </a>
    @endsection

    @section('main')

    <div class=" container mt-5 pt-5 text-center">
        <h2>Ingresa tus datos, para descargar InfoPatente App</h2>
        <h4>Verifica la carpeta de spam en correo, para la licencia</h4>

        @if(session('mensaje'))
        <p class="
        d-flex justify-content-center align-items-center
        p-3 bg-success text-white rounded ">{{ session('mensaje') }}</p>

        @endif
        @error('correo')
        <p class="
        d-flex justify-content-center align-items-center
        p-3 bg-danger text-white rounded ">{{ $message }}</p>
        @enderror

        <form method="POST" class="container" action="{{ route('correo.form') }}">
            @csrf
            <div class="row container mt-5 pt-5 d-flex flex-row  mx-auto ">
                <div class="col-sm-12 col-md-6">
                    <label class="d-block" for="nombre">Nombre: </label>
                    <input type="text" class="d-block col-md-12" name="nombre" id="">
                </div>

                <div class="col-sm-12 col-md-6">
                    <label class="d-block" for="correo">Correo: </label>
                    <input type="text" class="d-block col-md-12" name="correo" id="">
                </div>

            </div>
            <div class="d-flex justify-content-end">
                <button class="mt-3 btn btn-danger mx-4 col-sm-12 col-md-2 ">Enviar</button>
            </div>

        </form>

    </div>
    @endsection