@extends('layouts.headerPatente')


@section('main')

    <div class="d-flex flex-row justify-content-between" style="height:85%">
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
        </div>
        <div class="col-9">
            {{-- <iframe class="" src="{{ asset('/documentos/EdsonAmayaCv.pdf') }}" height="100%" width="100%"></iframe> --}}

            <iframe src="{{ asset('/patentesEjemplos/MEX/Alimentacion/Alimentacion_Example0001.htm') }}" frameborder="0"  height="100%" width="100%"></iframe>
        </div>
    </div>

@endsection