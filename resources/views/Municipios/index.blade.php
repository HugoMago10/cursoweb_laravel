<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ver municipio</title>
</head>
<body>
    <h1>Listado de Municipios</h1>
    <a href="municipios/create">Crear un nuevo Municipio</a>
    <table>
        <tr>
            <th>ID</th>
            <th>ID Entidad</th>
            <th>Entidad</th>
            <th>Nombre</th>
            <th>Estatus</th>
            <th>Acciones</th>
        </tr>
        @foreach ($municipios as $municipio)
        <tr>
            <td>{{ $municipio->id }}</td>
            <td>{{ $municipio->id_entidad }}</td>
            <td>{{ $municipio->entidades->nombre }}</td>
            <td>{{ $municipio->nombre }}</td>
            <td>{{ $municipio->status }}</td>
            <td>
                <a href="{{'municipios/'.$municipio->id }}">Detalle</a>
                <a href="{{'municipios/'.$municipio->id.'/edit'}}">Editar</a>

                {!! Form::open(['method'=>'delete', 'url'=>'municipios/'.$municipio->id ]) !!}
                    {!! form::submit('Eliminar') !!}
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
    </table>
    <br>
    <a href="{{('/')}}">Regresar al Index</a>
</body>
</html>