<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-G59RKSQS1K"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-G59RKSQS1K');
    </script>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/icons/logo.png') }}">
    <title>Document</title>
    <link rel="stylesheet" href="{{ URL::asset('public/css/login.css') }}" />
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
        crossorigin="anonymous"></script>
</head>

<body>
    <x-loader />
    <div class="login">
        <div class="login-content">
            <div class="left-login">
                <h1>Create Your Account</h1>
                <div class="google-login">
                    <a href="{{ url('/google') }}">
                        <img src="{{ URL::asset('public/icons/Google.png') }}" alt="" />
                        <p>Login with google</p>
                    </a>
                </div>
                <p>or</p>
                <div class="login-form">

                    <form method="POST" action="{{ url('/register') }}">
                        @csrf
                        @if ($errors->any())
                            <div class="alert alert-danger" role="alert">
                                <x-jet-validation-errors class="mb-4" />
                            </div>
                        @endif
                        <div class="form__group field">
                            <input type="text" autocomplete="name" class="form__field" placeholder="Name"
                                name="name" id="name" :value="old('name')" required autofocus />
                            <label for="name" class="form__label">name</label>
                        </div>
                        <div class="form__group field">
                            <input type="email" autocomplete="email" class="form__field" placeholder="Name"
                                name="email" id="email" :value="old('email')" required />
                            <label for="email" class="form__label">Email</label>
                        </div>
                        <div class="form__group field">
                            <input type="password" autocomplete="new-password" class="form__field" placeholder="Name"
                                name="password" id="password" required />
                            <label for="password" class="form__label">Password</label>
                        </div>
                        <div class="form__group field">
                            <input type="password" autocomplete="new-password" class="form__field" placeholder="Name"
                                name="password_confirmation" id="password_confirmation" required />
                            <label for="password_confirmation" class="form__label">Confirm Password</label>
                        </div>
                        @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                            <div class="mt-4">
                                <x-jet-label for="terms">
                                    <div class="flex items-center">
                                        <x-jet-checkbox name="terms" id="terms" required />

                                        <div class="ml-2">
                                            {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                'terms_of_service' =>
                                                    '<a target="_blank" href="' .
                                                    route('terms.show') .
                                                    '" class="underline text-sm text-gray-600 hover:text-gray-900">' .
                                                    __('Terms of Service') .
                                                    '</a>',
                                                'privacy_policy' =>
                                                    '<a target="_blank" href="' .
                                                    route('policy.show') .
                                                    '" class="underline text-sm text-gray-600 hover:text-gray-900">' .
                                                    __('Privacy Policy') .
                                                    '</a>',
                                            ]) !!}
                                        </div>
                                    </div>
                                </x-jet-label>
                            </div>
                        @endif
                        <button>Submit</button>
                    </form>
                </div>
            </div>
            <div class="right-login">
                <div class="right-login-content">
                    <h2>Already have an account</h2>
                    <p>Login to your account and begin your exploration</p>
                    <a href="{{ route('login') }}">
                        <button>Sign in</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(".login").hide();
        //windows on load but min of 800ms
        $(window).on('load', function() {
            setTimeout(function() {
                $("#loder-container").fadeOut("10");
                $(".login").fadeIn("10");
            }, 800);
        });
    </script>
</body>

</html>




{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms" required />

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}
