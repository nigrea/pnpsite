{!! Form::open( array('action' => 'CommentsController@store')) !!}

    {!! Form::hidden('game_id', $game->id) !!}

    <div class="form-group">

        {!! Form::label('content', 'Comment:') !!}

        {!! Form::textarea('content', null, ['class' => 'form-control']) !!}

    </div>

    <div class="form-group">

        {!! Form::submit('Submit', ['class' => 'btn btn-primary form-control']) !!}

    </div>

{!! Form::close() !!}