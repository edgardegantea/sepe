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
            <h4 style="text-align: center">Proyectos Creados</h4>
        </div>
        <div class="card-body">

            @foreach($team->projects as $project)
                <div class="col">
                    <div class="card" style="width: 18rem;">

                        @if($project->logo)
                            <img src="{{ Storage::url(   $project->logo ) }}" class="card-img-top" alt="...">
                        @else
                            <img src="https://cdn.pixabay.com/photo/2017/02/04/15/25/desk-2037545_960_720.png" alt="">
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

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
