<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalle de Municipio</title>
</head>
<body>
    
    <h1>Detalle de Municipio</h1>
    <h2>Id Entidad: {{ $municipio->id_entidad }}</h2>
    <h2>Nombre de la entidad: {{ $municipio->entidades->nombre }}</h2>
    <h2>Nombre del municipio: {{ $municipio->nombre }}</h2>
    <h2>Estatus: {{ $municipio->status }}</h2>
    <br>
    <a href='{{ asset ("municipios") }}'>Regresar</a>
</body>
</html>