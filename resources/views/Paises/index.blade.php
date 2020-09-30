<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ver paises</title>
</head>
<body>
    <h1>Listado de paises</h1>
    <a href="paises/create">Crear un nuevo pais</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Clave</th>
            <th>Estatus</th>
            <th>Acciones</th>
        </tr>
        @foreach ($paises as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->nombre }}</td>
            <td>{{ $item->clave }}</td>
            <td>{{ $item->status }}</td>
            <td>
                <a href="{{'paises/'.$item->id }}">Detalle</a>
                <a href="{{'paises/'.$item->id.'/edit'}}">Editar</a>
                <a href="#">Eliminar</a>
            </td>
        </tr>
        @endforeach
    </table>
    <br>
    <a href="{{asset('index')}}">Regresar al Index</a>
</body>
</html>