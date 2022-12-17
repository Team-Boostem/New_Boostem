{{-- push title --}}
@push('title')
    <title>Blogs | Boostem</title>
@endpush

{{-- push styles --}}
@push('styles')
<style>
    
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

        {{-- <div class="row layout-top-spacing">
            <div class="col-lg-3 col-md-3 col-sm-3 mb-4">
                <input id="t-text" type="text" name="txt" placeholder="Search" class="form-control" required="">
            </div>
            <div class="col-xl-2 col-lg-3 col-md-3 col-sm-3 mb-4 ms-auto">
                <select class="form-select form-select" aria-label="Default select example">
                    <option selected="">All Category</option>
                    <option value="3">Wordpress</option>
                    <option value="1">Admin</option>
                    <option value="2">Themeforest</option>
                    <option value="3">Travel</option>
                </select>
            </div>

            <div class="col-xl-2 col-lg-3 col-md-3 col-sm-3 mb-4">
                <select class="form-select form-select" aria-label="Default select example">
                    <option selected="">Sort By</option>
                    <option value="1">Recent</option>
                    <option value="2">Most Upvoted</option>
                    <option value="3">Popular</option>
                </select>
            </div>
        </div> --}}
        
        <div class="row">

            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-4">
                <a href="./app-blog-post.html" class="card style-2 mb-md-0 mb-4">
                    <img src="{{ asset('public/img/banner-samp1.png') }}" class="card-img-top" alt="...">
                    <div class="card-body px-0 pb-0">
                        <h5 class="card-title mb-3">14 Tips to improve your photography</h5>
                        <div class="media mt-4 mb-0 pt-1">
                            <img src="{{ Auth::user()->profile_photo_path }}" class="card-media-image me-3" alt="">
                            <div class="media-body">
                                <h4 class="media-heading mb-1">Shaun Park</h4>
                                <p class="media-text">01 May</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

           
            
        </div>

    </div>
   </div>
@endsection