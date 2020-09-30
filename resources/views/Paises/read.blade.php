<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalle de Pais</title>
</head>
<body>
    
    <h1>Detalle de pais</h1>
    <h2>Nombre: {{ $pais->nombre }}</h2>
    <h2>Clave: {{ $pais->clave }}</h2>
    <h2>Estatus: {{ $pais->status }}</h2>
    <br>
    <a href='{{ asset ("paises") }}'>Regresar</a>
</body>
</html>