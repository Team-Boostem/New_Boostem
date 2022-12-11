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
            @if($access == true)
            <th scope="col">action</th>
            @endif
          </tr>
        </thead>
        @if($team)
        <tbody>
            @for ($i = 0; $i < count($team->team_details); $i++)
            <tr>
                <th scope="row">{{ $i +1 }}</th>
                <td>{{ $team->team_details[$i]['title'] }}</td>
                <td>{{ $team->team_details[$i]['email'] }}</td>
                @if($access == true)
                <td scope="col">
                    <button class="btn btn-primary"><a style="color:white !important;" href="">edit</a></button>
                    <button class="btn btn-danger"><a style="color:white !important;" href="">delete</a></button>
                </td>
                @endif
              </tr>
        @endfor
        </tbody>
        @endif
        
      </table>
        @if($access == true)
        <button class="btn btn-success">
      <a style="color:white !important;" href="{{ route('create.team.community',last(request()->segments())) }}" >Add member</a>
    </button>
      @endif

  
   </div>
@endsection