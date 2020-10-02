@extends('template.master')

@section('contenido-head')
    <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h2>Editar pais</h2>
            <a href="{!! asset('paises')!!}">Regresar</a>
        </div>
    </div>
    </section>
@endsection()
@section('contenido_central')
<div class="container" style="height: 450px">
    {{-- se usa el metodo patch para que se vaya al metodo update y no al create --}}
    {!! Form::open(['url' => 'paises/'.$pais->id, 'method' => 'patch', 'class'=>'form-horizontal container py-4']) !!}
        {!! Form::label('nombre', 'Nombre del pais', ['class'=>'col-sm-2 col-form-label'] ) !!}
        {!! Form::text('nombre', $pais->nombre, ['placeholder'=>'Ingresa Nombre del pais',
            'class'=>'form-control']) !!}
        <br>
        <br>
        {!! Form::label('clave', 'Clave del pais', ['class'=>'col-sm-2 col-form-label'] ) !!}
        {!! Form::text('clave', $pais->clave, ['placeholder'=>'Ingresa clave del pais',
            'class'=>'form-control']) !!}
        <br>
        <br>
        {!! Form::label('status', 'Nombre del pais', ['class'=>'col-sm-2 col-form-label'] ) !!}
        {!! Form::select('status', array('1'=>'Activo','0'=>'Baja'), $pais->status, ['placeholder'=>'Seleccionar..',
            'class'=>'form-control']) !!}
        <br>
        <br>
        {!! Form::submit('Actualizar Pais', ['class'=>'btn btn-warning'])!!}
    {!! Form::close() !!}
</div>
@endsection()