{{-- push title --}}
@push('title')
    <title>User Profile</title>
@endpush

{{-- push styles --}}
@push('styles')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>

    </style>
@endpush

{{-- push scripts --}}
@push('scripts')
<script type="text/javascript">
    var i = 0;
    $("#add-btn").click(function(){
    ++i;
    $("#dynamicAddRemove").append('<tr><td><input type="text" name="team_details['+i+'][title]" placeholder="Enter title" class="form-control" /></td><td><input type="text" name="team_details['+i+'][email]" placeholder="Enter email" class="form-control" /></td><td><button type="button" class="btn btn-danger remove-tr">Remove</button></td></tr>');
    });
    $(document).on('click', '.remove-tr', function(){  
    $(this).parents('tr').remove();
    });
    </script>
@endpush

{{-- extend and yield content --}}
@extends('layouts/community-dashboard')
@section('content')
    <div class="main-box">

        <div class="container">
            <div class="card mt-3">
                <div class="card-header">
                    <h2>Add/remove Multiple Input Todo Fields Dynamically using Jquery In Laravel 8</h2>
                </div>
                <div class="card-body">
                    <form action="{{ url()->current() }}" method="POST">
                        @csrf
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if (Session::has('success'))
                            <div class="alert alert-success text-center">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                <p>{{ Session::get('success') }}</p>
                            </div>
                        @endif
                        <table class="table table-bordered" id="dynamicAddRemove">
                            <tr>
                                <th>Title</th>
                                <th>Action</th>
                            </tr>
                            <tr>
                                <td><input type="text" name="team_details[0][title]" placeholder="Enter title"
                                        class="form-control" /></td>
                                <td><input type="text" name="team_details[0][email]" placeholder="Enter email"
                                        class="form-control" /></td>
                                <td><button type="button" name="add" id="add-btn" class="btn btn-success">Add
                                        More</button></td>
                            </tr>
                        </table>
                        <button type="submit" class="btn btn-success">Save</button>
                    </form>
                </div>
            </div>
        </div>
        <h1>now itss about old members</h1>
        <div class="one-men-info">
            <h6>{{ $team->team_details[0]['title'] }}</h6>
        </div>

    </div>
@endsection
