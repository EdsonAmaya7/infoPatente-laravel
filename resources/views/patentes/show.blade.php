@extends('layouts.headerPatente')

@section('title')
    Sistema de patentes - Ultima Patente
@endsection

@section('subtitulo')
    Sistema de patentes - Ultima Patente
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
                    <h1><b>Patentes Aplicadas</b></h1>

                </div>
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-hover mt-4 table-bordered table-striped" id="table-ultima-patente"
                            width="100%">
                            <thead class="bg_gray text-center">
                                <tr>
                                    <th>Nombre</th>
                                    <th>País de Presentación</th>
                                    <th>Entidad Pequeña</th>
                                    <th>Tipo</th>
                                    <th>Aplicación</th>
                                    <th>Autorizado</th>
                                    <th>Fecha Modificación</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr>
                                    <td>{{ $patente->nombre }}</td>
                                    <td>{{ $patente->pais_presentacion }}</td>
                                    <td>{{ $patente->entidad_pequenia }}</td>
                                    <td>{{ $patente->tipo }}</td>
                                    <td>{{ $patente->aplicacion }}</td>
                                    <td>{{ $patente->autorizacion }}</td>
                                    <td>{{ $patente->updated_at }}</td>
                                    <td><a href="{{ route('patentes.edit', $patente->id) }}"
                                            title="Editar orden de venta"><i class="fas fa-edit"></i></a>
                                        <a href="" onclick="borrarPatente({{ $patente->id }})"
                                            title="Borrar orden de venta"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.12.1/datatables.min.js"></script>
    {{-- <script src="{{ asset('js/patentes/show.js') }}"></script> --}}
@endpush
