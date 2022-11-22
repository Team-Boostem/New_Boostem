<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/icons/logo.png') }}">
        <link href="{{ asset('public/cork/html/layouts/collapsible-menu/css/light/loader.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('public/cork/html/layouts/collapsible-menu/css/dark/loader.css') }}" rel="stylesheet" type="text/css" />
        <script src="{{ asset('public/cork/html/layouts/collapsible-menu/loader.js') }}"></script>
        <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
        <link href="{{ asset('public/cork/html/src/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('public/cork/html/layouts/collapsible-menu/css/light/plugins.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('public/cork/html/layouts/collapsible-menu/css/dark/plugins.css') }}" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
    @stack('title')
    @include('partials.meta')
    @stack('styles')
</head>

<body class="layout-boxed">
    <!-- BEGIN LOADER -->
    <div id="load_screen">
        <div class="loader">
            <div class="loader-content">
                <div class="spinner-grow align-self-center"></div>
            </div>
        </div>
    </div>
    <!--  /////END LOADER -->

    <!-- BEGIN NAVBAR -->
    @include('partials/navbar')
    <!-- /////END NAVBAR -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container " id="container">
        <div class="overlay"></div>
        <div class="cs-overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        @include('partials/sidebar')
        <!--  ////END SIDEBAR  -->

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="container mt-44 pt-44">
                <div class="layout-px-spacing">
                    @yield('content')
                </div>

            </div>
        </div>
        <!--  END CONTENT AREA  -->
    </div>

    {{-- geting pushed script --}}
    @stack('scripts')
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset('public/cork/html/src/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('public/cork/html/src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('public/cork/html/src/plugins/src/mousetrap/mousetrap.min.js') }}"></script>
    <script src="{{ asset('public/cork/html/layouts/collapsible-menu/app.js') }}"></script>
    {{-- <script src="{{ asset('public/cork/html/src/plugins/src/highlight/highlight.pack.js') }}"></script> --}}
    <!-- END GLOBAL MANDATORY SCRIPTS -->
</body>

</html>
