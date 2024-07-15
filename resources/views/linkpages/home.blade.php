@extends('dashboard.dashboard')
@section('content')

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

        <h1>{{ __('You are logged in!') }}</h1>
    </div>
@endsection
