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
                                <img src="/storage/covers/blogs/{{ $blog->image }}" alt="">
                            </div>
                            <div class="creater-profail flex">
                                <div class="creater-img">
                                    <img src="/{{ $blog->profile_photo_path }}" alt="">
                                </div>
                                <div class="creater-info">
                                    {{-- <a href="{{  }}"> --}}
                                        <h5 class="creater-name">{{ $blog->name }}</h5>
                                    <p class="creater-name">{{ $blog->username }}</p>
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

                            {{-- view comments.................. --}}
                            <h2 class="mb-5">Comments <span class="comment-count"></span></h2>

                                    <div class="post-comments">
                                        @foreach ($comments as $comment)
                                        <div class="media mb-5 pb-5 primary-comment">
                                            <div class="avatar me-4">
                                                <img alt="avatar" src="{{ url('') }}/{{ $comment->profile_photo_path }}" class="rounded-circle" />
                                            </div>
                                            <div class="media-body">
                                                <h5 class="media-heading mb-1">{{ $comment->name }}</h5>
                                                <div class="meta-info mb-0">{{ \Carbon\Carbon::parse($comment->created_at)->diffForHumans() }}</div>
                                                <p class="media-text mt-2 mb-0">{{ $comment->msg }}</p>
                                                
                                            </div>
                                        </div>
                                        @endforeach

                                        {{-- <div class="post-pagination">

                                            <div class="pagination-no_spacing">

                                                <ul class="pagination">
                                                    <li><a href="javascript:void(0);" class="prev"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg></a></li>
                                                    <li><a href="javascript:void(0);">1</a></li>
                                                    <li><a href="javascript:void(0);" class="active">2</a></li>
                                                    <li><a href="javascript:void(0);">3</a></li>
                                                    <li><a href="javascript:void(0);" class="next"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg></a></li>
                                                </ul>
        
                                            </div>
                                            
                                        </div> --}}
                                        

                                    </div>
                            {{-- add comments.................. --}}
                            <div class="post-form mt-5">
                                <form action="{{ route('comment.add',$blog->slug) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="section add-comment">
                                    <div class="info">
                                        <h6 class="">Add Comment</h6>
                                        <div class="row mt-4">

                                                <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Write Comment</label>
                                                    <textarea class="form-control" cols="30" rows="10" name="msg"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="text-end mt-4">
                                            <button class="btn btn-success">Add Comment</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                                
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>
    </div>
@endsection
