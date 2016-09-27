<div class="form-group">

    {!! Form::label('name', 'Name of the Game:') !!}

    {!! Form::text('name', null, ['class' => 'form-control']) !!}

</div>

<div class="form-group">
    {!!  Form::file('image') !!}
</div>

<div class="form-group">

    {!! Form::label('website', 'Website:') !!}

    {!! Form::text('website', null, ['class' => 'form-control']) !!}

</div>

<div class="form-group">

    {!! Form::label('description', 'Description:') !!}

    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}

</div>

<div class="form-group">

    {!! Form::label('tags', 'Tags:') !!}

    {!! Form::select('tags[]',$tags, null, ['class' => 'form-control','multiple']) !!}

</div>

<div class="form-group">

    {!! Form::label('gamesystems', 'Gamesystems:') !!}

    {!! Form::select('gamesystems[]',$gamesystems, null, ['class' => 'form-control','multiple']) !!}

</div>

<div class="form-group">

    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}

</div>