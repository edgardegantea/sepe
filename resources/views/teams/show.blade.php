@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <a class="float-right mr-2 btn btn-primary" href="{{ route('teams.index') }}">Volver</a>
    <a class="float-right mr-2 btn btn-primary" href="{{ route('projects.create') }}">Crear Proyecto</a>
    <h1>Equipo: {{ $team->name }}</h1>

@stop

@section('content')
    <div class="card">
        <div class="card-header">

            <div class="row">
                <div class="col-4 text-center mt-2"><h4><strong>Proyectos Creados</strong></h4></div>
                <div class="col-8">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                        aria-expanded="false" aria-controls="flush-collapseOne">
                                    Ver integrantes
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                 aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    @foreach($team->users as $user )
                                        <p>{{ $user->name }} {{ $user->lastName }}</p>

                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                @foreach($team->projects as $project)
                    <div class="col">
                        <div class="card" style="width: 18rem;">

                            @if($project->logo)
                                <img src="{{ Storage::url(   $project->logo ) }}" class="card-img-top" alt="...">
                            @else
                                <img src="https://cdn.pixabay.com/photo/2017/02/04/15/25/desk-2037545_960_720.png"
                                     alt="">
                            @endif


                            <div class="card-body">
                                <h5 class="card-title font-weight-bold text-center">{{ $project->name }}</h5>
                                <p class="card-text text-center">{{ $project->description }}</p>
                                <a href="{{ route('projects.show', $project->id) }}"
                                   class="btn btn-outline-primary btn-block">Ver
                                    más</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
            crossorigin="anonymous"></script>

@stop
