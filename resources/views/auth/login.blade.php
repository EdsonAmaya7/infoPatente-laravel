@extends('layouts.headerAdmin')

@section('title')
    Sistema de patentes - Administrador
@endsection

@push('styles')
    <style>

    </style>
@endpush

@section('subtitulo')
<h5 class="text-center" style="color: white">Sistema de apoyo en el Registro de Patentes</h6>
@endsection
@section('menuNavBar')
<a href="{{ route('register') }}">
    <i class="fas fa-user-plus fa-4x" style="color:white"></i>
</a>
@endsection

@section('main')
    <div class="row">
        <div class="col-md-12">

            <div class="card m-3 p-4">
                <div class="card-content color-headerCard">Para acceder a infopatente necesitas tener una cuenta activa</div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="card-body">
                        <div class="item item-label mb-2">
                            <div class="wrapper mb-4 mt-4">
                                <label for="">Correo</label>
                                <input id="email" type="email" class="form-control   @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email">
                            </div>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        {{-- <div class="item item-label">
                            <div class="wrapper">
                                <label for="">correo</label>
                                <input id="password" type="password" class="" name="password" required
                                    autocomplete="current-password">
                            </div>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div> --}}
                        <div class="item item-label mb-2">
                            <div class="wrapper mb-4 ">
                                <label for="" id="password">Contraseña</label>
                                <input id="password" type="password"
                                    class="form-control form-control-sm  @error('password') is-invalid @enderror" name="password" id="el4"
                                    required autocomplete="current-password">
                            </div>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="d-flex align-center mt-3">
                            <button type="submit" class="btnLogin">
                                INICIAR SESION
                            </button>
                        </div>
                        @if (Route::has('password.request'))
                            <a class="btn btn-link mt-5" href="{{ route('password.request') }}">
                               olvide mi contraseña
                            </a>
                        @endif
                    </div>
                </form>
            </div>
        </div>


    </div>
@endsection



@push('scripts')
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
