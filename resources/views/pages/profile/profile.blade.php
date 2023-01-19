{{-- push title --}}
@push('title')
    <title>User Profile</title>
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
            padding: 1rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: #fff;
            border: 1px solid rgb(215, 215, 215);
            border-radius: 8px;
            overflow: hidden;
            margin-bottom: 1.5rem;
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
    </style>
@endpush

{{-- push scripts --}}
@push('scripts')
@endpush

{{-- extend and yield content --}}
@extends('layouts/community-dashboard')
@section('content')
    <div class="main-box">
        <div class="profile-container">
            <div class="left-profile">
                <div class="main-profile">
                    <div class="banner-container">
                        <img src="{{ url('') }}/{{ Auth::user()->cover_photo_path }}" alt="">
                    </div>
                    <div class="profile-info-container">
                        <div class="profile-img">
                            <img src="{{ url('') }}/{{ Auth::user()->profile_photo_path }}" alt="">
                        </div>
                        <div class="social-container">
                            <a href="">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="">
                                <i class="fab fa-instagram"></i>
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
                <div class="edit-profile-options">
                    <button class="btn btn-primary" id="">Edit profile</button>
                    <button class="btn btn-primary" id="">Add intrest</button>
                    <button class="btn btn-primary" id="">Add Skills</button>
                    <button class="btn btn-primary" id="">Change profile Photo</button>
                    <button class="btn btn-primary" id="">Change cover Photo</button>
                    <button class="btn btn-primary" id="">Add Socials</button>
                </div>
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
                        <a class="community-image-container">
                            <img src="{{ url('') }}/{{ Auth::user()->profile_photo_path }}" alt="">
                        </a>
                        <a class="community-image-container">
                            <img src="{{ url('') }}/{{ Auth::user()->profile_photo_path }}" alt="">
                        </a>
                        <a class="community-image-container">
                            <img src="{{ url('') }}/{{ Auth::user()->profile_photo_path }}" alt="">
                        </a>
                    </div>
                    <div class="add-more-communityes">
                        <button class="btn btn-edit">Add More</button>
                    </div>
                </div>
                <div class="boost-point-container">
                    <h4 class="profile-h4">Boost points</h4>
                    <div class="total-boost-points">
                        <h3 class="boost-points">05</h3>
                    </div>
                    <div class="detailed-points">
                        <div class="point-box">
                            <h3>05</h3>
                            <p>Boost points</p>
                        </div>
                        <div class="point-box">
                            <h3>05</h3>
                            <p>Boost points</p>
                        </div>
                        <div class="point-box">
                            <h3>05</h3>
                            <p>Boost points</p>
                        </div>
                    </div>
                </div>
                <div class="follow-container">
                    <h3>83</h3>
                    <p>followers</p>
                    <a href="">See all</a>
                </div>
                <div class="follow-container">
                    <h3>80</h3>
                    <p>following</p>
                    <a href="">See all</a>
                </div>
            </div>
        </div>
    </div>
@endsection
