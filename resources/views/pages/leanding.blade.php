{{-- push title --}}
@push('title')
    <title>User Profile</title>
    <link href="{{ asset('public/cork/html/src/assets/css/light/pages/knowledge_base.css') }}" rel="stylesheet"
        type="text/css" />
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
        crossorigin="anonymous"></script>
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
@endpush

{{-- extend and yield content --}}
@extends('layouts/community-dashboard')
@section('content')
    {{-- <div class="main-box">
        <div id="search-status"></div>
        <div id="newsletter-status"></div>
        <div>
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
        </div>
    </div> --}}
@endsection
