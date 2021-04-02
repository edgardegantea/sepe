@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div class="container">
        <a class="btn btn-primary float-right" href="{{ route('teams.show', $project->team_id) }}">Regresar</a>
        <a class="btn btn-primary float-right mr-2" href="{{route('projects.edit', $project->id) }}">
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
                    <img src="{{ Storage::url( $project->logo ) }}" class="card-img-top" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">{{ $project->name }}.</h5>
                        <p class="card-text">{{ $project->description }}.</p>

                        <div class="container">
                            <div class="row mt-3">
                                <div class="col-sm">
                                    <div class="p-3 border bg-light">
                                        Semestre: {{ $project->semester }}.
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="p-3 border bg-light">
                                        Asignatura: {{ $project->subject->name }}.
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="p-3 border bg-light">
                                        Status: {{ $project->status }}.
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-sm">
                                    <div class="p-3 border bg-light">
                                        Porcentaje Obtenido: {{ $project->percentage }}
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="p-3 border bg-light">
                                        Nivel de Usabilidad: {{ $project->usabillity }}
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="p-3 border bg-light">
                                        <small class="text-muted">Modulos calificados: 8/10</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a class="btn btn-primary float-right mt-3" href="{{ route('aspectos.create') }}">Calificar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
