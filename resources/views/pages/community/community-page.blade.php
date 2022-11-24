{{-- push title --}}
@push('title')
    <title>User Profile</title>
@endpush

{{-- push styles --}}
@push('styles')
    <style>
        .banner-container {
            width: 100%;
        }
        .banner-box img{
            width: 100%;
            border-radius: 6px;
        }
        .banner-box{
            position: relative;
            margin-bottom: 5rem;
        }
        .logo-holder {
            width: 100%;
            position: absolute;
            left: 0;
            bottom: -4rem;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .logo-holder img{
          width: 8rem;
          height: 8rem;
          border-radius: 50%;
          border: 2px solid rgb(255, 255, 255);
          background-color: white;
        }
        .banner-content{
          display: flex;
          align-items: center;
          justify-content: center;
          flex-direction: column;
        }
        .banner-content h2{
          font-size: 2.5rem;
          font-weight: 700;
          color: rgb(39, 39, 39);
          margin-bottom: 0.2rem;
        }
        .banner-content h4{
          font-size: 1.45rem;
          font-weight: 500;
          color: rgb(67, 67, 67);
          margin-bottom: 0.2rem;
        }
        .banner-content p{
          font-size: 1rem;
          font-weight: 500;
          color: rgb(96, 96, 96);
          margin-bottom: 0.2rem;
          text-align: center;
          max-width: 55rem;
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
        <div class="banner-container">
            <div class="banner-box">
                <img src="{{ asset('public/icons/banner/banner1.png') }}" alt="">
                <div class="logo-holder">
                    <img src="{{ asset('public/icons/avtar/avtar1.png') }}" alt="">
                </div>
            </div>
            <div class="banner-content">
                <h2>name of community</h2>
                <h4>tagline should be a littel big</h4>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas qui placeat voluptatum dolores iusto
                    eligendi, ducimus mollitia facere voluptates repellat expedita quae dolorem beatae</p>
            </div>
        </div>
    @endsection
