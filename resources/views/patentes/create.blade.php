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
                                        name="nombre_patente" value="{{ old('nombre_patente') }}" required>
                                    <div class="d-flex justify-content-end mt-2">
                                        <i class="fa fa-question" data-bs-toggle="tooltip"
                                            title="Trate de ser conciso y descriptivo de lo que es o hace la patente. Este nombre no es un nombre de archivo."></i>
                                    </div>
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
                                    <div class="d-flex justify-content-end mt-2" style="width: 60%;">
                                        <i class="fa fa-question" data-bs-toggle="tooltip"
                                            title="Todos los autores son considerados de tener los mismos e iguales derechos."></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-md-4">
                            <div style="margin-left: 100px">
                                <div class="">
                                    <h4 for="" id="pais">Pais donde esta patente sera presentada</h4>
                                    <select name="pais" id="pais" class="form-control" style="width: 60%;">
                                        <option value="" disabled selected>Selecciona una opcion</option>
                                        <option value="">Mexico</option>
                                    </select>
                                    <div class="d-flex justify-content-end mt-2" style="width: 60%;">
                                        <i class="fa fa-question" data-bs-toggle="tooltip"
                                            title="Si el pais que necesita no esta disponible, contactar: adiministrador@infopatente.mx"></i>
                                    </div>
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
                                    <div class="d-flex justify-content-end mt-2" style="width: 60%;">
                                        <i class="fa fa-question" data-bs-toggle="tooltip"
                                            title="Una entidad pequeña se define como: persona, empresa pequeña u organización sin fines de lucro"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div style="margin-left: 100px">
                                <div class="">
                                    <h4 for="" id="representante_legal">¿Desea agregar un representante legal?</h4>
                                    <select name="representante_legal" id="representante_legal" class="form-control"
                                        style="width: 60%;">
                                        <option value="" disabled selected>Selecciona una opcion</option>
                                        <option value="">Si</option>
                                        <option value="">No</option>
                                    </select>
                                    <div class="d-flex justify-content-end mt-2" style="width: 60%;">
                                        <i class="fa fa-question" data-bs-toggle="tooltip"
                                            title="Si no deasea agregar representante legal, el primer autor sera considerado como tal"></i>
                                    </div>
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
                                    <div class="d-flex justify-content-end mt-2" style="width: 60%;">
                                        <i class="fa fa-question" data-bs-toggle="tooltip"
                                            title="Seleccione una opcion para desplegar una pequeña descripcion"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div style="margin-left: 100px">
                                <div class="">
                                    <h4 for="" id="tipo_aplicacion">Seleccione tipo de aplicación</h4>
                                    <select name="tipo_aplicacion" id="tipo_aplicacion" class="form-control"
                                        style="width: 60%;">
                                        <option value="" disabled selected>Selecciona una opcion</option>
                                    </select>
                                    <div class="d-flex justify-content-end mt-2" style="width: 60%;">
                                        <i class="fa fa-question" data-bs-toggle="tooltip"
                                            title="Seleccione una opcion para desplegar una pequeña descripcion"></i>
                                    </div>
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
                                    <div class="d-flex justify-content-end mt-2" style="width: 60%;">
                                        <i class="fa fa-question" data-bs-toggle="tooltip"
                                            title="Una entidad pequeña se define como: persona, empresa pequeña u organización sin fines de lucro"></i>
                                    </div>
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
                                    <div class="d-flex justify-content-end mt-2" style="width: 60%;">
                                        <i class="fa fa-question" data-bs-toggle="tooltip"
                                            title="Cuando la prestación de los servicios sea solicitada por inventores personas físicas, por micro o pequeñas industrias, por instituciones de educación superior públicas o privadas, por institutos de investigación científica y tecnológica del sector público, podrán pagar únicamente el 50% de las cuotas de la Tarifa."></i>
                                    </div>
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
