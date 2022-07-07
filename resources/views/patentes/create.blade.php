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
@include('templates.modal')
<div class="container-fluid">
    <div class="card-body">
        <div class="card m-3 pb-5">

            <form method="POST" action="{{ route('patentes.store') }}">
                @csrf
              
                @include('patentes.partials.form')
                <div class="row mt-5">
                    <div class="col-md-11">
                        <div class="d-flex justify-content-end " {{-- style="margin-left: 100px" --}}>
                            <button class="btn btn-danger" type="submit">Enviar</button>
                        </div>
                    </div>
                </div>
            </form>


            <div class="  d-flex flex-row justify-content-center text-align-center">
                <div class="col-md-3">

                    {{-- style="margin-left: 300px" --}}

                    <div class="">
                        <h4 for="numero_autores">Cantidad de Autores</h4>
                        <select name="numero_autores" id="NumAutores" class="form-control" style="width: 60%;">
                            <option value="" disabled selected>Seleccione cantidad de autores</option>
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
                        @error('numero_autores')
                        <p>{{ $message }}</p>
                        @enderror
                    </div>

                </div>
                <div class="col-md-4">

                    {{-- style="margin-left: 100px" --}}

                    <div class="">
                        <h4 for="">¿Desea agregar un representante legal?</h4>
                        <select name="representantes_id" id="representante_legal" class="form-control"
                            style="width: 60%;">
                            <option value="" disabled selected>Selecciona una opcion</option>
                            <option value="1">Si</option>
                            <option value="2">No</option>
                        </select>
                        <div class="d-flex justify-content-end mt-2" style="width: 60%;">
                            <i class="fa fa-question" data-bs-toggle="tooltip"
                                title="Si no deasea agregar representante legal, el primer autor sera considerado como tal"></i>
                        </div>
                    </div>
                    @error('representante_id')
                    <p>{{ $message }}</p>
                    @enderror

                </div>
                <div class="col-md-3">

                    {{-- style="margin-left: 100px" --}}

                    <div class="">
                        <h4 for="">¿Desea agregar un cesionario?</h4>
                        <select name="cecionario_id" id="cecionario_id" class="form-control" style="width: 60%;">
                            <option value="" disabled selected>Selecciona una opcion</option>
                            <option value="1">Si</option>
                            <option value="2">No</option>
                        </select>
                        <div class="d-flex justify-content-end mt-2" style="width: 60%;">
                            <i class="fa fa-question" data-bs-toggle="tooltip"
                                title="Una entidad pequeña se define como: persona, empresa pequeña u organización sin fines de lucro"></i>
                        </div>
                    </div>
                    @error('cesionario_id')
                    <p>{{ $message }}</p>
                    @enderror

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="{{ asset('js/patentes/create.js') }}"></script>
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