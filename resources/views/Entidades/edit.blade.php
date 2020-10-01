<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Entidad</title>
</head>
<body>
    <h1>Editar Entidad</h1>
    {{-- se usa el metodo patch para que se vaya al metodo update y no al create --}}
    {!! Form::open(['url'=>'entidades/'.$entidad->id, 'method' => 'patch']) !!}
        {!! Form::label('clave_pais', 'Pais') !!}
        {!! Form::select ('clave_pais', $paises->pluck('nombre','clave')->all(), $entidad->clave_pais, ['placeholder'=>'Seleccionar...']) !!}
        <br>
        <br>
        {!! Form::label('nombre', 'Nombre de entidad') !!}
        {!! Form::text('nombre', $entidad->nombre, ['placeholder'=>'Ingresa nombre de la entidad']) !!}
        <br>
        <br>
        {!! Form::label('status', 'Estatus de entidad') !!}
        {!! Form::select('status', array('1'=>'Activo','0'=>'Baja'), $entidad->status, ['placeholder'=>'Seleccionar..']) !!}
        <br>
        <br>
        {!! Form::submit('Actualizar Entidad')!!}
    {!! Form::close() !!}
</body>
</html>