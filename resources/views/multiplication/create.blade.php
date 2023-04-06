<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Mon calculateur</title>
</head>
<body>

{!! Form::open(['route' => 'multiplication.store']) !!}
{!! Form::hidden('_token', {{ csrf_token() }}, ['class' => 'form-control', 'required', 'maxlength' => 191, 'maxlength' => 191]) !!}


<div class="form-group col-sm-6">
    {!! Form::label('nbre1', 'Nombre1:') !!}
    {!! Form::text('nbre1', null, ['class' => 'form-control', 'required', 'maxlength' => 191, 'maxlength' => 191]) !!}
</div>
<div class="form-group col-sm-6">
    {!! Form::label('nbre2', 'Nombre2:') !!}
    {!! Form::text('nbre2', null, ['class' => 'form-control', 'required', 'maxlength' => 191, 'maxlength' => 191]) !!}
</div>

<div class="card-footer">
	{!! Form::submit('Enregistrer', ['class' => 'btn btn-primary']) !!}
	<a href="{{ route('multiplication.index') }}" class="btn btn-default"> Annuler </a>
</div>

{!! Form::close() !!}
</body>
</html>