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

<div class=" container mt-5 pt-5 d-flex justify-content-around align-center row mx-auto">
    <div class="p-3 ms-3 mb-3 bg-primary d-flex align-items-center justify-content-center  col-sm-12  col-md-4">
        <a href="{{ route('download') }}" class="text-white text-center">Descargar InfoPatente</a>
    </div>
    
    <div class="p-3  ms-3 mb-3 bg-primary d-flex align-items-center justify-content-center  col-sm-12  col-md-4">
        <a href="#" class="text-white text-center">Descargar InfoWine</a>
    </div>
</div>

@endsection