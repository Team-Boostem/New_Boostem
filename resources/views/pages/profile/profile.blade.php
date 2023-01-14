{{-- push title --}}
@push('title')
    <title>User Profile</title>
@endpush

{{-- push styles --}}
@push('styles')
<style>
    .left-profile{
        width: 70%;
        float: left;
        /* background-color: rgb(255, 179, 179); */
        padding-right: 1.5rem;
    }
    .right-profile{
        width: 30%;
        float: left;
        background-color: rgb(176, 150, 253);
    }
    .main-profile, .banner-container{
        width: 100%;
    }
    .main-profile{
        background-color: #fff;
        border: 1px solid rgb(215, 215, 215);
        border-radius: 8px;
        overflow: hidden;
        margin-bottom: 1.5rem;
    }
    .banner-container img{
        width: 100%;
        object-fit: cover;
    }
    .profile-info-container{
        position: relative;
    }
    .profile-img{
        position: absolute;
        top: -5rem;
        left: 2rem;
        border-radius: 50%;
        background-color: #fff;
    }
    .profile-img img{
        height: 10rem;
        width: 10rem;
        border-radius: 50%;
        margin: 2px
    }
    .profile-info{
        padding-top: 6rem; 
        padding-bottom: 2rem; 
        padding-left: 2rem; 
    }
    .edit-profile-options{
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
    .skill-intrest-container{
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 1.5rem;
    }
    .skill-intrest{
        background-color: #fff;
        border: 1px solid rgb(215, 215, 215);
        border-radius: 8px;
        overflow: hidden;
        width: 48%;
        padding: 1rem;
    }
    .my-community-profile, .boost-point-container, .followers-container, .following-container{
        background-color: #fff;
        border: 1px solid rgb(215, 215, 215);
        border-radius: 8px;
        overflow: hidden;
        margin-bottom: 1.5rem;
        padding: 2rem 1rem;
        width: 100%;
    }
    .community-image-container img{
        height: 3rem;
        width
        
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
                        <h3>{{ Auth::user()->name }}</h3>
                        <p>{{ Auth::user()->email }}</p>
                        <p>{{ Auth::user()->bio }}</p>
                        <p>{{ Auth::user()->about }}</p>
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
                    <h3>skills</h3>
                    <div class="skills">

                    </div>
                </div>
                <div class="skill-intrest intrest-container">
                    <h3>Intrests</h3>
                    <div class="intrests">

                    </div>
                </div>
            </div>
        </div>
        <div class="right-profile">
            <div class="my-community-profile">
                <h3>My Community</h3>
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
                hii
            </div>
        </div>
    </div>
   </div>
@endsection