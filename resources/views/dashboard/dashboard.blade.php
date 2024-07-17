@extends('dashboard.layout')

@section('content')
    @if(auth()->user()->profile_update == 1)
      <h1>Update Profile Successfully</h1>
    @endif
    <div class="content-area">
        <div class="container mt-5">
            @yield('content')
        </div>
    </div>
@endsection
