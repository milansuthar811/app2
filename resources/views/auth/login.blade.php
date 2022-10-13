@extends('layouts.auth-master') @section('content')

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
