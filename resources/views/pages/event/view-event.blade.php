{{-- push title --}}
@push('title')
    <title>Event | Boostem</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('public/cork/html/layouts/collapsible-menu/css/dark/loader.css') }}" rel="stylesheet"
        type="text/css" />
    <script src="{{ asset('public/cork/html/layouts/collapsible-menu/loader.js') }}"></script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{ asset('public/cork/html/src/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/cork/html/layouts/collapsible-menu/css/light/plugins.css') }}" rel="stylesheet"
        type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/cork/html/src/plugins/src/stepper/bsStepper.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('public/cork/html/src/assets/css/light/scrollspyNav.css') }}" />
    <link rel="stylesheet" type="text/css"
        href="{{ asset('public/cork/html/src/plugins/css/light/stepper/custom-bsStepper.css') }}">
    <!--  END CUSTOM STYLE FILE  -->
    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('public/cork/html/src/plugins/css/light/editors/quill/quill.snow.css') }}">

    <!--  END CUSTOM STYLE FILE  -->
    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/cork/html/src/plugins/src/tagify/tagify.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('public/cork/html/src/plugins/css/light/tagify/custom-tagify.css') }}">
    <!--  END CUSTOM STYLE FILE  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/cork/html/src/assets/css/light/forms/switches.css') }}">
@endpush

