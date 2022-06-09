@extends('layouts.headerPatente')

@section('title')
    Sistema de patentes - Nueva Patente
@endsection

@section('subtitulo')
    Sistema de patentes - Nueva Patente
@endsection

@push('styles')
    <style>

    </style>
@endpush


@section('main')
    <div class="container-fluid">
        <div class="card-body">
            <div class="card m-3">
                <div class="col-md-12 text-center mt-4">
                    <h1>Nueva Patente</h1>
                </div>
                <form method="POST">
                    @csrf

                    <div class="row">
                        <div class="col-md-6">
                            <div class="item item-label mb-3" style="margin-left: 150px">
                                <div class="wrapper mt-4">
                                    <label style="font-size: 20px" for="">Nombre de la Patente</label>
                                    <input id="nombre_patente" type="nombre_patente" class="form-control"
                                        name="nombre_patente" value="{{ old('nombre_patente') }}" required
                                        style="width: 90%;">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div style="margin-left: 300px">
                                <div class="">
                                    <h4 for="" id="numero_autores">Cantidad de Autores</h4>
                                    <select name="numero_autores" id="numero_autores" class="form-control"
                                        style="width: 60%;">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-md-4">
                            <div style="margin-left: 100px">
                                <div class="">
                                    <h4 for="" id="pais">Pais donde esta patente sera presentada</h4>
                                    <select name="pais" id="pais" class="form-control"
                                        style="width: 60%;">
                                        <option value="" disabled selected>Selecciona una opcion</option>
                                        <option value="">Mexico</option>

                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div style="margin-left: 100px">
                                <div class="">
                                    <h4 for="" id="entidad">¿Se clasifica como entidad pequeña?</h4>
                                    <select name="entidad" id="entidad" class="form-control" style="width: 60%;">
                                        <option value="" disabled selected>Selecciona una opcion</option>
                                        <option value="">Si</option>
                                        <option value="">No</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div style="margin-left: 100px">
                                <div class="">
                                    <h4 for="" id="representante_legal">¿Desea agregar un representante legal?</h4>
                                    <select name="representante_legal" id="representante_legal" class="form-control" style="width: 60%;">
                                        <option value="" disabled selected>Selecciona una opcion</option>
                                        <option value="">Si</option>
                                        <option value="">No</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-md-4">
                            <div style="margin-left: 100px">
                                <div class="">
                                    <h4 for="" id="tipo_patente">Seleccione tipo de patente</h4>
                                    <select name="tipo_patente" id="tipo_patente" class="form-control"
                                        style="width: 60%;">
                                        <option value="" disabled selected>Selecciona una opcion</option>
                                        <option value="">Utilidad</option>
                                        <option value="">Diseño</option>
                                        <option value="">Planta</option>

                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div style="margin-left: 100px">
                                <div class="">
                                    <h4 for="" id="tipo_aplicacion">Seleccione tipo de aplicación</h4>
                                    <select name="tipo_aplicacion" id="tipo_aplicacion" class="form-control" style="width: 60%;">
                                        <option value="" disabled selected>Selecciona una opcion</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div style="margin-left: 100px">
                                <div class="">
                                    <h4 for="" id="cesionario">¿Desea agregar un cesionario?</h4>
                                    <select name="cesionario" id="cesionario" class="form-control" style="width: 60%;">
                                        <option value="" disabled selected>Selecciona una opcion</option>
                                        <option value="">Si</option>
                                        <option value="">No</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-md-4">
                            <div style="margin-left: 100px">
                                <div class="">
                                    <h4 for="" id="tarifa_descuento">Tarifa de descuento</h4>
                                    <select name="tarifa_descuento" id="tarifa_descuento" class="form-control"
                                        style="width: 60%;">
                                        <option value="" disabled selected>Selecciona una opcion</option>
                                        <option value="">Si</option>
                                        <option value="">No</option>

                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
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
