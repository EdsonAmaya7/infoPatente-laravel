@extends('layouts.headerAdmin')

@section('title')
    Sistema de patentes - Administrador
@endsection

@push('styles')
    <style>

    </style>
@endpush

@section('subtitulo')
    <h5 class="text-center mt-3" style="color: white">Nuevo Registro</h6>
    @endsection

    @section('menuNavBar')
        <a href="{{ route('empresas.create') }}" class="">
            <i class="fas fa-building fa-2x mt-3" style="color:white"></i>
            <label class="text-white uppercase">Nueva Empresa</label>
        </a>
    @endsection

    @section('main')
        <div class="container-sm ms-5 me-5 card p-5 mt-3">
            <div class="card-header mb-4 color-headerCard">Para el registro de alumnnos, profesores o trabajadores de
                empresas es
                necesario contar con un numero de identificacion
                de la universidad o empresa perteneciente
            </div>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class=" card-body d-flex flex-column justify-content-center align-items-center row">

                    {{-- <div class="d-md-flex"> --}}
                    <div class="d-sm-flex flex-sm-row">
                        <div class="col-sm-3 col-md-3 mb-3">
                            <select name="tipo_usuario" id="" class="form-control">
                                <option value="0" disabled selected hidden>--Tipo Usuario--</option>
                                <option value="Alumno">Alumno</option>
                                <option value="Estudiante">Estudiante</option>
                                <option value="Profesor">Profesor</option>
                                <option value="Trabajador Empresa">Trabajador Empresa</option>
                                <option value="Abogado">Abogado</option>
                                <option value="Inventor Independiente">Inventor Independiente</option>
                            </select>
                        </div>
                        <div class="col-sm-3 col-md-3 mb-3">
                            <select name="empresa_id" id="" class="form-control">
                                <option value="0" disabled selected hidden>--seleccionar--</option>
                                <option value="1">N/A</option>
                                <option value="2">UADEC</option>
                                <option value="3">TEC</option>
                            </select>
                        </div>
                        <div class="col-sm-3 col-md-3 mb-3">
                            <input type="text" name="num_identificacion" class="form-control" placeholder="Numero de identificacón">
                        </div>
                        <div class="d-flex justify-content-center align-items-sm-end  ">
                            <button class="mb-3 btn btn-backgorund">Verificar</button>
                        </div>
                    </div>


                    <div class="row container-fluid">
                        <div class="col-sm-12 col-md-6 mb-3">
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-sort-alpha-up"></i></span>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                                    placeholder="Nombre">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 mb-3">
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-sort-alpha-up"></i></span>
                                <input
                                name="apellido_paterno"
                                type="text" class="form-control" placeholder="Apellido Paterno">
                            </div>
                        </div>
                    </div>

                    <div class="container-fluid row">
                        <div class="col-sm-12 col-md-6 mb-3">
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-sort-alpha-up"></i></span>
                                <input
                                name="apellido_materno"
                                type="text" class="form-control" placeholder="Apellido Materno">
                            </div>
                        </div>
                        <input type="text" hidden name="estatus" value="0">
                        <div class="col-sm-12 col-md-6 mb-3">
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email"
                                    placeholder="Correo">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="container-fluid row">
                        <div class="col-sm-12 col-md-6 mb-3">
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password" required
                                    autocomplete="new-password" placeholder="Contraseña">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 mb-3">
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                                    required autocomplete="new-password" placeholder="Confirmar Contraseña">
                            </div>
                        </div>
                    </div>

                    <div class="container-fluid row">
                        <div class="col-sm-12 col-md-6 mb-3">
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-inbox"></i></span>
                                <input
                                name="cp"
                                type="text" class="form-control" placeholder="Codigo Postal ">
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 mb-3">
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                <input
                                name="telefono"
                                type="text" class="form-control" placeholder="Telefono">
                            </div>
                        </div>
                    </div>

                    <div class=" d-flex justify-content-end col-12 mb-0">
                        <button type="submit" class="btn btn-backgorund">
                            Registrar
                        </button>
                    </div>
                </div>
            </form>
        </div>
    @endsection