{{-- push styles --}}
@push('styles')
<style>
    .flex {
        display: flex;
        align-items: center;
        justify-content: center;
    }


    p {
        margin-bottom: 0;
        color: gray;
    }

    h3 {
        padding-left: 0;
        margin-bottom: 0;
    }

    h5 {
        margin-bottom: 0;
    }

    .banner-wrapper {
        width: 100%;
        background-color: rgb(128, 128, 128);
        border-radius: 10px;
        overflow: hidden;
    }

    .banner-wrapper img {
        width: 100%;
        border-radius: 10px;
        overflow: hidden;
    }

    .logo-time-container {
        justify-content: space-between;
        /* background-color: rgb(246, 186, 186); */
        padding: 1.5rem 0;
    }

    .logo-container {
        height: 4.4rem;
        width: 4.4rem;
        background-color: transparent;
        border-radius: 6px;
        overflow: hidden;
    }

    .logo-container img {
        height: 100%;
        width: 100%;
        object-fit: contain;
        border-radius: 6px;
        overflow: hidden;
    }

    .time-box {
        background-color: rgb(225, 225, 231);
        box-shadow: 1px 1px 5px rgb(160, 162, 169);
        min-width: 10rem;
        padding: 0.5rem 1.2rem;
        margin-left: 1.2rem;
    }

    .time-box i {
        width: 1.2rem;
        height: 1.2rem;
        font-size: 1.2rem;
        padding: 0;
        margin-right: 1rem;
    }

    .time-box p {
        color: gray;
        font-size: 0.9rem;
        font-weight: 300;
    }

    .time-box h5 {
        color: rgb(72, 72, 72);
        font-size: 1rem;
        font-weight: 500;
    }

    .event-title {
        padding-left: 1rem;
    }

    .event-title h3 {
        font-size: 1.5rem;
        font-weight: 700;
        color: rgb(53, 53, 53);
    }

    .pearks-container {
        padding: 2rem 0;
        padding-top: 4rem;
        background-color: transparent;
        width: 100%;
        min-height: 18rem;
        /* justify-content: space-evenly; */
        flex-wrap: wrap;
    }

    .peark-box {
        height: 14rem;
        padding: 0 2.5rem;
        margin: 1rem 1rem;
        width: 30%;
        min-width: 18rem;
        flex-direction: column;
        border-radius: 12px;
        border-bottom: 4px solid rgb(255, 9, 239);
        background-color: white;
        box-shadow: 1px 1px 8px rgb(185, 186, 191);
        position: relative;
        text-align: center;
    }

    .peark-box::before {
        content: '';
        background: url('https://media.istockphoto.com/vectors/vector-flat-golden-trophy-vector-id1176397624?k=20&m=1176397624&s=612x612&w=0&h=yICH7de39SwB1sDP4-kBHFS8bJz4srdu_HOrBC9KvzY=');
        width: 100%;
        height: 13rem;
        display: block;
        position: absolute;
        background-size: contain;
        filter: blur(1px);
        filter: opacity(30%);
        top: 0;
        left: 0;
        background-repeat: no-repeat;
        background-position: center center;
    }

    .card {
        box-shadow: none;
    }

    .page-content {
        padding: 2rem;
        padding-top: 6rem;
    }

    .peark-content {
        z-index: 2;
        flex-direction: column;
    }

    #cd-timeline::before {
        border-left: 3px solid #bababa;
    }

    .cd-timeline-content::before {
        border-left: 12px solid white;
    }

    .cd-timeline-content {
        background-color: white;
    }

    .cd-timeline-block:nth-child(even) .cd-timeline-content::before {
        border-right-color: white;
    }

    .registration-form {
        width: 100%;
        min-height: 20rem;
        padding: 3rem 1rem;
        /* background-color: rgb(240, 185, 185); */
    }

    .black-out {
        background-color: #040023;
        position: absolute;
        top: 0;
        left: 0;
        width: 100vw;
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }

    body:before {
        height: 0 !important;
    }

    .col-12 {
        margin: 20px 0;
    }

    .tagify__input {
        width: 100%;
    }

    .dstepper-block {
        margin-top: 0 !important;
    }

    .widget-content-area {
        border: none;
    }

    .btn-secondary {
        color: #fff !important;
        background-color: #805dca;
        border-color: #805dca;
        box-shadow: 0 10px 20px -10px rgb(92 26 195 / 59%);
    }

    .btn-secondary:hover {
        color: #fff !important;
        background-color: #6643b2;
        border-color: #6643b2;
        box-shadow: 0 10px 20px -10px rgb(92 26 195 / 59%);
    }

    .button-popup {
        background-color: cadetblue;
        color: whitesmoke;
        border: 0;
        -webkit-box-shadow: none;
        box-shadow: none;
        font-size: 18px;
        font-weight: 500;
        border-radius: 7px;
        padding: 15px 35px;
        cursor: pointer;
        white-space: nowrap;
        margin: 10px;
    }

    .img-popup {
        width: 200px;
    }

    .swal2-success-circular-line-right {
        background-color: #eff3f6 !important;
    }

    .swal2-success-circular-line-left {
        background-color: #eff3f6 !important;
    }

    .swal2-success-fix {
        background-color: #eff3f6 !important;
    }

    #success {
        background: green;
    }

    @media only screen and (max-width: 1170px) {
        .cd-timeline-block:nth-child(even) .cd-timeline-content::before {
            border-right-color: transparent;
        }

        .cd-timeline-content::before {
            border-left: 12px solid transparent;

        }
    }

    @media only screen and (max-width: 1000px) {
        .main-page-container {
            padding: 6rem 4vw !important;
        }
    }

    @media only screen and (max-width: 820px) {
        .time-box {
            background-color: rgb(225, 225, 231);
            box-shadow: 1px 1px 5px rgb(160 162 169);
            min-width: 7rem;
            padding: 0.3rem 1rem;
            margin-left: 1rem;
        }

        .time-box h5 {
            font-size: 0.9rem;
        }

        .time-box p {
            font-size: 0.7rem;
        }

        .event-title h3 {
            font-size: 1.3rem;
        }

        .logo-container {
            height: 3.8rem;
            width: 3.8rem;
            background-color: transparent;
            border-radius: 6px;
            overflow: hidden;
        }

        .peark-box {
            height: 12rem;
        }

        .peark-box::before {
            height: 11rem;
        }
    }

    @media only screen and (max-width: 765px) {
        .logo-time-container {
            flex-direction: column;
            margin-bottom: 0;
        }

        .left-logo {
            margin-bottom: 1rem;
        }
    }

    @media only screen and (max-width: 500px) {
        .logo-container {
            height: 2.8rem;
            width: 2.8rem;
            background-color: transparent;
            border-radius: 6px;
            overflow: hidden;
        }

        .event-title h3 {
            font-size: 1rem;
        }

        .event-title p {
            font-size: 0.7rem;
        }

        .time-box {
            background-color: rgb(225, 225, 231);
            box-shadow: 1px 1px 5px rgb(160 162 169);
            min-width: 7rem;
            padding: 0.3rem 0.85rem;
        }

        .time-box h5 {
            font-size: 0.7rem;
        }

        .time-box p {
            font-size: 0.5rem;
        }

        .peark-box {
            height: 11rem;
        }

        .peark-box p {
            font-size: 0.75rem;
        }

        .peark-box h4 {
            font-size: 1rem;
        }

        .peark-box::before {
            height: 10rem;
        }

        .card-body {
            padding: 0;
        }

        .registration-form {
            padding: 3rem 0rem;
        }

        .registration-form .container {
            padding-right: 0;
            padding-left: 0;
        }

        .widget-content-area {
            padding: 20px 0;

        }
    }
