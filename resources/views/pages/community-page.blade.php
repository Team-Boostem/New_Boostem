
{{-- push title --}}
@push('title')
    <title>User Profile</title>
@endpush

{{-- push styles --}}
@push('styles')
@endpush

{{-- push scripts --}}
@push('scripts')
@endpush

{{-- extend and yield content --}}
@extends('layouts/community-dashboard')
@section('content')
  <div class="main-box">
    hiiiiii
  </div>
@endsection

