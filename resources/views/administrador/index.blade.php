@extends('layouts.base_html')

@section('title')
    Sistema de patentes - Administrador
@endsection

@push('styles')
    <style>

         <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.12.1/datatables.min.css" />
    </style>
@endpush

@section('main')
    {{-- <div class="contaier">

        <div class="row">
            <div class="col-12">
                <ul class="row tabs tabs-fixed-width ">
                    <li id="patentes-tab" class="col"><a href="#patentes-tab">Patentes</a></li>
                    <li id="empresas-tab" class="col"><a href="#empresas-tab">Empresas</a></li>
                    <li id="usuarios-tab" class="col"><a href="#usuarios-tab">Usuarios</a></li>
                </ul>
            </div>


            <div class="row">
                <div class="col"></div>
                <div class="col"></div>
                <div id="user-div" class="col" value=""></div>
            </div>
        </div>
    </div> --}}
    <div class="contaier">

        <div class="row d-flex flex-row align-items-center justify-content-center">
            <div class="col-12 ">
                <ul class="row mt-3 activo tabs tabs-fixed-width">
                    <li id="patentes-tab" class="col-4"><a href="#patentes-tab" class="enlaces m-0 p-2 d-flex justify-content-center align-items-center text-black">Patentes</a></li>
                    <li id="empresas-tab" class="col-4"><a href="#empresas-tab" class="enlaces m-0 p-2 d-flex justify-content-center align-items-center text-black">Empresas</a></li>
                    <li id="usuarios-tab" class="col-4"><a href="#usuarios-tab" class="enlaces m-0 p-2 d-flex justify-content-center align-items-center text-black">Usuarios</a></li>
                </ul>
            </div>

            <div class="container-fluid row" width="100%">
                <div id="patentes-div" class="col"> @include('partials.patentes-view') </div>
                <div id="empresas-div" class="col"> @include('partials.empresas-view') </div>
                <div id="usuarios-div" class="col"> @include('partials.usuarios-view') </div>
            </div>
        </div>
    </div>
@endsection


@push('scripts')
    <script src="{{ asset('js/usuarios/utilidades.js') }}" defer></script>
@endpush
