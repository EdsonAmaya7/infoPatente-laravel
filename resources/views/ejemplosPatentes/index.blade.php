@extends('layouts.headerPatente')


@section('main')

{{-- <div class="d-flex flex-row justify-content-between" style="height:85%">
    <div class="col-3">
        <ul>
            <li>
                <h2>Español</h2>
                <ul>
                    <li>
                        <a href="">Alimentacion</a>
                        <ul>
                            <li>
                                <a href="">ejemplo 1</a>
                            </li>
                            <li>
                                <a href="">ejemplo 2</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="">Automotriz</a>
                        <ul>
                            <li>
                                <a href="">ejemplo 1</a>
                            </li>
                            <li>
                                <a href="">ejemplo 2</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <h2>English</h2>
                <ul>
                    <li>
                        <a href="">Automotive</a>
                        <ul>
                            <li>
                                <a href="">example 1</a>
                            </li>
                            <li>
                                <a href="">example 2</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="">Computers</a>
                        <ul>
                            <li>
                                <a href="">example 1</a>
                            </li>
                            <li>
                                <a href="">example 2</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </div> --}}

    {{-- <div class="col">
        <iframe src="{{ asset('/patentesEjemplos/MEX/Alimentacion/Alimentacion_Example0001.htm') }}" frameborder="0"
            height="100%" width="100%"></iframe>
    </div> --}}
    {{--
</div> --}}


<div class="container">
    <div class="d-flex mt-4 container">
        <div class="col-4">
            <label class="d-block" for="">Arreglo de ventanas como quieres trabajar</label>
            <select name="tiposVentanas" id="tiposVentanas" class="col-12">
                <option value="--" selected hidden disabled>--Seleccionar--</option>
                <option value="descripcion">Aplicacion-Descripcion</option>
                <option value="ejemplos">Aplicacion-Ejemplos</option>
            </select>
        </div>

        <div class="col-4" id="ejemplosPatentes">
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

            <div class="d-flex justify-content-between">
                <button id="anterior">Anterior</button>
                <button id="siguiente">Siguiente</button>
            </div>
        </div>

        <div class="col-4">
            <label class="d-block" for="">Seccion</label>
            <select name="" class="col-12" id="seccion">
                <option  value="Abstract_Bookmark">Resumen De La Invencion</option>
                <option  value="Resumen_Bookmark">Antecedentes De La Invencion</option>
                <option  value="Background_Bookmark">Realizacion Preferente / Sumario</option>
                <option  value="Summary_Bookmark">Breve Descripcion De Los Dibujos</option>
                <option  value="Drawings_Bookmark">Descripcion Detallada Del Invento</option>
                <option  value="Detail_Bookmark">Reivindicaciones</option>
                <option  value="Claims_Bookmark">Objeto/Campo Tecnico De La Invencion</option>
                <option  value="Actual_Drawings_Bookmark">Dibujos</option>
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
