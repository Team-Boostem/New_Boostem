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
    </style>
@endpush

{{-- push scripts --}}
@push('scripts')
    <script type="text/javascript">
        $("#newsletter_btn").click(function(){
                console.log('hii')
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
                            $("#newsletter_row").hide();
                        }
                    }
                });
            }
        );
    </script>
@endpush

{{-- extend and yield content --}}
@extends('layouts/community-dashboard')
@section('content')
    <div class="main-box">
        <div id="search-status"></div>
        {{-- <div>
            <div class="fq-header-wrapper">
                <div class="container">
                    @if (subscribeNewsletterStatus())
                    @else
                        <div class="alert alert-success" id="newsletter-status"></div>
                        <div class="row" id="newsletter_row">
                            <div class="col-md-12 align-self-center order-md-0 order-1">
                                <div class="faq-header-content">
                                    <h1 class="mb-4">Subscribe to newsletter</h1>
                                    <div class="row">
                                        <div class="col-lg-5 mx-auto">
                                            <div class="autocomplete-btn">
                                                <input id="newsletter_inp" type="email" class="form-control"
                                                    @auth
                                                        value="{{ Auth::user()->email }}" 
                                                    @endauth>
                                                <button type="button" id="newsletter_btn"
                                                    class="btn btn-primary">Subscribe</button>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mt-4 mb-0">Search instant answers & questions asked by popular users</p>
                                </div>
                            </div>
                        </div>
                    @endif

                </div>
            </div>
        </div> --}}
        
    </div>
@endsection
