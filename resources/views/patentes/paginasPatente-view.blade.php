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
                                <input id="word_american_patent" type="word_american_patent" class="form-control"
                                    name="word_american_patent" value="{{ old('word_american_patent') }}" required
                                    style="width: 90%;">
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
                            <button class="btn btn-danger"><i class="fas fa-plus"></i> Agregar</button>
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
                                <input id="word_wipo_patent" type="word_wipo_patent" class="form-control"
                                    name="word_wipo_patent" value="{{ old('word_wipo_patent') }}" required
                                    style="width: 90%;">
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
                                    <input id="word_spacenet_patent" type="word_spacenet_patent" class="form-control"
                                        name="word_spacenet_patent" value="{{ old('word_spacenet_patent') }}" required
                                        style="width: 90%;">
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
                                    <input id="word_espaniola_patent" type="word_espaniola_patent" class="form-control"
                                        name="word_espaniola_patent" value="{{ old('word_espaniola_patent') }}" required
                                        style="width: 90%;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer border-success">
                        <div class="row">
                            <div class="col-md-6 text-center">
                                <button id="boton_oficina_espaniola" type="button" class="btn btn-success">Oficina española</button>
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
                                    <input id="word_impi_patent" type="impi" class="form-control" name="impi"
                                        value="{{ old('impi') }}" required style="width: 90%;">
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
                                    <input id="word_google_patent" type="word_google_patent" class="form-control"
                                        name="word_google_patent" value="{{ old('word_google_patent') }}" required
                                        style="width: 90%;">
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
