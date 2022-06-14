@extends('layouts.headerAdmin')

@section('title')
    Registrar Empresa
@endsection

@push('styles')
    <style>

    </style>
@endpush

@section('subtitulo')
    <h5 class="text-center mt-3" style="color: white">Registro de una nueva Empresa</h6>
    @endsection

    @section('menuNavBar')

    @endsection


    @section('main')
    <div class="container-sm ms-5 me-5 card p-5 mt-3">
        <div class="card-header mb-4 color-headerCard">Procedimiento para la alta de una Universisad o Empresa</div>


        @if (session('mensaje'))
            <p class="p-3 text-center bg-success">{{ session('mensaje') }}</p>
        @endif

        <form method="POST" action="{{ route('empresas.store') }}">
            @csrf

            <div class=" card-body d-flex flex-column justify-content-center align-items-center row">
            
                <div class="col-sm-12 col-md-9 mb-3">
                    <div class="input-group">
                        <span class="input-group-text"><i class="far fa-building"></i></span>
                        <input id="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror"
                            name="nombre" value="{{ old('nombre') }}"  autocomplete="nombre" autofocus
                            placeholder="Nombre">

                        @error('nombre')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="col-sm-12 col-md-9 card-header mb-4 color-headerCard">Representante Legal</div>

             
                <div class="col-sm-12 col-md-9 mb-3">
                    <div class="input-group">
                        <span class="input-group-text"><i class="far fa-user-circle"></i></span>
                        <input id="nombre_rl" type="text" class="form-control @error('nombre_rl') is-invalid @enderror"
                            name="nombre_rl" value="{{ old('nombre_rl') }}"  autocomplete="nombre_rl" autofocus
                            placeholder="Nombre">

                        @error('nombre_rl')
                            <span class="invalid-feedback" role="alert">
                                <strong>El nombre del representante es requerido</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="col-sm-12 col-md-9 mb-3">
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-briefcase"></i></span>
                        <input id="direccion1_rl" type="text" class="form-control @error('direccion1_rl') is-invalid @enderror"
                            name="direccion1_rl" value="{{ old('direccion1_rl') }}"  autocomplete="direccion1_rl" autofocus
                            placeholder="Dirección Primaria">

                        @error('direccion1_rl')
                            <span class="invalid-feedback" role="alert">
                                <strong>La Dirección es requerida</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="col-sm-12 col-md-9 mb-3">
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-briefcase"></i></span>
                        <input id="direccion2_rl" type="text" class="form-control @error('direccion2_rl') is-invalid @enderror"
                            name="direccion2_rl" value="{{ old('direccion2_rl') }}"  autocomplete="direccion2_rl" autofocus
                            placeholder="Dirección Secundaria">

                        @error('direccion2_rl')
                            <span class="invalid-feedback" role="alert">
                                <strong>La Dirección es requerida</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="col-sm-12 col-md-9 mb-3">
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                        <input id="email_rl" type="email" class="form-control @error('email_rl') is-invalid @enderror"
                            name="email_rl" value="{{ old('email_rl') }}"  autocomplete="email_rl" autofocus
                            placeholder="Correo Electronico">

                        @error('email_rl')
                            <span class="invalid-feedback" role="alert">
                                <strong>El Email del Representante Legal es Requerido</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="col-sm-12 col-md-9 mb-3">
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-mobile-alt"></i></span>
                        <input id="telefono" type="tel" class="form-control @error('telefono') is-invalid @enderror"
                            name="telefono" value="{{ old('telefono') }}"  autocomplete="telefono" autofocus
                            placeholder="Telefono">

                        @error('telefono')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="col-sm-12 col-md-9 card-header mb-4 color-headerCard">Solicitante</div>

                <div class="col-sm-12 col-md-9 mb-3">
                    <div class="input-group">
                        <span class="input-group-text"><i class="far fa-user-circle"></i></span>
                        <input id="nombre_sol" type="text" class="form-control @error('nombre_sol') is-invalid @enderror"
                            name="nombre_sol" value="{{ old('nombre_sol') }}"  autocomplete="nombre_sol" autofocus
                            placeholder="nombre">

                        @error('nombre_sol')
                            <span class="invalid-feedback" role="alert">
                                <strong>El Campo nombre  es requerido</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="col-sm-12 col-md-9 mb-3">
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                        <input id="email_sol" type="email" class="form-control @error('email_sol') is-invalid @enderror"
                            name="email_sol" value="{{ old('email_sol') }}"  autocomplete="email_sol" autofocus
                            placeholder="Correo Electronico">

                        @error('email_sol')
                            <span class="invalid-feedback" role="alert">
                                <strong>El Email del Solicitante es Requerido</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="col-sm-12 col-md-9 mb-3">
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-mobile-alt"></i></span>
                        <input id="telefono_sol" type="tel" class="form-control @error('telefono_sol') is-invalid @enderror"
                            name="telefono_sol" value="{{ old('telefono_sol') }}"  autocomplete="telefono_sol" autofocus
                            placeholder="Telefono">

                        @error('telefono_sol')
                            <span class="invalid-feedback" role="alert">
                                <strong>El Campo telefono es requerido</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="col-9 mb-0 d-flex justify-content-end align-items-end ">
                    <button type="submit" class="btn btn-backgorund">
                        Registrar
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
