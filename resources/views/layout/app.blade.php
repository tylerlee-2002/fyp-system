<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    
        <!-- Custom fonts for this template-->
        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,700&display=swap" rel="stylesheet">
    
        <!-- Favicons -->
        <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
        <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">
    
        <title>@yield('title') - NiceAdmin Bootstrap Template</title>
    
        <!-- Vendor CSS Files -->
        <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">
    
        <!-- Template Main CSS File -->
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    
        @yield('custom-css')
    
        <!-- Scripts -->
        @yield('scripts-head')
    </head>
    
    <body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
        @include('layout.partials.header')
        <div class="app-body">
            @include('layout.partials.sidebar')

            <main class="main">
                <!-- Breadcrumb-->
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Home</li>
                </ol>

                <div class="container-fluid">
                    <div class="animated fadeIn">
                        @yield('content')
                    </div>
                </div>
            </main>
        </div>
        @include('layout.partials.footer-scripts')
    </body>
</html>
