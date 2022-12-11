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
    <table class="table">
        <thead>
          <tr>
            <th scope="col">sno.</th>
            <th scope="col">name</th>
            <th scope="col">email</th>
            <th scope="col">action</th>
          </tr>
        </thead>
        <tbody>
            @for ($i = 0; $i < count($team->team_details); $i++)
            <tr>
                <th scope="row">{{ $i +1 }}</th>
                <td>{{ $team->team_details[$i]['title'] }}</td>
                <td>{{ $team->team_details[$i]['email'] }}</td>
                <td>btn</td>
              </tr>
        @endfor
        </tbody>
      </table>
      <a href="{{ route('create.team.community',$team->community_id) }}" >Add member</a>
    

  
   </div>
@endsection