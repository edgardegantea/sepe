@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="container">
        <div class="card mt-3">
            <div class="card-header d-inline-flex">
                <a href="{{ route('projects.index')}}" class="btn btn-primary ml-auto">
                    <i class="fa fa-arrow-left">Regresar</i></a>
            </div>

            <div class="card-body">
                <p><b>ID:</b> {{ $project->id}}</p>
                <p><b>Nombre: </b> {{ $project->name}}</p>
                <p><b>Semestre: </b> {{ $project->semester}} </p>
                <p><b>Descripción: </b> {{ $project->description }}</p>
                <p><b>Fecha de registro: </b> {{ $project->created_at}} </p>

            </div>
            <div class="card-footer">
                <a class="btn btn-primary" href="{{route('projects.edit', $project->id) }}">
                    <i class="fa fa-edit"></i>
                    Editar
                </a>
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
