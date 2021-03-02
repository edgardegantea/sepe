@extends('adminlte::page')

@section('title', 'Proyectos')

@section('content_header')
    <h1>Proyectos</h1>
@stop

@section('content')

    <div class="card">
        <!-- DIV PARA BOTÓN CREAR -->
        <div class="card-header d-inline-flex">
            <a href="{{ route('projects.create')}}" class="btn btn-primary ml-auto">
                <i class="fa fa-plus"></i>
                Agregar
            </a>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Semestre</th>
                        <th>Carrera</th>
                        <th>Materia</th>
                        <th colspan="3">Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($projects as $project)
                        <tr>
                            <td>
                                {{ $project->id }}
                            </td>
                            <td>
                                {{ $project->name}}
                            </td>
                            <td>
                                {{ $project->description}}
                            </td>
                            <td>
                                {{ $project->semester}}
                            </td>
                            <td>
                                {{ $project->carrera}}
                            </td>
                            <td>
                                {{ $project->materia}}
                            </td>
                            <td width="10px">
                                <a class="btn btn-primary btn-sm" href="{{ route('projects.show', $project->id) }}">Mostrar</a>
                            </td>
                            <td width="10px">
                                <a class="btn btn-secondary btn-sm" href="{{ route('projects.edit', $project->id) }}">Editar</a>
                            </td>
                            <td width="10px">
                                <form action="{{ route('projects.destroy', $project->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
