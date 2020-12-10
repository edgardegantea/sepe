@extends('layouts.app')
@section('content')
    <div class="card mt-3">
        <div class="card-header d-inline-flex">
            <b><h1>Detalle proyectos</h1></b>
            <a href="{{ route('projects.index')}}" class="btn btn-primary ml-auto">
                <i class="fa fa-arrow-left">volver</i></a>
        </div>
        <div class="card-body">
            <p><b>ID:</b> {{ $project->idProject}}</p>
            <p><b>Nombre:</b> {{ $project->name}}</p>
            <p><b>Fecha de registro:</b> {{ $project->dateRegistration}} </p>
            <p><b>Semestre:</b> {{ $project->semester}} </p>
        </div>
        <div class="card-footer">
            <a class="btn btn-primary" href="{{route('projects.edit', $project->idProject) }}">
                <i class="fa fa-edit"></i>
                Editar
            </a>
        </div>
    </div>
@endsection
