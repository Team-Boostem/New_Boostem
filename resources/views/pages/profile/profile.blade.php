{{-- push title --}}
@push('title')
    <title>User Profile</title>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" /> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.css" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
@endpush

{{-- push styles --}}
@push('styles')
    <style>
        .left-profile {
            width: 70%;
            float: left;
            /* background-color: rgb(255, 179, 179); */
            padding-right: 1.5rem;
        }

        .right-profile {
            width: 30%;
            float: left;
            /* background-color: rgb(176, 150, 253); */
        }

        .main-profile,
        .banner-container {
            width: 100%;
        }

        .main-profile {
            background-color: #fff;
            border: 1px solid rgb(215, 215, 215);
            border-radius: 8px;
            overflow: hidden;
            margin-bottom: 1.5rem;
        }
        .profile-container{
            display: flex;

        }

        .banner-container img {
            width: 100%;
            object-fit: cover;
        }

        .profile-info-container {
            position: relative;
        }

        .profile-img {
            position: absolute;
            top: -5rem;
            left: 2rem;
            border-radius: 50%;
            background-color: #fff;
        }

        .profile-img img {
            height: 10rem;
            width: 10rem;
            border-radius: 50%;
            margin: 2px
        }

        .profile-info {
            padding-top: 6rem;
            padding-bottom: 2rem;
            padding-left: 2rem;
        }

        .edit-profile-options {
            padding: 0.5rem 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #fff;
            border: 1px solid rgb(215, 215, 215);
            border-radius: 8px;
            overflow: hidden;
            margin-bottom: 1.5rem;
            flex-wrap: wrap;
        }
        .edit-profile-options button {
            margin: 0.5rem 0;
            font-size: 0.8rem;
            margin: 0.4rem 0.2rem;
        }

        .skill-intrest-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 1.5rem;
        }

        .skill-intrest {
            background-color: #fff;
            border: 1px solid rgb(215, 215, 215);
            border-radius: 8px;
            overflow: hidden;
            width: 48%;
            padding: 1rem;
        }

        .my-community-profile,
        .boost-point-container,
        .follow-container {
            background-color: #fff;
            border: 1px solid rgb(215, 215, 215);
            border-radius: 8px;
            overflow: hidden;
            margin-bottom: 1.5rem;
            padding: 1.5rem 1rem;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .community-image-container img {
            height: 3rem;
            width: 3rem;
        }

        .profile-h4 {
            margin-bottom: 1rem;
            font-size: 1rem;
            color: rgb(90, 90, 90);
        }

        .my-community-line {
            width: 100%;
            display: flex;
            align-items: center;
            padding: 0 1rem;
            justify-content: space-evenly;
            margin-bottom: 1rem;
            flex-wrap: wrap;
        }
        .my-community-line a{
            margin: 0.3rem;
        }

        .total-boost-points {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1rem;
            width: 5rem;
            height: 5rem;
            border-radius: 50%;
            background-color: #64B5FF;
            box-shadow: #919191 2px 2px 4px;
        }

        .boost-points {
            font-size: 2rem;
            font-weight: 700;
            color: white;
            padding: 0;
            margin: 0;
        }

        .detailed-points {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 1rem;
        }

        .point-box {
            width: 6rem;
            background-color: #cfe8ff;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            margin: 0 0.5rem;
            border-radius: 8px;
            padding: 0.8rem 0.4rem;
            text-align: center
        }

        .point-box h3 {
            font-size: 1.3rem;
            font-weight: 600;
            margin: 0;
            padding: 0;
        }

        .point-box p {
            margin: 0;
            padding: 0;
        }

        .follow-container h3 {
            font-size: 1.5rem;
            font-weight: 700;
            margin: 0;
            padding: 0;
        }

        .follow-container a {
            font-weight: 600;
            margin: 0;
            padding: 0;
            color: #0073de
        }
        .follow-container p {
            text-align: center;
        }

        .skill {
            display: flex;
            align-items: center;
            margin-bottom: 0.5rem;
        }

        .skill-count {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 3rem;
            height: 3rem;
            border-radius: 50%;
            background-color: #64B5FF;
            box-shadow: #919191 2px 2px 4px;
            margin-right: 0.85rem;
        }

        .skill-count h4 {
            font-size: 1.2rem;
            font-weight: 700;
            color: white;
            padding: 0;
            margin: 0;
        }

        .skills p {
            margin: 0;
            padding: 0;
            font-size: 1rem;
            font-weight: 600;
        }

        .modal-content {
            background-color: white;
        }

        .close {
            border: 1.5px solid #002f5c;
            border-radius: 4px;
        }

        .image_crop_preview {
            padding: 0 !important;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }
        .bd-example-modal-lg{
            width: 50vw ;
            margin: auto;
        }
        .modal-dialog-centered {
            max-width: 100vw;
            align-items: center;
        }
        .modal-dialog{
            margin: 0;
        }
        .social-container{
            display: flex;
            align-items: center;
            justify-content: space-between;
            /* margin: 1.5rem; */
            position: absolute;
            top: 1rem;
            right: 1rem;
        }
        .social-container a{
            margin: 0 0.5rem;
        }
        .social-container a svg{
            height: 1.5rem;
            width: 1.5rem;
        }
        .modal-social{
            width: 90vw;
            max-width: 500px;
        }
        .modal-dialog-centered{
            width: 100vw;
    display: flex;
    align-items: center;
    justify-content: center;
        }
        @media (max-width: 1400px) {
            .detailed-points{
                flex-wrap: wrap;
                justify-content: center;
                
            }
            .point-box{
                margin-top: 0.3rem;
            }
        }
        @media (max-width: 1200px) {
            .profile-container{
            flex-direction: column;
            }
            .left-profile{
                width: 100%;
                padding-right: 0;
            }
            .right-profile{
                width: 100%;
            }
        }
        @media (max-width: 1160px) {
            .bd-example-modal-lg{
                width: 80vw ;
            }
        }
        @media (max-width: 767px) {
            .profile-img img {
                width: 6rem;
                height: 6rem;
            }
            .profile-img {
                top: -3rem;
            }
            .profile-info{
                padding-top: 4rem;
            }
        }
        @media (max-width: 700px) {
            .bd-example-modal-lg{
                width: 100vw ;
            }
            .container{
                max-width: none;
            }
        }
    </style>
@endpush

{{-- push scripts --}}
@push('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            $image_crop = $('#image_demo').croppie({
                enableExif: true,
                viewport: {
                    width: 200,
                    height: 200,
                    type: 'circle'
                },
                boundary: {
                    width: 300,
                    height: 300
                }
            });
            $('#upload_image').on('change', function() {
                var reader = new FileReader();
                reader.onload = function(event) {
                    $image_crop.croppie('bind', {
                        url: event.target.result
                    })
                }
                reader.readAsDataURL(this.files[0]);
                $('#uploadimage').show();
            });
            $('.crop_image').click(function(event) {
                $image_crop.croppie('result', {
                    type: 'canvas',
                    size: 'viewport'
                }).then(function(response) {
                    $.ajax({
                        url: "{{ route('profile.update.img') }}",
                        type: "POST",
                        data: {
                            "_token": "{{ csrf_token() }}",
                            "image": response
                        },
                        success: function(response) {
                            console.log(response);
                            if (response.status == 200) {
                                $('#uploaded_image').html(response)

                            } else {
                                $('#uploaded_image').html(response)
                            }
                        }
                    });
                })
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $image_crop_banner = $('#image_demo_banner').croppie({
                enableExif: true,
                viewport: {
                    width: 459.5,
                    // width: 917,
                    height: 120,
                    // height: 240,
                    // type: 'circle'
                },
                boundary: {
                    width: 500,
                    height: 200
                }
            });
            $('#upload_image_banner').on('change', function() {
                var reader = new FileReader();
                reader.onload = function(event) {
                    $image_crop_banner.croppie('bind', {
                        url: event.target.result
                    })
                }
                reader.readAsDataURL(this.files[0]);
                $('#uploadimage_banner').show();
            });
            $('.crop_image_banner').click(function(event) {
                $image_crop_banner.croppie('result', {
                    type: 'canvas',
                    size: 'viewport'
                }).then(function(response) {
                    $.ajax({
                        url: "{{ route('banner.update.img') }}",
                        type: "POST",
                        data: {
                            "_token": "{{ csrf_token() }}",
                            "image": response
                        },
                        success: function(response) {
                            console.log(response);
                            if (response.status == 200) {
                                $('#uploaded_image_banner').html(response)

                            } else {
                                $('#uploaded_image_banner').html(response)
                            }
                        }
                    });
                })
            });
        });
    </script>
    <script>
        const newInput = document.querySelector('#add_intrest');
        const inputContainer = document.querySelector('#intrest-add-container');
        var i = document.getElementById("hidden_intrest").value;
        newInput.addEventListener('click', () => {
            inputContainer.insertAdjacentHTML('beforeend',
                `<div class="row">
                                <input type="text" name="intrest[` + i + `]" placeholder="add intrest">
                                <button type="button" class="btn btn-danger remove-tr">remove input</button>
                            </div>`
            );
            document.getElementById("hidden_intrest").value = i++;
        });
        // remove input
        inputContainer.addEventListener('click', (e) => {
            if (e.target.classList.contains('remove-tr')) {
                e.target.parentElement.remove();
            }
        });
    </script>
