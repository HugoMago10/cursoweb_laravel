@extends('template.master')

@section('contenido-head')
    <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h2 class="title">Lista de Estados</h2>
            <a href="{!! asset('cruds')!!}">Regresar</a>
        </div>
    </div>
    </section>
@endsection()
@section('contenido_central')
    <div class="ourstory">
        <div class="container">
            <div class="col-md-10 col-md-offset-1">
                <div class="container p-4" style="display: flex; justify-content: space-between;">
                    <a style="font-weight: bold;" href="entidades/create">Crear un nuevo Estado</a>
                </div>
                <table id="tablaPais" class="display table-striped table-hover table-sm container">
                    <thead class="text-center">
                    <tr>
                        <th>ID</th>
                        <th>Clave del pais</th>
                        <th>Nombre</th>
                        <th>Estatus</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody class="text-center">
                    @foreach ($entidades as $entidad)
                    <tr>
                        <td>{{ $entidad->id }}</td>
                        <td>{{ $entidad->clave_pais }}</td>
                        <td class="text-left">{{ $entidad->nombre }}</td>
                        <td>{{ $entidad->status }}</td>
                        <td>
                            <div style="display: flex; justify-content: space-around;">
                                <a class="text-white" href="{{'entidades/'.$entidad->id }}">
                                    <button class="btn btn-info">Detalle</button>
                                </a>
                                <a class="" href="{{'entidades/'.$entidad->id.'/edit'}}">
                                    <button class="btn btn-warning">Editar</button>
                                </a>
                                {!! Form::open(['method'=>'delete', 'url'=>'entidades/'.$entidad->id ]) !!}
                                    {!! form::submit('Eliminar',['class'=>'btn btn-danger']) !!}
                                {!! Form::close() !!}
                            </div>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                <br>
            </div>
        </div>
    </div>
@endsection()