<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('layout.partials.head')
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">

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
