<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google tag (gtag.js) -->
{{-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-G59RKSQS1K"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-G59RKSQS1K');
</script> --}}
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/icons/logo.png') }}">
    <title>Document</title>
    <link rel="stylesheet" href="{{ URL::asset('public/css/login.css') }}" />
</head>

<body>
    <div class="login">
        <div class="login-content">
            <div class="left-login">
                <h1>Login to Your Account</h1>
                <div class="google-login">
                    <a href="{{ url('/google') }}">
                        <img src="{{ URL::asset('public/icons/Google.png') }}" alt="" />
                        <p>Login with google</p>
                    </a>
                </div>
                <p>or</p> 
                <div class="login-form">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <x-jet-validation-errors class="mb-4" />
                        <div class="form__group field">
                            <input type="email"  name="email" :value="old('email')" required autofocus class="form__field" placeholder="Email"  id="email"/>
                            <label for="email" class="form__label">Email</label>
                        </div>
                        <div class="form__group field">
                            <input type="password" name="password" required class="form__field" placeholder="password"  id="password"
                                required />
                            <label for="password" class="form__label">Password</label>
                        </div>

                        <div class="block mt-4">
                            <label for="remember_me" class="flex items-center">
                                <x-jet-checkbox id="remember_me" name="remember" />
                                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                            </label>
                        </div>
                        @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
                        <button>Submit</button>
                    </form>
                </div>
            </div>
            <div class="right-login">
                <div class="right-login-content">
                    <h2>New Here !!</h2>
                    <p>Create an account and begin your exploration</p>
                    <a href="{{ url('/register') }}">
                        <button>Signup</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
                <a href="{{ url('/google') }}">login with google</a>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}
