@extends('layouts.headerPatente')


@section('main')

<div class="container">

    <div id="leyenda" class="m-4 p-4 bg-danger"></div>
    <div class="d-flex mt-4 container flex-column flex-sm-column flex-md-row">
        <div class="col-sm-12 col-md-4">
            <label class="d-block" for="">¿Como quieres trabajar?</label>
            <select name="tiposVentanas" id="tiposVentanas" class="col-12">
                <option value="--" selected hidden disabled>--Seleccionar--</option>
                <option value="descripcion">Aplicacion-Descripcion</option>
                <option value="ejemplos">Aplicacion-Ejemplos</option>
            </select>
        </div>

        <div class="col-sm-12 col-md-4" id="ejemplosPatentes">
            <label class="d-block" for="">Ejemplos de</label>
            <select name="ejemplosEspecificos" id="ejemplosEspecificos" class="col-12">
                <option value="joyeria">Joyeria</option>
                <option value="alimentacion">Alimentacion</option>
                <option value="automotriz">Automotriz</option>
                <option value="medico">Medico</option>
                <option value="farmaceutico">Farmaceutico</option>
                <option value="materiales">Materiales</option>
                <option value="computadoras">Computadoras</option>
            </select>

            <div class="d-flex justify-content-between mt-2" >
                <button class="btn btn-backgorund" id="anterior">Anterior</button>
                <button class="btn btn-backgorund" id="siguiente">Siguiente</button>
            </div>
        </div>

        <div class="col-sm-12 col-md-4">
            <label class="d-block" for="">Seccion</label>
            <select name="" class="col-12" id="seccion">
                <option  value="#Abstract_Bookmark">Resumen De La Invencion</option>
                <option  value="#Background_Bookmark">Antecedentes De La Invencion</option>
                <option  value="#Summary_Bookmark">Realizacion Preferente / Sumario</option>
                <option  value="#Detail_Bookmark">Breve Descripcion De Los Dibujos</option>
                <option  value="#Drawings_Bookmark">Descripcion Detallada Del Invento</option>
                <option  value="#Claims_Bookmark">Reivindicaciones</option>
                <option  value="#Actual_Drawings_Bookmark">Objeto/Campo Tecnico De La Invencion</option>
                <option  value="#Resumen_Bookmark">Dibujos</option>
            </select>
        </div>
    </div>

    <div class="col mt-5" id="showResultados">
        <frameset id="frameset" rows="50%,*">
            <iframe  id="frameResultados" src="#" frameborder="0" height="100%" width="100%"></iframe>
        </frameset>
    </div>
</div>

@endsection

@push('scripts')
<script src="{{ asset('js/ejemplos-patentes/index.js') }}"></script>
@endpush
