{{-- push title --}}
@push('title')
    <title>Event | Boostem</title>
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
        <h2>{{ $event->title }}</h2>
        <p>{!! $event->description !!}</p>
        <div>
            @foreach ($que as $line)
                @foreach ($line as $v)
                    <input type="text" placeholder="{{ $v }}">
                @endforeach
            @endforeach
        </div>
    </div>
@endsection