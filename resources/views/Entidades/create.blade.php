<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear pais</title>
</head>
<body>
    <h1>Crear Entidad</h1>
    {!! Form::open(['url'=>'/entidades']) !!}

        {!! Form::label('clave_pais', 'Pais: ') !!}
        {{-- se usa el pluck para el llenado del combo --}}
        {!! Form::select ('clave_pais', $paises->pluck('nombre','clave')->all(), null, ['placeholder'=>'Seleccionar...']) !!}
        <br>
        <br>
        {!! Form::label('nombre', 'Nombre de la entidad') !!}
        {!! Form::text('nombre', null, ['placeholder'=>'Ingresa nombre de Entidad']) !!}
        <br>
        <br>
        {!! Form::label('status', 'Estatus de Entidad') !!}
        {!! Form::select('status', array('1'=>'Activo','0'=>'Baja'), null, ['placeholder'=>'Seleccionar..']) !!}
        <br>
        <br>
        {!! Form::submit('Guardar Entidad')!!}
    {!! Form::close() !!}
</body>
</html>