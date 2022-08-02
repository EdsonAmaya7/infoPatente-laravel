<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script src="{{ asset('js/jquery.tabledit.min.js')}}" defer></script>


    @routes
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('css/materialize.css') }}" rel="stylesheet"> --}}
    <!-- <link href="{{ asset('css/materialize.min.css') }}" rel="stylesheet"> -->

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">


    <!-- Fontawesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"
        integrity="sha512-RXf+QSDCUQs5uwRKaDoXt55jygZZm2V++WUZduaU/Ui/9EGp3f/2KZVahFZBKGH0s774sd3HmrhUy+SgOFQLVQ=="
        crossorigin="anonymous"></script>


    <title> @yield('title') </title>

    <link rel="icon" href="{{ asset('img/check.ico') }}">

    <meta id="csrf" name="csrf-token" content="{{ csrf_token() }}" />
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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

@stack("scripts")

</html>
