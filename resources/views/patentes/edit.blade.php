@extends('layouts.headerPatente')

@section('title')
Sistema de patentes - Editar Patente
@endsection

@section('subtitulo')
Sistema de patentes - Editar Patente
@endsection

@push('styles')
<style>

</style>
@endpush


@section('main')
@include('templates.modal')
<div class="container-fluid ">

    <div class="card-body ">
        <div class="card m-3 pb-5">
            <form method="POST" action="{{ route('patentes.update',$patente->id) }}">
                @csrf
                @method("PUT")
                @include('patentes.partials.form')

                <div class="row mt-5">
                    <div class="col-md-11">
                        <div class="d-flex justify-content-end " {{-- style="margin-left: 100px" --}}>
                            <button class="btn btn-danger" type="submit">Actualizar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection