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

        body {
            background: #fff;
        }

        .dots {
            width: 0;
            height: 0;
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            margin: auto;
            filter: url(#goo);
        }

        .dot {
            width: 0;
            height: 0;
            position: absolute;
            left: 0;
            top: 0;
        }

        .dot:before {
            content: '';
            width: 35px;
            height: 35px;
            border-radius: 50px;
            background: #fbd301;
            position: absolute;
            left: 50%;
            transform: translateY(0) rotate(0deg);
            margin-left: -17.5px;
            margin-top: -17.5px;
        }

        @keyframes dot-move {
            0% {
                transform: translateY(0);
            }

            18%,
            22% {
                transform: translateY(-70px);
            }

            40%,
            100% {
                transform: translateY(0);
            }
        }

        @keyframes dot-colors {
            0% {
                background-color: #fbd301;
            }

            25% {
                background-color: #ff3270;
            }

            50% {
                background-color: #208bf1;
            }

            75% {
                background-color: #afe102;
            }

            100% {
                background-color: #fbd301;
            }
        }

        .dot:nth-child(5):before {
            z-index: 100;
            width: 45.5px;
            height: 45.5px;
            margin-left: -22.75px;
            margin-top: -22.75px;
            animation: dot-colors 4s ease infinite;
        }

        @keyframes dot-rotate-1 {
            0% {
                transform: rotate(-105deg);
            }

            100% {
                transform: rotate(270deg);
            }
        }

        .dot:nth-child(1) {
            animation: dot-rotate-1 4s 0s linear infinite;
        }

        .dot:nth-child(1):before {
            background-color: #ff3270;
            animation: dot-move 4s 0s ease infinite;
        }

        @keyframes dot-rotate-2 {
            0% {
                transform: rotate(-105deg);
            }

            100% {
                transform: rotate(270deg);
            }
        }

        .dot:nth-child(2) {
            animation: dot-rotate-2 4s 1s linear infinite;
        }

        .dot:nth-child(2):before {
            background-color: #208bf1;
            animation: dot-move 4s 1s ease infinite;
        }

        @keyframes dot-rotate-3 {
            0% {
                transform: rotate(-105deg);
            }

            100% {
                transform: rotate(270deg);
            }
        }

        .dot:nth-child(3) {
            animation: dot-rotate-3 4s 2s linear infinite;
        }

        .dot:nth-child(3):before {
            background-color: #afe102;
            animation: dot-move 4s 2s ease infinite;
        }

        @keyframes dot-rotate-4 {
            0% {
                transform: rotate(-105deg);
            }

            100% {
                transform: rotate(270deg);
            }
        }

        .dot:nth-child(4) {
            animation: dot-rotate-4 4s 3s linear infinite;
        }

        .dot:nth-child(4):before {
            background-color: #fbd301;
            animation: dot-move 4s 3s ease infinite;
        }
        #loder-container{
            position : fixed; 
            top : 0;
            left:0;
            width: 100vw;
            height: 100vh;
            z-index:1030;
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
    <div id="loder-container">
        <div class="dots">
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
        </div>

        <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
            <defs>
                <filter id="goo">
                    <feGaussianBlur in="SourceGraphic" stdDeviation="12" result="blur" />
                    <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7"
                        result="goo" />
                    <feBlend in="SourceGraphic" in2="goo" />
                </filter>
            </defs>
        </svg>
    </div>
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
        
        //after min of 5 second
        
        $(window).on('load',function() {
            $("#loder-container").fadeOut("10");
            $(".container-to-faid").fadeIn("10");
            $(".navbar-to-fadein").fadeIn("10");

        });
    </script>
</body>

</html>
