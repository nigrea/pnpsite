@extends('app')

@section('content')

    <hr/>

    {!! Form::open(['url' => 'gamesystems']) !!}

        <div class="form-group">

            {!! Form::label('name', 'Name of the System:') !!}

            {!! Form::text('name', null, ['class' => 'form-control']) !!}

        </div>

        <div class="form-group">

            {!! Form::label('description', 'Description:') !!}

            {!! Form::textarea('description', null, ['class' => 'form-control']) !!}

        </div>

        {!! Form::submit('Submit Gamesystem', ['class' => 'btn btn-primary form-control']) !!}

    {!! Form::close() !!}

    @include("errors")


@stop