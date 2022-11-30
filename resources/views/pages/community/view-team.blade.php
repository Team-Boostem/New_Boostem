{{-- push title --}}
@push('title')
    <title>User Profile</title>
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
    view team

    @for ($i = 0; $i < count($team->team_details); $i++)
        <p>{{ $team->team_details[$i]['title'] }}</p>
        <p>{{ $team->team_details[$i]['email'] }}</p>
    @endfor

  
   </div>
@endsection