@endpush

{{-- extend and yield content --}}
@extends('layouts/community-dashboard')
@section('content')
    <div class="main-box">
        <div class="profile-container">
            <div class="left-profile">
                <div class="main-profile">
                    <div class="banner-container">
                        <img src="{{ url('') }}/{{ $user->cover_photo_path }}" alt="">
                    </div>
                    <div class="profile-info-container">
                        <div class="profile-img">
                            <img src="{{ url('') }}/{{ $user->profile_photo_path }}" alt="">
                        </div>
                        <div class="social-container">
                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" data-name="Ebene 1" viewBox="0 0 1024 1024"><path fill="#1877f2" d="M1024,512C1024,229.23016,794.76978,0,512,0S0,229.23016,0,512c0,255.554,187.231,467.37012,432,505.77777V660H302V512H432V399.2C432,270.87982,508.43854,200,625.38922,200,681.40765,200,740,210,740,210V336H675.43713C611.83508,336,592,375.46667,592,415.95728V512H734L711.3,660H592v357.77777C836.769,979.37012,1024,767.554,1024,512Z"/><path fill="#fff" d="M711.3,660,734,512H592V415.95728C592,375.46667,611.83508,336,675.43713,336H740V210s-58.59235-10-114.61078-10C508.43854,200,432,270.87982,432,399.2V512H302V660H432v357.77777a517.39619,517.39619,0,0,0,160,0V660Z"/></svg>
                            </a>
                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24"><path d="M12,2.2467A10.00042,10.00042,0,0,0,8.83752,21.73419c.5.08752.6875-.21247.6875-.475,0-.23749-.01251-1.025-.01251-1.86249C7,19.85919,6.35,18.78423,6.15,18.22173A3.636,3.636,0,0,0,5.125,16.8092c-.35-.1875-.85-.65-.01251-.66248A2.00117,2.00117,0,0,1,6.65,17.17169a2.13742,2.13742,0,0,0,2.91248.825A2.10376,2.10376,0,0,1,10.2,16.65923c-2.225-.25-4.55-1.11254-4.55-4.9375a3.89187,3.89187,0,0,1,1.025-2.6875,3.59373,3.59373,0,0,1,.1-2.65s.83747-.26251,2.75,1.025a9.42747,9.42747,0,0,1,5,0c1.91248-1.3,2.75-1.025,2.75-1.025a3.59323,3.59323,0,0,1,.1,2.65,3.869,3.869,0,0,1,1.025,2.6875c0,3.83747-2.33752,4.6875-4.5625,4.9375a2.36814,2.36814,0,0,1,.675,1.85c0,1.33752-.01251,2.41248-.01251,2.75,0,.26251.1875.575.6875.475A10.0053,10.0053,0,0,0,12,2.2467Z"/></svg>
                            </a>
                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="2500" height="1756" viewBox="5.368 13.434 53.9 37.855"><path fill="#FFF" d="M41.272 31.81c-4.942-2.641-9.674-5.069-14.511-7.604v15.165c5.09-2.767 10.455-5.301 14.532-7.561h-.021z"/><path fill="#E8E0E0" d="M41.272 31.81c-4.942-2.641-14.511-7.604-14.511-7.604l12.758 8.575c.001 0-2.324 1.289 1.753-.971z"/><path fill="#CD201F" d="M27.691 51.242c-10.265-.189-13.771-.359-15.926-.803-1.458-.295-2.725-.95-3.654-1.9-.718-.719-1.289-1.816-1.732-3.338-.38-1.268-.528-2.323-.739-4.9-.323-5.816-.4-10.571 0-15.884.33-2.934.49-6.417 2.682-8.449 1.035-.951 2.239-1.563 3.591-1.816 2.112-.401 11.11-.718 20.425-.718 9.294 0 18.312.317 20.426.718 1.689.317 3.273 1.267 4.203 2.492 2 3.146 2.035 7.058 2.238 10.118.084 1.458.084 9.737 0 11.195-.316 4.836-.57 6.547-1.288 8.321-.444 1.12-.823 1.711-1.479 2.366a7.085 7.085 0 0 1-3.76 1.922c-8.883.668-16.426.813-24.987.676zM41.294 31.81c-4.942-2.641-9.674-5.09-14.511-7.625v15.166c5.09-2.767 10.456-5.302 14.532-7.562l-.021.021z"/></svg>
                            </a>
                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 128 128"><circle cx="64" cy="64" r="64" fill="#38a8e0"/><path fill="#fff" d="M99 44.29a28.71 28.71 0 0 1-8.25 2.26 14.4 14.4 0 0 0 6.31-7.95 28.75 28.75 0 0 1-9.12 3.48 14.37 14.37 0 0 0-24.47 13.1 40.77 40.77 0 0 1-29.6-15 14.38 14.38 0 0 0 4.44 19.17 14.3 14.3 0 0 1-6.5-1.8v.18a14.37 14.37 0 0 0 11.52 14.09 14.39 14.39 0 0 1-6.49.25A14.38 14.38 0 0 0 50.26 82a28.81 28.81 0 0 1-17.84 6.15A29.14 29.14 0 0 1 29 88a40.65 40.65 0 0 0 22 6.45c26.42 0 40.86-21.88 40.86-40.86v-1.86A29.18 29.18 0 0 0 99 44.29Z"/></svg>
                            </a>
                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 128 128"><circle cx="64" cy="64" r="64" fill="#0177b5"/><path fill="#fff" d="M92 32H36a4 4 0 0 0-4 4v56a4 4 0 0 0 4 4h56a4 4 0 0 0 4-4V36a4 4 0 0 0-4-4ZM52 86H42V56h10Zm-5-34a6 6 0 1 1 6-6 6 6 0 0 1-6 6Zm39 34H76V66c0-1.66-2.24-3-5-3-4 0-5 5.34-5 7v16H56V56h10v7c0-5 4.48-7 10-7a10 10 0 0 1 10 10Z"/></svg>
                            </a>
                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 128 128"><circle cx="64" cy="64" r="64" fill="#e21a20"/><path fill="#fff" fill-rule="evenodd" d="M98.62 53.92c-.49-6.75-1.72-13.72-10.35-14.23a426.5 426.5 0 0 0-48.55 0c-8.63.5-9.86 7.48-10.35 14.23a135 135 0 0 0 0 20.16c.49 6.75 1.72 13.72 10.35 14.23a426.5 426.5 0 0 0 48.55 0c8.63-.5 9.86-7.48 10.35-14.23a135 135 0 0 0 0-20.16ZM57 73V53l19 10Z"/></svg>
                            </a>
                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" data-name="Layer 1" viewBox="0 0 128 128"><defs><clipPath id="b"><circle cx="64" cy="64" r="64" fill="none"/></clipPath><clipPath id="c"><path fill="none" d="M104-163H24a24.07 24.07 0 0 0-24 24v80a24.07 24.07 0 0 0 24 24h80a24.07 24.07 0 0 0 24-24v-80a24.07 24.07 0 0 0-24-24Zm16 104a16 16 0 0 1-16 16H24A16 16 0 0 1 8-59v-80a16 16 0 0 1 16-16h80a16 16 0 0 1 16 16Z"/></clipPath><clipPath id="e"><circle cx="82" cy="209" r="5" fill="none"/></clipPath><clipPath id="g"><path fill="none" d="M64-115a16 16 0 0 0-16 16 16 16 0 0 0 16 16 16 16 0 0 0 16-16 16 16 0 0 0-16-16Zm0 24a8 8 0 0 1-8-8 8 8 0 0 1 8-8 8 8 0 0 1 8 8 8 8 0 0 1-8 8Z"/></clipPath><clipPath id="h"><path fill="none" d="M84-63H44a16 16 0 0 1-16-16v-40a16 16 0 0 1 16-16h40a16 16 0 0 1 16 16v40a16 16 0 0 1-16 16Zm-40-64a8 8 0 0 0-8 8v40a8 8 0 0 0 8 8h40a8 8 0 0 0 8-8v-40a8 8 0 0 0-8-8Z"/></clipPath><clipPath id="i"><circle cx="82" cy="-117" r="5" fill="none"/></clipPath><radialGradient id="a" cx="27.5" cy="121.5" r="137.5" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#ffd676"/><stop offset=".25" stop-color="#f2a454"/><stop offset=".38" stop-color="#f05c3c"/><stop offset=".7" stop-color="#c22f86"/><stop offset=".96" stop-color="#6666ad"/><stop offset=".99" stop-color="#5c6cb2"/></radialGradient><radialGradient id="d" cx="27.5" cy="-41.5" r="148.5" xlink:href="#a"/><radialGradient id="f" cx="13.87" cy="303.38" r="185.63" xlink:href="#a"/><radialGradient id="j" cx="13.87" cy="-22.62" r="185.63" xlink:href="#a"/></defs><g clip-path="url(#b)"><circle cx="27.5" cy="121.5" r="137.5" fill="url(#a)"/></g><g clip-path="url(#c)"><circle cx="27.5" cy="-41.5" r="148.5" fill="url(#d)"/></g><g clip-path="url(#e)"><circle cx="13.87" cy="303.38" r="185.63" fill="url(#f)"/></g><g clip-path="url(#g)"><circle cx="27.5" cy="-41.5" r="148.5" fill="url(#d)"/></g><g clip-path="url(#h)"><circle cx="27.5" cy="-41.5" r="148.5" fill="url(#d)"/></g><g clip-path="url(#i)"><circle cx="13.87" cy="-22.62" r="185.63" fill="url(#j)"/></g><circle cx="82" cy="46" r="5" fill="#fff"/><path fill="#fff" d="M64 48a16 16 0 1 0 16 16 16 16 0 0 0-16-16Zm0 24a8 8 0 1 1 8-8 8 8 0 0 1-8 8Z"/><rect width="64" height="64" x="32" y="32" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="8" rx="12" ry="12"/></svg>
                            </a>
                        </div>
                        <div class="profile-info">
                            <h3>{{ $user->name }}</h3>
                            <p>{{ $user->email }}</p>
                            <p>{{ $user->bio }}</p>
                            <p>{{ $user->about }}</p>
                        </div>
                    </div>
                </div>
                @if ($user->user_id == Auth::user()->user_id)
                    <div class="edit-profile-options">
                        <button type="button" class="btn btn-primary " data-toggle="modal"
                            data-target="#infoModalCenter">Edit profile</button>
                        <button type="button" class="btn btn-primary " data-toggle="modal"
                            data-target="#intrestModalCenter">Add intrest</button>
                        <button ctype="button" class="btn btn-primary " data-toggle="modal"
                            data-target="#skillsModalCenter">Add Skills</button>
                        <button type="button" class="btn btn-primary " data-toggle="modal"
                            data-target="#exampleModalCenter">Change profile Photo</button>
                        <button class="btn btn-primary " type="button"  data-toggle="modal"
                            data-target="#bannerModalCenter">Change cover Photo</button>
                        <button class="btn btn-primary " type="button"  data-toggle="modal"
                            data-target="#socialModalCenter">Add Socials</button>
                    </div>
                @endif

                <div class="skill-intrest-container">
                    <div class="skill-intrest skills-container">
                        <h3 class="profile-h4">skills</h3>
                        <div class="skills">
                            <div class="skill">
                                <div class="skill-count">
                                    <h4>01</h4>
                                </div>
                                <p>this is my skill</p>
                            </div>
                            <div class="skill">
                                <div class="skill-count">
                                    <h4>02</h4>
                                </div>
                                <p>this is my skill</p>
                            </div>
                            <div class="skill">
                                <div class="skill-count">
                                    <h4>03</h4>
                                </div>
                                <p>this is my skill</p>
                            </div>
                        </div>
                    </div>
                    <div class="skill-intrest intrest-container">
                        <h3 class="profile-h4">Intrests</h3>
                        <div class="intrests">
                            <div class="skill">
                                <div class="skill-count">
                                    <h4>01</h4>
                                </div>
                                <p>this is my skill</p>
                            </div>
                            <div class="skill">
                                <div class="skill-count">
                                    <h4>02</h4>
                                </div>
                                <p>this is my skill</p>
                            </div>
                            <div class="skill">
                                <div class="skill-count">
                                    <h4>03</h4>
                                </div>
                                <p>this is my skill</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right-profile">
                <div class="my-community-profile">
                    <h4 class="profile-h4">My Community</h4>
                    <div class="my-community-line">
                        @foreach ($communities as $community)
                            <a class="community-image-container" href="{{ route('community.page', $community->id) }}">
                                <img src="{{ url('') }}/{{ $community->logo_photo_path }}" alt="">
                            </a>
                        @endforeach
                    </div>
                    <div class="add-more-communityes">
                        <a href="{{ route('create.community') }}">
                            <button class="btn btn-edit">Add Community</button>
                        </a>
                    </div>
                </div>
                <div class="boost-point-container">
                    <h4 class="profile-h4">Boost points</h4>
                    <div class="total-boost-points">
                        <h3 class="boost-points">05</h3>
                    </div>
                    <div class="detailed-points">
                        <div class="point-box">
                            <h3>{{ $pageViewsCount }}</h3>
                            <p>views</p>
                        </div>
                        <div class="point-box">
                            <h3>0</h3>
                            <p>events</p>
                        </div>
                        <div class="point-box">
                            <h3>0</h3>
                            <p>teams</p>
                        </div>
                    </div>
                </div>
                <div class="follow-container">
                    <h3>00</h3>
                    <p>followers</p>
                    <p style="color: blue;">This feature is under devlopement</p>
                </div>
                <div class="follow-container">
                    <h3>00</h3>
                    <p>following</p>
                    <p style="color: blue;">This feature is under devlopement</p>
                </div>
            </div>
        </div>
    </div>
    {{-- profile image update model --}}
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-social">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="main-box py-0">
                        <div class="container" style="margin-top:0px;padding:5px;">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Select Image</h5>
                                    <input type="file" name="upload_image" id="upload_image" />
                                </div>
                            </div>

                            <div class="card text-center" id="uploadimage" style='display:none'>

                                <div class="card-body image_crop_preview">
                                    <div id="image_demo" style="width:350px; margin-top:30px"></div>
                                    <div id="uploaded_image" style="width:350px; margin-top:30px;"></div>
                                </div>
                                <div class="card-footer text-muted">
                                    <button class="crop_image">Crop & Upload Image</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                </div>
            </div>
        </div>
    </div>
    {{-- banner image update model --}}
    <div class="modal fade " id="bannerModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered " role="document">
            <div class="modal-content bd-example-modal-lg">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">banner</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="main-box py-0">
                        <div class="container" style="margin-top:0px;padding:5px;">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Select Image</h5>
                                    <input type="file" name="upload_image_banner" id="upload_image_banner" />
                                </div>
                            </div>

                            <div class="card text-center" id="uploadimage_banner" style='display:none'>
                                
                                <div class="card-body image_crop_preview">
                                    <div id="image_demo_banner" style="width:500px; margin-top:20px"></div>
                                    <div id="uploaded_image_banner" style="width:6900px; margin-top:20px;"></div>
                                </div>
                                <div class="card-footer text-muted">
                                    <button class="crop_image_banner">Crop & Upload Image</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                </div>
            </div>
        </div>
    </div>
    {{-- add socials model --}}
    <div class="modal fade" id="socialModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-social">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">banner</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('profile.add.socials') }}" method="POST">
                        @csrf

                        <input type="text" @if ($socials != null) value="{{ $socials['instagram'] }}" @endif
                            name="instagram" placeholder="instagram">
                        <input type="text" @if ($socials != null) value="{{ $socials['facebook'] }}" @endif
                            name="facebook" placeholder="facebook">
                        <input type="text" @if ($socials != null) value="{{ $socials['twitter'] }}" @endif
                            name="twitter" placeholder="twitter">
                        <input type="text" @if ($socials != null) value="{{ $socials['website'] }}" @endif
                            name="website" placeholder="website">
                        <input type="text" @if ($socials != null) value="{{ $socials['linkedin'] }}" @endif
                            name="linkedin" placeholder="linkedin">
                        <input type="text" @if ($socials != null) value="{{ $socials['github'] }}" @endif n
                            ame="github" placeholder="github">
                        <input type="text" @if ($socials != null) value="{{ $socials['youtube'] }}" @endif
                            name="youtube" placeholder="youtube">
                        <button>Submit</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                </div>
            </div>
        </div>
    </div>
    {{-- add intrest model --}}
    <div class="modal fade" id="intrestModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-social">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">banner</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('profile.add.socials') }}" method="POST">
                        @csrf
                        <div class="row" id="intrest-add-container">
                            <div class="row">
                                <input type="text" name="intrest[0]" placeholder="add intrest">
                            </div>
                        </div>
                        <div class="row">
                            <input type="hidden" id="hidden_intrest" value="1">
                            <button type="button" id="add_intrest">Add</button>
                            <button>Submit</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                </div>
            </div>
        </div>
    </div>
@endsection
