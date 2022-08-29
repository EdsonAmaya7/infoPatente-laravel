@extends('layouts.headerAdmin')

{{-- Contenido --}}
@section('main')
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12">
                <div class="">
                    <div class="card p-4">
                        <div class="card-content" style="overflow-y: auto; max-height: 70vh;">
                            {{-- <div class="row"> --}}

                            {{-- <div class="col-md-6"> --}}
                            <div class="text-center mb-3">
                                <h2 class="card-title text-center">¿Que es Infopatente?</h2>
                            </div>

                            {{-- <div class="col-md-6"> --}}
                            <div class="ms-1">
                                <h6><b>Infopatente es un sistema para el apoyo al registro de patentes.<br>
                                        Los servicios que proporciona son los siguientes:</b></h6>
                            </div>
                            {{-- </div> --}}
                            <div class="row ms-2">
                                <div class="col-md-6 ms-2">
                                    <h6 class="ms-2"><b>Guía estructurada para el llenado de información general de la
                                            patente.</b></h6>
                                    <ul>
                                        <li><i class="fas fa-check"></i> Titulo de la patente</li>
                                        <li><i class="fas fa-check"></i> Numero de Autores</li>
                                        <li><i class="fas fa-check"></i> País de aplicación</li>
                                        <li><i class="fas fa-check"></i> Representante legal</li>
                                        <li><i class="fas fa-check"></i> Tipo de aplicación</li>
                                        <li><i class="fas fa-check"></i> Estrategia de solicitud</li>
                                        <li><i class="fas fa-check"></i> Tarifa de descuento</li>
                                        <li><i class="fas fa-check"></i> Solicitante</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <h6><b>Apoyo en la redacción de la Solicitud de Patente.</b></h6>
                                    <ul>
                                        <li><i class="fas fa-check"></i> Resumen de la invención</li>
                                        <li><i class="fas fa-check"></i> Antecedentes de la invención</li>
                                        <li><i class="fas fa-check"></i> Realización preferente / Sumario</li>
                                        <li><i class="fas fa-check"></i> Breve Descripción de los Dibujos</li>
                                        <li><i class="fas fa-check"></i> Descripción Detallada del invento</li>
                                        <li><i class="fas fa-check"></i> Reivindicaciones</li>
                                        <li><i class="fas fa-check"></i> Objeto / Campo Técnico de la invención
                                        </li>
                                        <li><i class="fas fa-check"></i> Dibujos</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <h6><b>Informacion administrativa.</b></h6>
                                    <ul>
                                        <li><i class="fas fa-check"></i> Acceso al sistema de internet PASE del
                                            IMPI</li>
                                    </ul>
                                </div>
                                <div class=" col-md-6">
                                    <h6><b>Búsqueda de Arte Previo relacionado.</b></h6>
                                    <ul>
                                        <li><i class="fas fa-check"></i> Descripción del proceso de búsqueda</li>
                                        <li><i class="fas fa-check"></i> Búsquedas Nuevas</li>
                                        <li><i class="fas fa-check"></i> Búsquedas previamente guardadas</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <p>En cada elemento se da una descripción de lo que hay que hacer o escribir. En el caso
                                        de
                                        los
                                        elementos de la Solicitud de Patente se proporcionan ejemplos de estos elementos en
                                        patentes
                                        otorgadas en el área similar a la patente que se esta elaborando.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-6">
                <div class="p-3 mb-3 bg-primary d-flex align-items-center justify-content-center">
                    {{-- <a href="{{ route('download') }}" class="text-white text-center">Descargar app</a> --}}

                    <a href="{{ route('login') }}" class="text-white text-center">Página web</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="p-3 mb-3 bg-primary d-flex align-items-center justify-content-center">
                    <a href="{{ route('correo.download') }}" class="text-white text-center">Descargar app</a>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-12">
                <div id="paypal-button-container"></div>
            </div>
        </div>
    </div>
@endsection
