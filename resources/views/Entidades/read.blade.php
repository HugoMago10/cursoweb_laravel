<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalle de Entidad</title>
</head>
<body>
    
    <h1>Detalle de Entidad</h1>
    <h2>Clave de pais: {{ $entidad->clave_pais }}</h2>
    <h2>Nombre: {{ $entidad->nombre }}</h2>
    <h2>Estatus: {{ $entidad->status }}</h2>
    <br>
    <a href='{{ asset ("entidades") }}'>Regresar</a>
</body>
</html>