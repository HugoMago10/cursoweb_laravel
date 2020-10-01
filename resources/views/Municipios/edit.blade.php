<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Municipios</title>
</head>
<body>
    <h1>Editar Municipio</h1>
    {!! Form::open(['method'=>'PATCH','url'=>'municipios/'.$municipio->id]) !!}
        {!! Form::label('id_entidad', 'Entidad') !!}
        {!! Form::select('id_entidad',$entidades->pluck('nombre','id')->all(), $municipio->id_entidad,
            ['placeholder'=>'Seleccionar...'] ) !!}
        <br>
        <br>
        {!! Form::label('nombre', 'Nombre del municipio') !!}
        {!! Form::text('nombre', $municipio->nombre, ['placeholder'=>'Ingrese nombre del municipio']) !!}
        <br>
        <br>
        {!! Form::label('status', 'Estatus') !!}
        {!! Form::select('status', array('1'=>'Activo','0'=>'Baja'), $municipio->status, ['placeholder'=>'Seleccionar..']) !!}
        <br>
        <br>
        {!! Form::submit('Actualizar Municipio')!!}
    {!! Form::close() !!}
</body>
</html>