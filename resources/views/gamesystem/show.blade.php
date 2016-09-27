@extends('app')

@section('content')



    <h1>{{ $gamesystem->name }}</h1>

    {{ $gamesystem->description }}

    <ul>
        @foreach($gamesystem->games as $game)

            <li>{{$game->name}}</li>

        @endforeach
    </ul>



@stop