@extends('template.master')

@section('contenido-head')
    <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h2>Detalle Pais</h2>
            <a href="{!! asset('paises')!!}">Regresar</a>
        </div>
    </div>
    </section>
@endsection()
@section('contenido_central')
<div class="container" style="height: 100vh">
    <h2>Nombre: {{ $pais->nombre }}</h2>
    <h2>Clave: {{ $pais->clave }}</h2>
    <h2>Estatus: {{ $pais->status }}</h2>
</div>    
@endsection