<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Agregar los archivos CSS de Gentelella -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('vendors/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/nprogress/nprogress.css') }}">
    <link rel="stylesheet" href="{{ asset('css/gentelella.css') }}">
    <!-- Puedes agregar más archivos CSS si son necesarios -->
</head>
<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <!-- Sidebar -->
            @include('partials.sidebar')

            <!-- Top navigation -->
            @include('partials.topnav')

            <!-- Contenido principal -->
            <div class="right_col" role="main">
                @yield('content')
            </div>
        </div>
    </div>

    <!-- Agregar los archivos JS de Gentelella -->
    <script src="{{ asset('vendors/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendors/fastclick/lib/fastclick.js') }}"></script>
    <script src="{{ asset('vendors/nprogress/nprogress.js') }}"></script>
    {{-- <script src="{{ asset('js/gentelella.js') }}"></script> --}}
</body>
</html>
