<!DOCTYPE html>
<html lang="en">

<head>
    {{-- <script src="https://code.jquery.com/jquery-3.3.1.js"></script> --}}

    <!-- Datatables -->

    {{-- <script src="{{ asset('lib/dataTables/datatables.bootstrap5.min.js') }}" ></script>
    <!-- SCRIPT DATATABLES ESPAÑOL -->
    <script src="{{ asset('lib/dataTables/jquery.datatables.spanish.js') }}" ></script>
    <!-- Datatables Responsive-->
    <script src="{{ asset('lib/dataTables/datatables.responsive.min.js') }}" ></script>

    <link rel="stylesheet" href="{{ asset('lib/dataTables/datatables.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('lib/dataTables/responsive.datatables.min.css') }}">


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" ></script>
    {{-- <script src="{{ asset('js/materialize.js') }}" ></script> --}}
    <script src="{{ asset('js/materialize.min.js') }}"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


    @routes
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('css/materialize.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('css/materialize.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">



    <!-- Fontawesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"
        integrity="sha512-RXf+QSDCUQs5uwRKaDoXt55jygZZm2V++WUZduaU/Ui/9EGp3f/2KZVahFZBKGH0s774sd3HmrhUy+SgOFQLVQ=="
        crossorigin="anonymous"></script>


    <title> @yield('title') </title>

    <link rel="icon" href="{{ asset('img/MARCAInfoPatente.jpg') }}">



    @stack('styles')
</head>

<header>
    @yield('header')
</header>

<body>
    @yield('body')
</body>

{{-- <script src="{{ asset('lib/dataTables/datatables.min.js') }}"></script>
<link rel="stylesheet" href="{{ asset('lib/dataTables/dataTables.min.css') }}">
<!-- Datatables Bootstrap 5-->
<script src="{{ asset('lib/dataTables/datatables.bootstrap5.min.js') }}"></script> --}}

@stack('scripts')

</html>
