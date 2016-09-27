@extends('app')

@section('content')

    <hr/>

    {!! Form::open(['url' => 'tags']) !!}

        <div class="form-group">

            {!! Form::label('name', 'Name of the Tag:') !!}

            {!! Form::text('name', null, ['class' => 'form-control']) !!}

        </div>

        {!! Form::submit('Submit Tag', ['class' => 'btn btn-primary form-control']) !!}

    {!! Form::close() !!}

    @include("errors")


@stop