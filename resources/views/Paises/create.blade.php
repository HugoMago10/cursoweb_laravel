@extends('template.master')

@section('contenido-head')
    <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h2>Crear pais</h2>
            <a href="{!! asset('paises')!!}">Regresar</a>
        </div>
    </div>
    </section>
@endsection()
@section('contenido_central')
<div style="height: 450px">
    {!! Form::open(['url'=>'/paises', 'class'=>'form-horizontal container py-4']) !!}
        <div class="form-group row">
            {!! Form::label('nombre', 'Nombre del pais',['class'=>'col-sm-2 col-form-label']) !!}
            {!! Form::text('nombre', null, ['placeholder'=>'Ingresa Nombre del pais',
                'class'=>'form-control']) !!}
        </div>
        <div class="form-group row">
            {!! Form::label('clave', 'Clave del pais', ['class'=>'col-sm-2 col-form-label']) !!}
            {!! Form::text('clave', null, ['placeholder'=>'Ingresa clave del pais',
                'class'=>'form-control']) !!}
        </div><div class="form-group row">
            {!! Form::label('status', 'Nombre del pais', ['class'=>'col-sm-2 col-form-label']) !!}
            {!! Form::select('status', array('1'=>'Activo','0'=>'Baja'), null, ['placeholder'=>'Seleccionar..',
                'class'=>'form-control']) !!}
        </div>
            {!! Form::submit('Guardar Pais',['class'=>'btn btn-success'])!!}
    {!! Form::close() !!}
</div>
@endsection()
