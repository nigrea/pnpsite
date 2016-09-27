@extends('app')

@section('content')

    @foreach($gamesystems as $gamesystem)

        <h1> <a href="{{ action('GamesystemsController@show',[$gamesystem->id]) }}"> {{ $gamesystem->name }} </a></h1>

    @endforeach


@stop