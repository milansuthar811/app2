@extends('layouts.auth-master') @section('content')
<!-- <link   rel="stylesheet" 
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" 
        crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" 
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" 
        crossorigin="anonymous">
</script> -->

<form method="post" action="{{ route('login.perform') }}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <img
        class="mb-4"
        src="{!! url('images/bootstrap-logo.svg') !!}"
        alt=""
        width="72"
        height="57"
    />

    <h1 class="h3 mb-3 fw-normal">Login</h1>

    @include('layouts.partials.messages')

    <div class="form-group form-floating mb-3">
        <input
            type="text"
            class="form-control"
            name="username"
            value="{{ old('username') }}"
            placeholder="Username"
            required="required"
            autofocus
        />
        <label for="floatingName">Email or Username</label>
        @if ($errors->has('username'))
        <span
            class="text-danger text-left"
            >{{ $errors->first('username') }}</span
        >
        @endif
    </div>

    <div class="form-group form-floating mb-3">
        <input
            type="password"
            class="form-control"
            name="password"
            value="{{ old('password') }}"
            placeholder="Password"
            required="required"
        />
        <label for="floatingPassword">Password</label>
        @if ($errors->has('password'))
        <span
            class="text-danger text-left"
            >{{ $errors->first('password') }}</span
        >
        @endif
    </div>

    <div class="col-md-12">
        <button class="w-100 btn btn-md btn-primary mb-2" type="submit">Login</button>
        <a class="w-100 btn btn-md btn-primary  mb-2" href="{{ route('register.show') }}">Register</a>
        <a class="w-100 btn btn-md btn-primary  mb-2" href="{{ route('google.login') }}" >
        <img src="https://img.icons8.com/color/16/000000/google-logo.png" /> Signup Using Google</a>
    </div>

    @include('auth.partials.copy')
</form>
@endsection
