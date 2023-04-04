<!DOCTYPE html>
<html lang="en">
    @include('layout.partials.head')
    <body class="sb-nav-fixed">
        @include('layout.partials.header')
        <div id="layoutSidenav">
            @include('layout.partials.sidebar')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        @yield('content')
                    </div>
                </main>
                @include('layout.partials.footer')
            </div>
        </div>
        @include('layout.partials.footer-scripts')
    </body>
</html>
