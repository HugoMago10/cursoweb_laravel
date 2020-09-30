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
    {{-- se usa el metodo patch para que se vaya al metodo update y no al create --}}
    {!! Form::open(['url' => 'paises/'.$pais->id, 'method' => 'patch']) !!}
        {!! Form::label('nombre', 'Nombre del pais') !!}
        {!! Form::text('nombre', $pais->nombre, ['placeholder'=>'Ingresa Nombre del pais']) !!}
        <br>
        <br>
        {!! Form::label('clave', 'Clave del pais') !!}
        {!! Form::text('clave', $pais->clave, ['placeholder'=>'Ingresa clave del pais']) !!}
        <br>
        <br>
        {!! Form::label('status', 'Nombre del pais') !!}
        {!! Form::select('status', array('1'=>'Activo','0'=>'Baja'), $pais->status, ['placeholder'=>'Seleccionar..']) !!}
        <br>
        <br>
        {!! Form::submit('Actualizar Pais')!!}
    {!! Form::close() !!}
</body>
</html>