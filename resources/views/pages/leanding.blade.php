{{-- push title --}}
@push('title')
    <title>User Profile</title>
    <link href="{{ asset('public/cork/html/src/assets/css/light/pages/knowledge_base.css') }}" rel="stylesheet"
        type="text/css" />
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
        crossorigin="anonymous"></script>
        {{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
@endpush

{{-- push styles --}}
@push('styles')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap');

        .subscribe-container {
            display: flex;
            background-color: rgb(0, 132, 214);
            padding: 3.5rem 2rem;
            border-radius: 0.5rem;
            justify-content: space-around;
            box-shadow: rgba(129, 129, 129, 0.35) 0px 5px 15px;
        }

        .subscribe-container h1 {
            font-size: 1.75rem;
            margin: 0;
            padding: 0;
            margin: 0.5rem 0;
            margin-top: 1rem;
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            color: rgb(255, 255, 255);
        }

        .join {}

        .join p {
            color: rgb(239, 239, 239);
            margin: 0.5rem 0;
            font-size: 1.1rem;
            font-family: 'Montserrat', sans-serif;
        }

        .email-btn {
            margin-bottom: 1rem;
        }
        .email{
            width: 50%
        }

        .email-btn{
            display: flex;
            width: 90%;
            justify-content: start;
        }

        .email .email-btn input {
            width: 80%;
            padding: 1rem 1rem;
            border-radius: 0.25rem;
            border: none;
            box-shadow: rgba(180, 180, 180, 0.35) 0px 5px 15px;
            font-size: 1rem;
            text-align: start;
        }

        .btn {
            border-radius: 0.25rem;
            padding: 1.1rem 2rem;
            border: none;
            box-shadow: rgba(1, 29, 186, 0.548) 0px 5px 15px;
            background-color: rgb(0, 89, 255);
            color: white;
        }

        /* #underline {
            border-bottom: 1px solid black;
        } */

        .privacy p {
            color: rgb(212, 212, 212);
            font-size: 0.85rem;
        }
        .navbar{
            padding: 0;
        }
        .container{
            max-width: none;
        }
        .custom-banner-carousal{
            width: 100%;
            border-radius: 5rem;
            box-shadow: rgba(129, 129, 129, 0.35) 0px 5px 15px;
        }

        @media (max-width: 768px) {
            .subscribe-container {
                display: flex;
                flex-direction: column;
                padding: 1rem;
            }
            .subscribe-container h1 {
               font-size: 1.2rem;
            }
            .subscribe-container p {
               font-size: 0.8rem;
            }
            .join {
                width: 100%;
            }

            .email {
                width: 100%;
            }

            .email .email-btn {
                width: 100%;
            }
            .email .email-btn input {
                width: 100%;
                padding: 0.4rem 0.9rem;
                height: 3rem;
            }

            .btn {
                width: 35%;
                height: 3rem;
                padding: 0.4rem 0.9rem;
            }
        }
    </style>
@endpush

{{-- push scripts --}}
@push('scripts')
    <script type="text/javascript">
        $("#newsletter_btn").click(function() {
            //var email_id as the value of input with name newsletter 
            var email_id = $("#newsletter_inp").val();
            // send ajax request
            $.ajax({
                url: "{{ route('newsletter.save') }}",
                type: "POST",
                data: {
                    "_token": "{{ csrf_token() }}",
                    "email_id": email_id,
                },
                success: function(response) {
                    console.log(response);
                    if (response.status == 200) {
                        $("#newsletter-status").html(response);

                    } else {
                        $("#newsletter-status").html(response);
                        $(".subscribe-container").hide();
                    }
                }
            });
        });
    </script>
    <script type="text/javascript">
        $('.carousel').carousel({
            interval: 3000,
            keyboard: true,
        })
    </script>
@endpush

{{-- extend and yield content --}}
@extends('layouts/community-dashboard')
@section('content')
    <div class="main-box">
        <div id="search-status"></div>
        <div id="newsletter-status"></div>
        {{-- subscribe to neawsletter........... --}}
        {{-- <div>
            @if (subscribeNewsletterStatus())
            @else
                <div class="subscribe-container">
                    <div class="join">
                        <h1>Join 200+ Subscriber</h1>
                        <p>Stay in the loop with everything you need to know.</p>
                    </div>
                    <div class="email">
                        <div class="email-btn">
                            <input type="email"  id="newsletter_inp"
                                @auth value="{{ Auth::user()->email }}" @endauth placeholder="Enter your email">
                            <button class="btn" id="newsletter_btn">Subscribe</button>
                        </div>
                        <div class="privacy">
                            <p>We care about your data in our <span id="underline">privacy policy.</span> </p>
                        </div>
                    </div>
                </div>
            @endif
        </div> --}}
        {{-- main heading-feature carousal --}}
        <div id="carouselExampleIndicators" class="carousel slide custom-banner-carousal" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="{{ asset('public/img/boostpoint.png') }}" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('public/img/communityreg.png') }}" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('storage/user/banner/banner1.png') }}" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
    </div>
@endsection
