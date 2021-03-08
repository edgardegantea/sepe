@extends('adminlte::page')

@section('title', 'Proyectos')

@section('content_header')
    <h1>Proyectos</h1>
@stop

@section('content')

    <div class="container">

        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach($projects as $project)
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ Storage::url( $project->logo ) }}" class="card-img-top" alt="...">
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
