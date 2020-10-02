@extends('template.master')

@section('contenido-head')
    <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h2>Detalle Entidad</h2>
            <a href="{!! asset('entidades')!!}">Regresar</a>
        </div>
    </div>
    </section>
@endsection()
@section('contenido_central')
<div class="container" style="height: 100vh">
    <h2>Clave de pais: {{ $entidad->clave_pais }}</h2>
    <h2>Nombre: {{ $entidad->nombre }}</h2>
    <h2>Estatus: {{ $entidad->status }}</h2>
</div>    
@endsection