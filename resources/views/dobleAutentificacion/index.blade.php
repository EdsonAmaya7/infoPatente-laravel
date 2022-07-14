@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Código de verificación doble') }}</div>

                <div class="card-body">
                    {{-- @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        {{ __('Código de verificación doble.') }}
                    </div>
                    @endif --}}

                    @if (session('mensaje'))
                        <p>{{ session('mensaje') }}</p>
                    @endif
                    <p class="mb-3">{{ __('Porfavor checa tu correo en archivos no deseados.') }}</p>

                    <form class="d-inline" method="POST" action="{{ route('verificar.codigo') }}">
                        @csrf
                        <div class="container d-flex gap-3">
                            <div  class="mr-4">
                                <input type="text" id="codigoVerificacion" name="codigoVerificacion">
                            </div>
                            <div>
                                <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('Verificar
                                    código') }}</button>
                            </div>

                        </div>
                        @error('codigoVerificacion')
                            <p>{{ $message }}</p>
                        @enderror
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection