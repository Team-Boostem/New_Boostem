<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Password Reset | Boostem</title>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/icons/logo.png') }}">
    <link href="{{ asset('public/cork/html/layouts/collapsible-menu/css/light/loader.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('public/cork/html/layouts/collapsible-menu/css/dark/loader.css') }}" rel="stylesheet"
        type="text/css" />
    <script src="{{ asset('public/cork/html/layouts/collapsible-menu/loader.js') }}"></script>
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{ asset('public/cork/html/src/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/cork/html/layouts/collapsible-menu/css/light/plugins.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('public/cork/html/layouts/collapsible-menu/css/dark/plugins.css') }}" rel="stylesheet"
        type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <link href="{{ asset('public/cork/html/src/assets/css/light/authentication/auth-boxed.css') }}" rel="stylesheet"
        type="text/css" />
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="{{ asset('public/cork/html/src/assets/css/light/scrollspyNav.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('public/cork/html/src/assets/css/dark/scrollspyNav.css') }}" rel="stylesheet"
        type="text/css" />
    <!-- toastr -->
    <link href="{{ asset('public/cork/html/src/plugins/src/notification/snackbar/snackbar.min.css') }}"
        rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/cork/html/src/plugins/css/light/notification/snackbar/custom-snackbar.css') }}"
        rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/cork/html/src/plugins/css/dark/notification/snackbar/custom-snackbar.css') }}"
        rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS -->

</head>

<body class="form">

    <!-- BEGIN LOADER -->
    <div id="load_screen">
        <div class="loader">
            <div class="loader-content">
                <div class="spinner-grow align-self-center"></div>
            </div>
        </div>
    </div>
    <!--  END LOADER -->

    <div class="auth-container d-flex h-100">

        <div class="container mx-auto align-self-center">

            <div class="row">

                <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-8 col-12 d-flex flex-column align-self-center mx-auto">
                    <div class="card mt-3 mb-3">
                        <div class="card-body">

                            <div class="row">
                                <div class="col-md-12 mb-3">

                                    <h2>Password Reset</h2>
                                    <p>Enter your email to recover your ID</p>

                                </div>
                                <div class="col-md-12">
                                    <div class="mb-4">
                                        <label class="form-label">Email</label>
                                        <input type="email" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-4">
                                        <button class="btn btn-secondary w-100">RECOVER</button>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset('public/cork/html/src/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->
    


</body>

</html>
