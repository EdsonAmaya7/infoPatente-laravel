@extends('layouts.base_html')

@section('title')
    Sistema de patentes - Administrador
@endsection

@push('styles')
    <style>

    </style>
@endpush

@section('main')
    <div class="row">
        <div class="col-sm-12 col-md-6 ">

            <div class="card m-3">
                <div class="card-header color-headerCard">Para acceder a infopatente necesitas tener una cuenta activa</div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="card-body">
                        <div class="item item-label">
                            <div class="wrapper">
                                <label for="">Correo</label>
                                <input id="email" type="email" class="form-control   @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email">
                            </div>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="item item-label">
                            <div class="wrapper">
                                <label for="">correo</label>
                                <input id="password" type="password" class="" name="password" required
                                    autocomplete="current-password">
                            </div>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="item item-label">
                            <div class="wrapper">
                                <label for="">Contraseña</label>
                                <input id="password" type="password"
                                    class="form-control  @error('password') is-invalid @enderror" name="password" id="el4"
                                    required autocomplete="current-password">
                            </div>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="d-flex align-center">
                            <button type="submit" class="  btnLogin">
                                INICIAR SESION
                            </button>
                        </div>
                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                </form>
            </div>
        </div>

        <div class="col-sm-12 col-md-6">

            <div class="p-3">
                <div class="card">
                    <div class="card-content" style="overflow-y: auto; max-height: 80vh;">
                        <div class="row">

                            <div class="col-md-6">
                                <span class="card-title text-center">¿Que es Infopatente?</span>
                            </div>

                            <div class="col-md-6">
                                <h6><b>Infopatente es un sistema para el apoyo al registro de patentes.<br>
                                        Los servicios que proporciona son los siguientes:</b></h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <h6><b>Guía estructurada para el llenado de información general de la patente.</b></h6>
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
                            <div class="col-6">
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
                            <div class="col-6">
                                <h6><b>Informacion administrativa.</b></h6>
                                <ul>
                                    <li><i class="fas fa-check"></i> Acceso al sistema de internet PASE del
                                        IMPI</li>
                                </ul>
                            </div>
                            <div class=" col-6">
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
                                <p>En cada elemento se da una descripción de lo que hay que hacer o escribir. En el caso de
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
@endsection



@push('scripts')
    <script>
        $(document).ready(function() {
            $('input').each(function() {
                $(this).on('focus', function() {
                    $(this).parent('.wrapper').addClass('active');
                });
                $(this).on('blur', function() {
                    if ($(this).val().length === 0) {
                        $(this).parent('.wrapper').removeClass('active');
                    }
                });
                if ($(this).val() !== '') $(this).parent('.wrapper').addClass('active');
            });
        });
    </script>
@endpush
