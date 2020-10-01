<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ver Entidades</title>
</head>
<body>
    <h1>Listado de Entidades</h1>
    <a href="entidades/create">Crear un nueva Entidad</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Clave del pais</th>
            <th>Nombre</th>
            <th>Estatus</th>
            <th>Acciones</th>
        </tr>
        @foreach ($entidades as $entidad)
        <tr>
            <td>{{ $entidad->id }}</td>
            <td>{{ $entidad->clave_pais }}</td>
            <td>{{ $entidad->nombre }}</td>
            <td>{{ $entidad->status }}</td>
            <td>
                <a href="{{'entidades/'.$entidad->id }}">Detalle</a>
                <a href="{{'entidades/'.$entidad->id.'/edit'}}">Editar</a>

                {!! Form::open(['method'=>'delete', 'url'=>'entidades/'.$entidad->id ]) !!}
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