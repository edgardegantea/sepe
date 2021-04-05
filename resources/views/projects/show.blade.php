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
                    <img src="{{ Storage::url( $project->logo ) }}" class="card-img-top border border-1" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">{{ $project->name }}.</h5>
                        <p class="card-text">{{ $project->description }}.</p>

                        <div class="container">

                            <div class="row">
                                <div class="col">
                                    <div class="accordion accordion-flush border border-1" id="accordionFlushExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="flush-headingOne">
                                                <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                                        aria-expanded="false" aria-controls="flush-collapseOne">
                                                    Ver Evaluadores Asignados
                                                </button>
                                            </h2>
                                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                                 aria-labelledby="flush-headingOne"
                                                 data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body">
                                                    @foreach( $project->users as $user )
                                                        <p>{{ $user->name }} {{ $user->lastName }}</p>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row-10 mt-3">

                                <table class="table table-bordered">
                                    <tbody>
                                    <tr>
                                        <td>
                                            <strong>Asignatura:</strong>
                                        </td>
                                        <td>
                                            {{ $project->subject->name }}.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Semestre:</strong>
                                        </td>
                                        <td>
                                            {{ $project->semester }}.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Status:</strong>
                                        </td>
                                        <td>
                                            {{ $project->status }}.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Porcentaje obtenido:</strong>
                                        </td>
                                        <td>
                                            @if($project->percentage)
                                                {{ $project->percentage }}.
                                            @endif
                                            Pendiente.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Nivel de Usabilidad:</strong>
                                        </td>
                                        <td>
                                            @if( $project->usability )
                                                {{ $project->usability }}
                                            @endif
                                            Pendiente.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Modulos calificados:</strong>
                                        </td>
                                        <td>
                                            <small class="text-muted">8/10</small>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <a class="btn btn-primary float-right mt-3" href="{{ route('aspectos.create') }}">Evaluar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
            crossorigin="anonymous"></script>

@stop
