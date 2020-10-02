@extends('template.master')

@section('contenido-head')
    <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h2>Crear Municipios</h2>
            <a href="{!! asset('municipios')!!}">Regresar</a>
        </div>
    </div>
    </section>
@endsection()
@section('contenido_central')
<div style="height: 450px">
    {!! Form::open(['url'=>'/municipios', 'class'=>'form-horizontal container py-4']) !!}
        <div class="form-group row">
            {!! Form::label('id_entidad', 'Entidad',['class'=>'col-sm-2 col-form-label']) !!}
            {{-- se usa el pluck para el llenado del combo --}}
        {!! Form::select ('id_entidad', $entidades->pluck('nombre','id')->all(), null, ['placeholder'=>'Seleccionar..',
                'class'=>'form-control']) !!}
        </div>
        <div class="form-group row">
            {!! Form::label('nombre', 'Nombre del Municipio', ['class'=>'col-sm-4 col-form-label']) !!}
            {!! Form::text('nombre', null, ['placeholder'=>'Ingresa nombre del Municipio',
                'class'=>'form-control']) !!}
        </div><div class="form-group row">
            {!! Form::label('status', 'Estatus del Municipio', ['class'=>'col-sm-2 col-form-label']) !!}
            {!! Form::select('status', array('1'=>'Activo','0'=>'Baja'), null, ['placeholder'=>'Seleccionar..',
                'class'=>'form-control']) !!}
        </div>
            {!! Form::submit('Guardar Municipio',['class'=>'btn btn-success'])!!}
    {!! Form::close() !!}
</div>
@endsection()