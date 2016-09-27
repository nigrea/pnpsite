@extends('app')

@section('content')

    <hr/>

    {!! Form::open(['url' => 'auth/login']) !!}

        <div class="form-group">
            Email
            <input type="email" name="email" value="{{ old('email') }}">
        </div>

        <div class="form-group">
            Password
            <input type="password" name="password" id="password">
        </div>

        <div class="form-group">
            <input type="checkbox" name="remember"> Remember Me
        </div>

        <div class="form-group">
            <button type="submit">Login</button>
        </div>

    {!! Form::close() !!}

    @include("errors")


@stop