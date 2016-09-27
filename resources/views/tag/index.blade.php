@extends('app')

@section('content')

    @foreach($tags as $tag)

        <h1> <a href="{{ action('TagsController@show',[$tag->id]) }}"> {{ $tag->name }} </a></h1>

    @endforeach


@stop