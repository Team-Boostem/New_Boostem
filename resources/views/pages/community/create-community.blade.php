<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Create Community | Boostem</title>
    <link rel="stylesheet" href="{{ asset('public/css/login.css') }}" />
</head>

<body>
    {{-- <div class="notification">
        <p>notification content</p>
        <button type="button" id="dismiss">DISMISS</button>
    </div> --}}
    <div class="community-registration-container">
        <div class="left-com-reg">
            <h1>Lorem ipsum dolor sit amet consectetur.</h1>
            <img src="{{ asset('public/img/create-community/comunitu-reg-1.png') }}" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptates nemo aut dicta quam nostrum, ad
                ut autem fugit illum.</p>
            <img src="{{ asset('public/img/create-community/comunity-reg-2.png') }}" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptates nemo aut dicta quam nostrum, ad
                ut autem fugit illum.</p>
            <img src="{{ asset('public/img/create-community/community-reg-3.png') }}" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptates nemo aut dicta quam nostrum, ad
                ut autem fugit illum.</p>
            <img src="{{ asset('public/img/create-community/community-reg-4.png') }}" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptates nemo aut dicta quam nostrum, ad
                ut autem fugit illum.</p>

        </div>
        <div class="right-com-reg">
            <div class="com-reg-content">
                <form class="form-com-reg" method="POST" action="{{ route('post.create.community') }}">
                    <h3>Register your community</h3>
                    <p class="register-section-split">Genral info</p>
                    <div class="full-row-input">
                        <input class="input__reg" type="text" placeholder="Name of community *" name="name" required @isset($model) value="{{ $model->name }}" @else value="{{ old('name') }}" @endisset />
                    </div>
                    <div class="full-row-input">
                        <input class="input__reg" type="text" placeholder="Unique username of community *" name="username" required @isset($model) value="{{ $model->username }}" @else value="{{ old('username') }}" @endisset />
                    </div>
                    <div class="full-row-input">
                        <input class="input__reg" type="email" placeholder="Email *" name="email" required @isset($model) value="{{ $model->email }}" @else value="{{ old('email') }}" @endisset />
                    </div>
                    <div class="half-row-input">
                        <input class="input__reg" type="text" placeholder="Organization/college" name="organisation_college" @isset($model) value="{{ $model->organisation_college }}" @else value="{{ old('organisation_college') }}" @endisset />
                        <input class="input__reg" type="text" placeholder="Contact No." name="contact" @isset($model) value="{{ $model->contact }}" @else value="{{ old('contact') }}" @endisset />
                    </div>
                    <p class="register-section-split">Social info</p>
                    <div class="full-row-input">
                        <input class="input__reg" type="text" placeholder="Website URL" name="website" @isset($model) value="{{ $model->website }}" @else value="{{ old('website') }}" @endisset />
                    </div>
                    <div class="half-row-input">
                        <input class="input__reg" type="text" placeholder="Instagram profile URL" name="instagram" @isset($model) value="{{ $model->instagram }}" @else value="{{ old('instagram') }}" @endisset />
                        <input class="input__reg" type="text" placeholder="linkedin profile URL" name="linkedin" @isset($model) value="{{ $model->linkedin }}" @else value="{{ old('linkedin') }}" @endisset />
                    </div>
                    <div class="half-row-input">
                        <input class="input__reg" type="text" placeholder="Facebook profile URL" name="facebook" @isset($model) value="{{ $model->facebook }}" @else value="{{ old('facebook') }}" @endisset />
                        <input class="input__reg" type="text" placeholder="Twitter profile URL" name="twitter" @isset($model) value="{{ $model->twitter }}" @else value="{{ old('twitter') }}" @endisset />
                    </div>


                    <p class="register-section-split">About</p>
                    <div class="full-row-input">
                        <textarea name="description" class="input__reg" cols="30" rows="5">@if (isset($model)) {{ $model->description }} @elseif (old('name') !== null) {{ old('description') }} @else description of Community * (max 40 wordes) @endif
                        </textarea>
                    </div>
                    <div class="full-row-input">
                        <textarea name="about" class="input__reg" cols="30" rows="10">@if (isset($model)) {{ $model->description }} @elseif (old('name') !== null) {{ old('description') }} @else About your Community (max 350 wordes) @endif </textarea>
                    </div>
                    <div class="full-row-button">
                        <button type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>