</style>
@endpush

{{-- push scripts --}}
@push('scripts')
            <!-- BEGIN PAGE LEVEL SCRIPTS -->
            <script src="{{ asset('public/cork/html/src/plugins/src/stepper/bsStepper.min.js') }}"></script>
            <script src="{{ asset('public/cork/html/src/plugins/src/stepper/custom-bsStepper.min.js') }}"></script>
            <!-- END PAGE LEVEL SCRIPTS -->
        
            <!-- BEGIN GLOBAL MANDATORY STYLES -->
            <script src="{{ asset('public/cork/html/src/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
            <script src="{{ asset('public/cork/html/src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
            <script src="{{ asset('public/cork/html/src/plugins/src/mousetrap/mousetrap.min.js') }}"></script>
            <script src="{{ asset('public/cork/html/layouts/vertical-dark-menu/app.js')}}"></script>
            <script src="{{ asset('public/cork/html/src/plugins/src/highlight/highlight.pack.js') }}"></script>
            <!-- END GLOBAL MANDATORY STYLES -->
        
            <!-- BEGIN PAGE LEVEL SCRIPTS -->
            <script src="{{ asset('public/cork/html/src/assets/js/scrollspyNav.js') }}"></script>
            <script src="{{ asset('public/cork/html/src/plugins/src/editors/quill/quill.js') }}"></script>
            {{-- <script src="{{ asset('cork/admin/src/plugins/src/editors/quill/custom-quill.js') }}"></script> --}}
            <!-- END PAGE LEVEL SCRIPTS -->
            <!--  BEGIN CUSTOM SCRIPTS FILE  -->
            <script src="{{ asset('public/cork/html/src/plugins/src/tagify/tagify.min.js') }}"></script>
            <script src="{{ asset('public/cork/html/src/plugins/src/tagify/custom-tagify.js') }}"></script>
            <!--  BEGIN CUSTOM SCRIPTS FILE  -->
            <!-- BEGIN PAGE LEVEL PLUGINS -->
        
            <!-- toastr -->
            <script src="{{ asset('public/cork/html/src/plugins/src/notification/snackbar/snackbar.min.js') }}"></script>
            <!-- END PAGE LEVEL PLUGINS -->
            <!--  BEGIN CUSTOM SCRIPTS FILE  -->
            <script src="{{ asset('public/cork/html/src/assets/js/components/notification/custom-snackbar.js') }}"></script>
            <!--  END CUSTOM SCRIPTS FILE  -->
            
        
            <script>
                // // The DOM element you wish to replace with Tagify
            // var input = document.querySelector('input[name=interest]');
        
            // // initialize Tagify on the above input node reference
            // new Tagify(input)
            var inputElm = document.querySelector('input[name=interest]')
                , whitelist = [
                    "Public Speaking"
                    , "Digital Marketing"
                    , "Business Development"
                    , "Entrepreneurship"
                    , "Finance"
                    , "Law"
                    , "Management"
                    , "Human Resources"
                    , "Operations"
                    , "Sales"
                    , "Upcoming tech"
                    , "Web3"
                , ];
        
            var tagify = new Tagify(inputElm, {
                whitelist: whitelist,
                // maxTags: 10,
                dropdown: {
                    maxItems: 20, // <- mixumum allowed rendered suggestions
                    classname: "tags-look", // <- custom classname for this dropdown, so it could be targeted
                    enabled: 0, // <- show suggestions on focus
                    closeOnSelect: false // <- do not hide the suggestions dropdown once an item has been selected
                }
            })
        
        
            // display none on click
            function displayNone() {
                document.getElementById("success-msg").style.display =
                    "none";
            }
        
        
            // Alert Modal Type
        // $(document).on('click', '#success', function(e) {
        // 	swal(
        // 		'Success',
        // 		'You clicked the <b style="color:green;">Success</b> button!',
        // 		'success'
        // 	)
        // });
           
        
            </script>
