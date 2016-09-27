@extends('app')

@section('content')



    <h1>{{ $game->name }}</h1>


    {!! Html::image('img/game/'.$game->id.'.jpg') !!}

    {{ $game->publisher }}
    {{ $game->website }}

    <div class="body">{{ $game->description }}</div>

    <h5> Tags: </h5>
    <ul>
    @foreach($game->tags as $tag)

        <li>{{$tag->name}}</li>

    @endforeach
    </ul>

    <h5> Comments: </h5>

    @if(Auth::check())
        <b>Leave a comment:</b>

        @include("game.commentForm");

    @endif
    <ul>
        @foreach($game->comments as $comment)

            <li>{{$comment->content}}</li>

        @endforeach
    </ul>

    <h5> Gamesystems: </h5>

    <ul>
        @foreach($game->gamesystems as $gamesystem)

            <li>{{$gamesystem->name}}</li>

        @endforeach
    </ul>



@stop