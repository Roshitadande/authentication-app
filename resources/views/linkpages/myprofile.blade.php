@extends('dashboard.dashboard')
@section('content')

<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Profile</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('profile.update', Auth::user()->id) }}">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="name">Name</label>
                                <input id="name" type="text" class="form-control" name="name" value="{{ Auth::user()->name }}" required autocomplete="name" autofocus>
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input id="email" type="email" class="form-control" name="email" value="{{ Auth::user()->email }}" required autocomplete="email">

                            <div class="form-group">
                                <label for="phoneno">Phone No</label>
                                <input id="phoneno" type="tel" class="form-control" name="phoneno" value="{{ Auth::user()->phoneno }}" required>
                            </div>
                            <div class="form-group">
                                <label for="state">State</label>
                                <input id="state" type="text" class="form-control" name="state" value="{{ Auth::user()->state }}" required>
                            </div>
                            <div class="form-group">
                                <label for="city">City</label>
                                <input id="city" type="text" class="form-control" name="city" value="{{ Auth::user()->city }}" required>
                            </div>
                            <div class="form-group">
                                <label for="image">Profile Image</label>
                                <input id="image" type="file" class="form-control" name="image" value="{{ Auth::user()->image }}" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Update Profile</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