@endpush

{{-- extend and yield content --}}
@extends('layouts/community-dashboard')
@section('content')
    <div class="main-box"> 
        {{-- <h2>{{ $event->title }}</h2>
        <p>{!! $event->description !!}</p>
        <div>
            @foreach ($que as $line)
                <p>{{ $line[] }}</p>
            @endforeach
        </div> --}}

        @if (session('message'))
        <div  class="flex message-box" id="success-msg" style="position: fixed;z-index:20; left:10vw; top:10vh; height:14rem;width:25rem; background-color:white; flex-direction:column; transition:1s;">
            <img style="height: 5rem;width:5rem; margin-bottom:1rem;" src="{{ asset('public/icons/checked.png') }}" alt="">
            <h2>SUCCESS</h2>
            <p>you have registered successfully</p>
            <button onclick="displayNone()" type="button" id="success-close-btn" style="margin-top:0.5rem;background-color:rgb(255, 40, 40);color:white;
            padding:6px 12px;border:none;border-radius:6px;">Close</button>
        </div>
        @endif
        @if($errors->any())
        <div  class="flex message-box" id="success-msg" style="position: fixed;z-index:20; left:10vw; top:10vh; height:14rem;width:25rem; background-color:white; flex-direction:column; transition:1s;">
            <img style="height: 5rem;width:5rem; margin-bottom:1rem;" src="{{ asset('public/icons/error.png') }}" alt="">
            <h2>Error</h2>
            <p>{{$errors->first()}}</p>
            <button onclick="displayNone()" type="button" id="success-close-btn" style="margin-top:0.5rem;background-color:rgb(255, 40, 40);color:white;
            padding:6px 12px;border:none;border-radius:6px;">Close</button>
        </div>
        @endif
        <div class="banner-wrapper"> <img src="{{ asset('public/img/e-cellBanner.png') }}" alt="your banner"> </div> {{--
        /banner ends heare --}} {{--
        logo and time section startes heare --}}
        <div class="flex logo-time-container">
            <div class="flex left-logo">
                <div class="logo-container"> <img src="{{ asset('public/img/e-cellLogo.png') }}" alt=""> </div>
                <div class="event-title">
                    <h3>SPECTRA</h3>
                    <p>E-CELL RGPV Bhopal</p>
                    {{-- <button id="success">Success</button> --}}
                </div>
            </div>
            <div class="flex right-time">
                <div class="flex time-box"> <i class="dripicons-calendar"></i>
                    <div>
                        <p>Registration starts</p>
                        <h5>{{ $event->start_date }}</h5>
                    </div>
                </div>
                <div class="flex time-box"> <i class="dripicons-calendar"></i>
                    <div>
                        <p>Registration ends</p>
                        <h5>{{ $event->start_date }}</h5>
                    </div>
                </div>
            </div>
        </div> {{-- /logo and time section ends heare --}} {{-- About event section startes heare --}} {{-- <div
            class="about-event">
            <h1>Abous EDP</h1>
            <h5>entepenore devlopement program</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic mollitia ex soluta ducimus voluptatibus consectetur
                beatae rem blanditiis deserunt dolorem tempora quas corporis ipsam reprehenderit nisi maiores at ab, facilis
                iure dolor numquam labore perspiciatis totam dolore! Facere odit cumque placeat accusantium quasi voluptates,
                blanditiis voluptate corrupti aliquid debitis illum. </p>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum totam fugit aut magni rerum quam libero
                voluptatum a, natus dicta.</p>
        </div> --}} {{-- /About event section ends heare --}} {{-- pearks section startes heare --}}
        <div class="flex pearks-container">
            <div class="flex peark-box">
                <div class="flex peark-content">
                    <h4>Certificate</h4>
                    <p>Get a certificate for the 2-month entrepreneur development program</p>
                </div>
            </div>
            <div class="flex peark-box">
                <div class="flex peark-content">
                    <h4>Experience</h4>
                    <p>Get exposed to the best experience an entrepreneur can get</p>
                </div>
            </div>
            <div class="flex peark-box">
                <div class="flex peark-content">
                    <h4>Network</h4>
                    <p>Build a network with successful entrepreneurs from all over the country</p>
                </div>
            </div>
            <div class="flex peark-box">
                <div class="flex peark-content">
                    <h4>Leadership qualities</h4>
                    <p>Learn skills that you should have as a leader</p>
                </div>
            </div>
            <div class="flex peark-box">
                <div class="flex peark-content">
                    <h4>Knowledge</h4>
                    <p>Know all you need to build your own startup, practically from experts</p>
                </div>
            </div>
        </div> {{-- /pearks section ends heare --}} {{-- timeline startes heare --}}
        <div class="timeline">
            <div class="row">
                <div class="col-12"> {{-- <div class="card" style="background-color: red;"> --}}
                        <div class="card" style="background-color: transparent;">
                            <div class="card-body">
                                <section id="cd-timeline" class="cd-container">
                                    <div class="cd-timeline-block">
                                        <div class="cd-timeline-img bg-success"> <i class="mdi mdi-adjust"></i> </div>
                                        {{-- < !-- cd-timeline-img --> --}}
                                            <div class="cd-timeline-content">
                                                <h3>Registration</h3>
                                                <p class="mb-0 text-muted"> Registration for spectra organised by ecell RGPV bhopal are going to start from 04/11/2022 Ard end at 11/11/2022 all entreated students are required to fill this form to be considered for the event. </p> <span class="cd-date me-xl-0 me-2">06 Nov | 11 Nov</span>
                                            </div>
                                            {{-- < !-- cd-timeline-content --> --}}
                                    </div>
                                    {{-- < !-- cd-timeline-block --> --}}
                                        <div class="cd-timeline-block">
                                            <div class="cd-timeline-img bg-danger"> <i class="mdi mdi-adjust"></i> </div>
                                            {{-- < !-- cd-timeline-img --> --}}
                                                <div class="cd-timeline-content" style="background-color: white;">
                                                    <h3>Introduction</h3>
                                                    <p class="mb-3 text-muted">An introduction session on entrepreneurship it's importance and introduction to the session by succesful entrepreneurs who have got the best knowledge in this field . </p> <span
                                                        class="cd-date me-xl-0 me-2">15 Nov</span>
                                                </div>
                                                {{-- < !-- cd-timeline-content --> --}}
                                        </div>
                                        {{-- < !-- cd-timeline-block --> --}}
                                            <div class="cd-timeline-block">
                                                <div class="cd-timeline-img bg-info"> <i class="mdi mdi-adjust"></i> </div>
                                                {{-- cd-timeline-img --}}
                                                <div class="cd-timeline-content">
                                                    <h3>Workshops & Assessments</h3>
                                                    <p class="mb-0 text-muted">All participants will be given a session on entrepreneurship development and how to build a startup from scratch followed by a task on the same topic covered in that session. </p> <span
                                                        class="cd-date me-xl-0 me-2">17 Nov | 06 Jan</span>
                                                </div>
                                                {{-- < !-- cd-timeline-content --> --}}
                                            </div>
                                            {{-- < !-- cd-timeline-block --> --}}
                                                <div class="cd-timeline-block">
                                                    <div class="cd-timeline-img bg-pink"> <i class="mdi mdi-adjust"></i> </div>
                                                    {{-- < !-- cd-timeline-img --> --}}
                                                        <div class="cd-timeline-content">
                                                            <h3>Pitching & Analysis</h3>
                                                            <p class="mb-3 text-muted">Afterwords each startup will pitch its idea in front of the panel and will be able to get responses and reviews from them.</p> <span
                                                                class="cd-date me-xl-0 me-2">10 & 11 Jan</span>
                                                        </div>
                                                        {{-- < !-- cd-timeline-content --> --}}
                                                </div>
                                                {{-- < !-- cd-timeline-block --> --}}
                                                    <div class="cd-timeline-block">
                                                        <div class="cd-timeline-img bg-warning"> 
                                                            <i class="mdi mdi-adjust"></i>
                                                        </div>
                                                        {{-- < !-- cd-timeline-img --> --}}
                                                            <div class="cd-timeline-content">
                                                                <h3>Conclusion & Leaderboard</h3>
                                                                <p class="mb-3 text-muted">Finally, a session with everyone and the best startup owners from around the country will take place to which top performers will be awarded.</p> <span class="cd-date me-xl-0 me-2">15
                                                                    Jan</span>
                                                            </div>
                                                            {{-- < !-- cd-timeline-content --> --}}
                                                    </div>
                                                    {{-- < !-- cd-timeline-block --> --}}
                                </section>
                                {{-- < !-- cd-timeline --> --}}
                            </div>
                        </div>
                    </div>
                    {{-- < !-- end col --> --}}
                </div>
            </div> {{-- /timeline ends heare --}} {{-- registration startes heare --}}
            <div class="flex registration-form">
                @if(Auth::check()) <div class="container" style="max-width: 40rem">
                    <div class="container">
                        <div class="row layout-top-spacing" id="cancel-row">
                            <div id="wizard_Default" class="col-lg-12 layout-spacing">
                                <div class="statbox widget box box-shadow">

                                    @if($event->status == 'upcoming')
                                    <h1>This Form will strt soon</h1>
                                    @elseif ($event->status == 'completed')
                                    <h1>This Form is closed now</h1>
                                    @elseif ($event->status == 'ongoing')
                                        <form action="{{ url()->current() }}" method="POST">
                                            @csrf
                                        <h2>Fill this form</h2>
                                            <div class="form-group">
                                                <label for="name">Name</label>
                                                <input type="text" class="form-control" id="name" name="name" value="{{ Auth::user()->name }}" placeholder="Enter your name">
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="email" class="form-control" id="email" name="email" value="{{ Auth::user()->email }}" placeholder="Enter your email">
                                            </div>
                                        <h2>secondary form</h2> 
                                            @foreach ( $que as $questio )

                                            @if($questio['type'] == 'text')
                                            <div class="form-group">
                                                <label for="{{ $questio['name'] }}">{{ $questio['title'] }}</label>
                                                <input type="text" class="form-control" id="{{ $questio['name'] }}" name="{{ $questio['name'] }}" placeholder="{{ $questio['title'] }}">
                                            </div>
                                            @endif

                                            @if($questio['type'] == 'textarea')
                                            <div class="form-group">
                                                <label for="{{ $questio['name'] }}">{{ $questio['title'] }}</label>
                                                <textarea name="{{ $questio['name'] }}" id="{{ $questio['name'] }}" cols="70" rows="7"></textarea>
                                            </div>
                                            @endif

                                            @if($questio['type'] == 'radio')
                                            <div class="form-group">
                                                <label>{{ $questio['title'] }}</label>
                                                @foreach ($questio['options'] as $option)
                                                    <input class="form-check-input"  type="radio" name="{{ $questio['name'] }}" id="{{ $questio['name'] }}" value="{{ $option }}"/>
                                                    <label class="form-check-label" for="{{ $questio['name'] }}"> {{ $option }} </label>
                                                @endforeach

                                            </div>
                                            @endif
                                                
                                            @endforeach
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                    @endif
                                    

                                   
                                    
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div> @else <div class="flex container black-layer" style="max-width: 40rem; height:100%;
                        width:100%; background-color:#d8d8d8; min-height:60vh; position:relative; "> <a
                        href="{{ route('user.register') }}"
                        style=" position:absolute; top:50%; left:50%; padding:10px 24px; font-size:1.2rem;  color:white; cursor: pointer; border-radius: 4px;transform: translate(-50% ,-50%); background-color:#0168fa ;  ">Login
                        to Register</a>
                    <div> @endif </div> </div> {{-- /registration ends heare --}}
        
        
        

@endsection
