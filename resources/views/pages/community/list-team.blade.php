{{-- push title --}}
@push('title')
    <title>List Team | Boostem</title>
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
    list
   </div>
@endsection