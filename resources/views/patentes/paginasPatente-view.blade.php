@extends('layouts.base_html')

@section('title')
    Sistema de patentes - Administrador
@endsection

@push('styles')
    <style>

    </style>
@endpush

@section('main')
    <div class="container-fluid">
        <div class="card mt-3">
            <div class="card-body">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img class="img-fluid rounded-start" style="max-height: 100%;" src="{{ asset('img/OficinaDePatentesAmericana.png') }}" alt="">
                    </div>
                    <div class="col-md-8">
                        <h5 class="card-title">Oficina de patentes Americana</h5>
                        <p class="card-text"></p>
                    </div>
                </div>
                <div class="card-footer border-success">
                    <div class="row">
                        <div class="col-md-6 text-center">
                            <button class="btn btn-success">Oficina de patentes Americana</button>
                        </div>
                        <div class="col-md-6 text-center">
                            <button class="btn btn-danger"><i class="fas fa-plus"></i> Agregar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mt-3">
            <div class="card-body">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img class="img-fluid rounded-start" src="{{ asset('img/UltimaPatenteAplicada.jpg') }}" alt="">
                    </div>
                    <div class="col-md-8">
                        <h5 class="card-title"><b>Ultima Patente Aplicada</b></h5>
                        <p class="card-text">En esta opción puede continuar trabajando en la última solicitud de
                            patente en la que trabajó en el sistema. Podra editar la informacion que haya llenado con
                            anterioridad</p>
                    </div>
                </div>
                <div class="card-footer border-success">
                    <a href="{{ route('patentes.show', 1) }}"><i class="fas fa-calendar"></i> Consultar Ultima Patente
                        Aplicada</a>
                </div>
            </div>
        </div>
        <div class="card mt-3">
            <div class="card-body">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img class="img-fluid rounded-start" src="{{ asset('img/PatentesAplicadas.jpg') }}" alt="">
                    </div>
                    <div class="col-md-8">
                        <h5 class="card-title"><b>Consultar Patentes Aplicadas</b></h5>
                        <p class="card-text">Esta opción enumera todas las solicitudes de patentes que se encuentran en
                            el sistema. Le muestra la lista y el estado actual de cada aplicación y le permite elegir qué
                            aplicaciones desea ver ahora.</p>
                    </div>
                </div>
                <div class="card-footer border-success">
                    <a href="{{ route('patentes.index') }}"><i class="fas fa-calendar"></i> Consultar Patentes Aplicadas</a>
                </div>
            </div>
        </div>
        <div class="card mt-3">
            <div class="card-body">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img class="img-fluid rounded-start" src="{{ asset('img/Patentes.jpg') }}" alt="">
                    </div>
                    <div class="col-md-8">
                        <h5 class="card-title"><b>Paginas para conculta de patentes aplicadas</b></h5>
                        <p class="card-text">Esta opción muestras distintas paginas en donde podras encontrar patentes
                            ya registradas.
                            Podras revisar en todas ellas y darte una idea de lo que ya esta patentado.
                        </p>
                    </div>
                </div>
                <div class="card-footer border-success">
                    <a href=""><i class="fas fa-calendar"></i> Paginas para revisar patentes registradas</a>
                </div>
            </div>
        </div>
    </div>
@endsection
