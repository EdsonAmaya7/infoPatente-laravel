@extends('layouts.headerPatente')


@section('main')

    <div class="d-flex flex-row justify-content-between">
        <div class="col-6"><h2>aqui iria la informacion</h2></div>
        <div class="col-6">
            <iframe class="" src="{{ asset('/documentos/EdsonAmayaCv.pdf') }}" height="100%" width="50%"></iframe>
        </div>
    </div>

@endsection