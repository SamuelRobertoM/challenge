<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    {{-- <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" /> --}}

    <!-- Agregar los archivos CSS de Gentelella -->
    {{-- <link rel="stylesheet" href="{{ asset('css/gentelella.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('public/css/font-awesome.min.css') }}">

    <!-- Bootstrap CSS (incluido de forma externa) -->
    <link rel="stylesheet" href="{{ asset('public/css/bootstrap.min.css') }}">
</head>
<body class="nav-md">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @isset($header)
            <header class="bg-white dark:bg-gray-800 shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endisset

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
    </div>

    <!-- Agregar los archivos JS de Gentelella -->
    <script src="{{ asset('public/js/jquery.min.js') }}"></script>
    <script src="{{ asset('public/jsbootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('public/js/fastclick.js') }}"></script>
    <script src="{{ asset('public/js/nprogress.js') }}"></script>
    <!-- Puedes agregar más archivos JS si son necesarios -->
</body>
</html>
