@extends('app')

@section('content')

    @foreach($games as $game)

        <h1> <a href="{{ action('GamesController@show',[$game->id]) }}"> {{ $game->name }} </a></h1>

    @endforeach


@stop