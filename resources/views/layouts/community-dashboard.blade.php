<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
        crossorigin="anonymous"></script>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/icons/logo.png') }}">
    <link href="{{ asset('public/cork/html/layouts/collapsible-menu/css/light/loader.css') }}" rel="stylesheet"
        type="text/css" />
    <script src="{{ asset('public/cork/html/layouts/collapsible-menu/loader.js') }}"></script>
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{ asset('public/cork/html/src/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/cork/html/layouts/collapsible-menu/css/light/plugins.css') }}" rel="stylesheet"
        type="text/css" />
    <meta property="og:title" content="Boostems">
    <meta property="og:image" content="{{ asset('public/icons/logo.png') }}">
    <meta property="og:url" content="https://boostem.live">
    <meta property="og:description"
        content="Boostem is a one stop solution for Communities to manage their events projects and workflow, for
        individuals to learn through various communities and resources and for Aquisitors to publicize
        their organisation as well as hire skilled individuals respectively.">
    <meta property="og:site_name" content="boostem.live">
    <!-- END GLOBAL MANDATORY STYLES -->
    @stack('title')
    @include('partials.meta')
    @stack('styles')
    <style>
        .main-box {
            box-sizing: border-box;
            padding: 1.5rem 0rem;
        }

        .avatar-indicators:before {
            border: none !important;
        }

        .side-social-share {
            position: absolute;
            width: 100%;
            height: 7rem;
            bottom: 0;
            right: 0;
            background-color: rgb(223, 255, 252)2);
            display: flex;
            align-items: center;
            justify-content: space-evenly;

            z-index: 999;
        }
    </style>
</head>

<body class="layout-boxed">
    <!-- BEGIN LOADER -->
    {{-- <div id="load_screen">
        <div class="loader">
            hiii
            <div class="loader-content">
                <div class="spinner-grow align-self-center"></div>
            </div>
        </div>
    </div> --}}
    <!--  /////END LOADER -->
    {{-- begain new loader --}}
    <x-loader />
    {{-- end new loader --}}

    <!-- BEGIN NAVBAR -->
    @include('partials/navbar')
    <!-- /////END NAVBAR -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container container-to-faid" id="container">
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
    <script type="text/javascript">
        $(document).ready(function() {
            $("#search_inp").on('keyup', function() {
                console.log('hii')
                //var email_id as the value of input with name newsletter 
                var search = $("#search_inp").val();
                //alert(email_id);
                $.ajax({
                    url: "{{ route('search') }}",
                    type: "POST",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "search": search,
                    },
                    success: function(response) {
                        console.log(response);
                        if (response.status == 200) {
                            $("#search-status").html(value);
                        } else {
                            var res = JSON.parse(response);
                            var exp = res.data;
                            document.getElementById("search-status").innerHTML = "";
                            for (var i = 0; i < exp.length; i++) {
                                console.log(exp[i]['title']);
                                document.getElementById("search-status").innerHTML +=
                                    `<a href="/blog/view/` + exp[i]['slug'] + `" >` + exp[i][
                                        'title'
                                    ] +
                                    `</a><br>`;
                            }
                        }
                    }
                });
            });
        });
    </script>
    <script src="{{ asset('public/cork/html/src/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('public/cork/html/src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('public/cork/html/src/plugins/src/mousetrap/mousetrap.min.js') }}"></script>
    <script src="{{ asset('public/cork/html/layouts/collapsible-menu/app.js') }}"></script>
    <script type="text/javascript">
        $(".container-to-faid").hide();
        $(".navbar-to-fadein").hide();

        //windows on load but min of 800ms

        $(window).on('load', function() {
            setTimeout(function() {
                $("#loder-container").fadeOut("10");
                $(".container-to-faid").fadeIn("10");
                $(".navbar-to-fadein").fadeIn("10");

            }, 500);
        });
    </script>
</body>

</html>
