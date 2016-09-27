@extends('app')

@section('content')

    <hr/>

    {!! Form::open(['url' => 'games', 'files' => true]) !!}

        @include("game.form",["submitButtonText" => 'Add '])


    {!! Form::close() !!}

    @include("errors")


@stop