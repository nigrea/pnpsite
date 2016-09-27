@extends('app')

@section('content')

    <hr/>

    {!! Form::open(['url' => 'auth/register']) !!}

        <div class="form-group">
            Name
            <input type="text" name="name" value="{{ old('name') }}">
        </div>

        <div class="form-group">
            Email
            <input type="email" name="email" value="{{ old('email') }}">
        </div>

        <div class="form-group">
            Password
            <input type="password" name="password">
        </div>

        <div class="form-group">
            Confirm Password
            <input type="password" name="password_confirmation">
        </div>

        <div class="form-group">
            <button type="submit">Register</button>
        </div>

    {!! Form::close() !!}

    @include("errors")


@stop