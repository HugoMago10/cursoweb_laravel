<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear pais</title>
</head>
<body>
    <h1>Crear pais</h1>
    {!! Form::open(['url'=>'/paises']) !!}
        {!! Form::label('nombre', 'Nombre del pais') !!}
        {!! Form::text('nombre', null, ['placeholder'=>'Ingresa Nombre del pais']) !!}
        <br>
        <br>
        {!! Form::label('clave', 'Clave del pais') !!}
        {!! Form::text('clave', null, ['placeholder'=>'Ingresa clave del pais']) !!}
        <br>
        <br>
        {!! Form::label('status', 'Nombre del pais') !!}
        {!! Form::select('status', array('1'=>'Activo','0'=>'Baja'), null, ['placeholder'=>'Seleccionar..']) !!}
        <br>
        <br>
        {!! Form::submit('Guardar Pais')!!}
    {!! Form::close() !!}
</body>
</html>