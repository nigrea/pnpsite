@extends('app')

@section('content')



    <h1>{{ $tag->name }}</h1>

    <ul>
        @foreach($tag->games as $game)

            <li>{{$game->name}}</li>

        @endforeach
    </ul>



@stop