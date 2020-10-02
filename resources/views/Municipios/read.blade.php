@extends('template.master')

@section('contenido-head')
    <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h2>Detalle de Municipio</h2>
            <a href="{!! asset('municipios')!!}">Regresar</a>
        </div>
    </div>
    </section>
@endsection()
@section('contenido_central')
<div class="container" style="height: 100vh">
    <h2>Id Entidad: {{ $municipio->id_entidad }}</h2>
    <h2>Nombre de la entidad: {{ $municipio->entidades->nombre }}</h2>
    <h2>Nombre del municipio: {{ $municipio->nombre }}</h2>
    <h2>Estatus: {{ $municipio->status }}</h2>
    <br>
</div>    
@endsection