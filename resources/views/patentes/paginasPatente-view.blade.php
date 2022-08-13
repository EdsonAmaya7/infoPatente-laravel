@extends('layouts.headerPatente')

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
                    <div class="col-md-4 d-flex justify-content-center">
                        <img class="img-fluid rounded-start img-patents"
                            src="{{ asset('img/OficinaDePatentesAmericana.png') }}" alt="">
                    </div>
                    <div class="col-md-8">
                        <h4 class="card-title"><b>Oficina de patentes Americana</b></h4>
                        <div class="item item-label mb-5">
                            <div class="wrapper mt-4">
                                <label style="font-size: 15px" for="">Escribe la palabra a buscar</label>
                                <input id="word_american_patent" type="text" class="form-control"
                                    name="palabra" value="{{ old('word_american_patent') }}" required
                                    style="width: 90%;">
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-12">
                                    <select name="select_patente_americana" id="select_patente_americana" class="form-control" hidden>
                                        <option value="No utilizabkle">No utilizabkle</option>
                                        <option value="Necesito mas filtros">Necesito mas filtros</option>
                                        <option value="Medianamente utilizable">Medianamente utilizable</option>
                                        <option value="Utilizable">Utilizable</option>
                                    </select>
                                </div>
                                <div class="col-md-12 mt-3">
                                    <input name="input_patente_americana" id="input_patente_americana" class="form-control"
                                        placeholder="Cantidad de resultados encontrados" hidden>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer border-success">
                    <div class="row">
                        <div class="col-md-6 text-center">
                            <button id="boton_oficina_patentes" type="button" class="btn btn-success">Oficina de patentes
                                Americana</button>
                        </div>
                        <div class="col-md-6 text-center">
                            <button id="agregar_oficina_americana" class="btn btn-danger"><i class="fas fa-plus"></i> Agregar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mt-3">
            <div class="card-body">
                <div class="row g-0">
                    <div class="col-md-4 d-flex justify-content-center">
                        <img class="img-fluid rounded-start" src="{{ asset('img/wipo.png') }}" alt=""
                            style="width: 80%; height: auto; object-fit: cover">
                    </div>
                    <div class="col-md-8">
                        <h4 class="card-title"><b>WIPO</b></h4>
                        <div class="item item-label mb-5">
                            <div class="wrapper mt-4">
                                <label style="font-size: 15px" for="">Escribe la palabra a buscar</label>
                                <input id="word_wipo_patent" type="text" class="form-control"
                                    name="palabra" value="{{ old('word_wipo_patent') }}" required
                                    style="width: 90%;">
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-12">
                                    <select name="select_wipo" id="select_wipo" class="form-control" hidden>
                                        <option value="No utilizabkle">No utilizabkle</option>
                                        <option value="Necesito mas filtros">Necesito mas filtros</option>
                                        <option value="Medianamente utilizable">Medianamente utilizable</option>
                                        <option value="Utilizable">Utilizable</option>
                                    </select>
                                </div>
                                <div class="col-md-12 mt-3">
                                    <input name="input_wipo" id="input_wipo" class="form-control"
                                        placeholder="Cantidad de resultados encontrados" hidden>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer border-success">
                    <div class="row">
                        <div class="col-md-6 text-center">
                            <button id="boton_wipo" type="button" class="btn btn-success">Wipo</button>
                        </div>
                        <div class="col-md-6 text-center">
                            <button class="btn btn-danger"><i class="fas fa-plus"></i> Agregar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mt-3">
                <div class="card-body">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img class="img-fluid rounded-start img-patents" src="{{ asset('img/spacenet.jpg') }}"
                                alt="" style="width: 80%; height: auto; object-fit: cover">
                        </div>
                        <div class="col-md-8">
                            <h4 class="card-title"><b>SpaceNet</b></h4>
                            <div class="item item-label mb-5">
                                <div class="wrapper mt-4">
                                    <label style="font-size: 15px" for="">Escribe la palabra a buscar</label>
                                    <input id="word_spacenet_patent" type="text" class="form-control"
                                        name="palabra" value="{{ old('word_spacenet_patent') }}" required
                                        style="width: 90%;">
                                </div>
                                <div class="row mt-4">
                                    <div class="col-md-12">
                                        <select name="select_space_net" id="select_space_net" class="form-control" hidden>
                                            <option value="No utilizabkle">No utilizabkle</option>
                                            <option value="Necesito mas filtros">Necesito mas filtros</option>
                                            <option value="Medianamente utilizable">Medianamente utilizable</option>
                                            <option value="Utilizable">Utilizable</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <input name="input_space_net" id="input_space_net" class="form-control"
                                            placeholder="Cantidad de resultados encontrados" hidden>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer border-success">
                        <div class="row">
                            <div class="col-md-6 text-center">
                                <button id="boton_spacenet" type="button" class="btn btn-success">SpaceNet</button>
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
                            <img class="img-fluid rounded-start" src="{{ asset('img/Oficina_espaniola.png') }}"
                                alt="" style="width: 80%; height: auto; object-fit: cover">
                        </div>
                        <div class="col-md-8">
                            <h4 class="card-title"><b>Oficina Española</b></h4>
                            <div class="item item-label mb-5">
                                <div class="wrapper mt-4">
                                    <label style="font-size: 15px" for="">Escribe la palabra a buscar</label>
                                    <input id="word_espaniola_patent" type="text" class="form-control"
                                        name="palabra" value="{{ old('word_espaniola_patent') }}" required
                                        style="width: 90%;">
                                </div>
                                <div class="row mt-4">
                                    <div class="col-md-12">
                                        <select name="select_oficina_espaniola" id="select_oficina_espaniola" class="form-control" hidden>
                                            <option value="No utilizabkle">No utilizabkle</option>
                                            <option value="Necesito mas filtros">Necesito mas filtros</option>
                                            <option value="Medianamente utilizable">Medianamente utilizable</option>
                                            <option value="Utilizable">Utilizable</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <input name="input_oficina_espaniola" id="input_oficina_espaniola" class="form-control"
                                            placeholder="Cantidad de resultados encontrados" hidden>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer border-success">
                        <div class="row">
                            <div class="col-md-6 text-center">
                                <button id="boton_oficina_espaniola" type="button" class="btn btn-success">Oficina
                                    española</button>
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
                            <img class="img-fluid rounded-start" src="{{ asset('img/IMPI.jpg') }}" alt=""
                                style="width: 80%; height: auto; object-fit: cover">
                        </div>
                        <div class="col-md-8">
                            <h4 class="card-title"><b>IMPI</b></h4>
                            <div class="item item-label mb-5">
                                <div class="wrapper mt-4">
                                    <label style="font-size: 15px" for="">Escribe la palabra a buscar</label>
                                    <input id="word_impi_patent" type="text" class="form-control" name="palabra"
                                        value="{{ old('impi') }}" required style="width: 90%;">
                                </div>
                                <div class="row mt-4">
                                    <div class="col-md-12">
                                        <select name="select_impi" id="select_impi" class="form-control" hidden>
                                            <option value="No utilizabkle">No utilizabkle</option>
                                            <option value="Necesito mas filtros">Necesito mas filtros</option>
                                            <option value="Medianamente utilizable">Medianamente utilizable</option>
                                            <option value="Utilizable">Utilizable</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <input name="input_impi" id="input_impi" class="form-control"
                                            placeholder="Cantidad de resultados encontrados" hidden>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer border-success">
                        <div class="row">
                            <div class="col-md-6 text-center">
                                <button id="boton_impi" type="button" class="btn btn-success">IMPI</button>
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
                            <img class="img-fluid rounded-start" src="{{ asset('img/googlePatents.jpg') }}"
                                alt="" style="width: 80%; height: auto; object-fit: cover">
                        </div>
                        <div class="col-md-8">
                            <h4 class="card-title"><b>Google patents</b></h4>
                            <div class="item item-label mb-5">
                                <div class="wrapper mt-4">
                                    <label style="font-size: 15px" for="">Escribe la palabra a buscar</label>
                                    <input id="word_google_patent" type="text" class="form-control"
                                        name="palabra" value="{{ old('word_google_patent') }}" required
                                        style="width: 90%;">
                                </div>
                                <div class="row mt-4">
                                    <div class="col-md-12">
                                        <select name="select_google" id="select_google" class="form-control" hidden>
                                            <option value="No utilizabkle">No utilizabkle</option>
                                            <option value="Necesito mas filtros">Necesito mas filtros</option>
                                            <option value="Medianamente utilizable">Medianamente utilizable</option>
                                            <option value="Utilizable">Utilizable</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <input name="input_google" id="input_google" class="form-control"
                                            placeholder="Cantidad de resultados encontrados" hidden>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer border-success">
                        <div class="row">
                            <div class="col-md-6 text-center">
                                <button id="boton_google" type="button" class="btn btn-success">Google</button>
                            </div>
                            <div class="col-md-6 text-center">
                                <button class="btn btn-danger"><i class="fas fa-plus"></i> Agregar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection

    @push('scripts')
        <script src="{{ asset('js/patentes/paginasPatente-view.js') }}"></script>
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
