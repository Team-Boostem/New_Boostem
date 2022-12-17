{{-- push title --}}
@push('title')
    <title>Blog | Boostem</title>
    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link href="{{ asset('public/cork/html/src/assets/css/light/elements/custom-pagination.css') }}" rel="stylesheet"
        type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/cork/html/src/assets/css/light/apps/blog-post.css') }}">

    <!--  END CUSTOM STYLE FILE  -->
@endpush

{{-- push styles --}}
@push('styles')
    <style>
        .header-section{
            margin: 1rem 4.5rem;
        }
        .image-container img{
            width: 100%;
            max-height: 600px;
            object-fit: cover;
            border-radius: 20px;
            overflow: hidden;
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
        }
        .creater-img img{
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
        }
        .creater-profail{
            margin: 1rem 0;
            display: flex;
            flex-direction: row;
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
        <div class="middle-content container-xxl p-0">

            <div class="row layout-top-spacing">

                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-4">

                    <div class="single-post-content">

                        <div class="header-section">
                            <div class="image-container">
                                <img src="{{ $blog->image }}" alt="">
                            </div>
                            <div class="creater-profail flex">
                                <div class="creater-img">
                                    <img src="/{{ $blog->profile_photo_path }}" alt="">
                                </div>
                                <div class="creater-info">
                                    {{-- <a href="{{  }}"> --}}
                                        <h5 class="creater-name">{{ $blog->name }}</h5>
                                    <p class="creater-name">{{ $blog->username }}</>
                                    {{-- </a> --}}
                                </div>
                            </div>
                        </div>

                        <div class="post-content">
                            {!! $blog->description !!}
                        </div>

                        <div class="post-info">

                            <hr>

                            <div class="post-tags mt-5">
                                @foreach ($cat_array_data as $cat)
                                <span class="badge badge-primary mb-2">{{ $cat }}</span>
                                @endforeach
                            </div>
                            <div class="post-tags mt-5">
                                @foreach ($tags_array_data as $tag)
                                <span class="badge badge-primary mb-2">{{ $tag }}</span>
                                @endforeach
                            </div>
                            <p>views:{{ profileview($blog->slug) }}</p>

                        </div>

                    </div>

                </div>

            </div>

        </div>
    </div>
@endsection
