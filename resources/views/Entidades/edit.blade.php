@extends('template.master')

@section('contenido-head')
    <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h2>Editar Estados</h2>
            <a href="{!! asset('entidades')!!}">Regresar</a>
        </div>
    </div>
    </section>
@endsection()
@section('contenido_central')
<div class="container" style="height: 450px">
    {{-- se usa el metodo patch para que se vaya al metodo update y no al create --}}
    {!! Form::open(['url'=>'entidades/'.$entidad->id, 'method' => 'patch']) !!}
        <div class="form-group row">
            {!! Form::label('clave_pais', 'Nombre del pais',['class'=>'col-sm-2 col-form-label']) !!}
            {{-- se usa el pluck para el llenado del combo --}}
        {!! Form::select ('clave_pais', $paises->pluck('nombre','clave')->all(), $entidad->clave_pais,
            ['placeholder'=>'Seleccionar..', 'class'=>'form-control']) !!}
        </div>
        <div class="form-group row">
            {!! Form::label('nombre', 'Nombre de la entidad', ['class'=>'col-sm-4 col-form-label']) !!}
            {!! Form::text('nombre', $entidad->nombre, ['placeholder'=>'Ingresa nombre de Entidad',
                'class'=>'form-control']) !!}
        </div><div class="form-group row">
            {!! Form::label('status', 'Estatus de Entidad', ['class'=>'col-sm-2 col-form-label']) !!}
            {!! Form::select('status', array('1'=>'Activo','0'=>'Baja'), $entidad->status,
            ['placeholder'=>'Seleccionar..','class'=>'form-control']) !!}
        </div>
            {!! Form::submit('Actualizar Entidad',['class'=>'btn btn-warning'])!!}
    {!! Form::close() !!}
</div>
@endsection()