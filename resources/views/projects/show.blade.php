@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div class="container">
        <a class="btn btn-primary float-right" href="{{route('projects.edit', $project->id) }}">
            <i class="fa fa-edit"></i>
            Editar
        </a>
        <h1>Detalles</h1>
    </div>

@stop

@section('content')
    <div class="container">

        <div class="card mb-3" style="max-width: 100%;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ 'img/sepe.jpeg' }}" class="card-img-top" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">{{ $project->name }}</h5>
                        <p class="card-text">{{ $project->description }}</p>
                        <p class="card-text">Semestre del proyecto: {{ $project->semester }}</p>
                        <p class="card-text">Asignatura: {{ $project->subject->name }}</p>
                        <p class="card-text"><small class="text-muted">Modulos calificados: 8/10</small></p>
                        <a class="btn btn-primary float-right" href="{{ route('aspectos.create') }}">Calificar</a>
                    </div>
                </div>
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
