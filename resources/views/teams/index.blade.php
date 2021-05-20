@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

    @can('teams.create')
        <a href="{{ route('teams.create')}}" class="btn btn-primary float-right">
            <i class="fa fa-plus"></i>
            Nuevo Equipo
        </a>
    @endcan

    <h1>Equipos</h1>
@stop

@section('content')
    <div class="card">

        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>ID equipo</th>
                    <th>Nombre de equipo u Organización</th>
                    <th>N° Proyectos</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($user->teams as $team)
                    <tr>
                        <td>
                            {{ $team->id }}
                        </td>
                        <td>
                            {{ $team->name }}
                        </td>
                        <td>
                            @if( $team->projects )
                                {{ $team->projects->count() }}
                            @else
                                <p>Ninguno</p>
                            @endif

                        </td>
                        <td>
                            <a href="{{ route('teams.show', $team->id) }}" class="btn btn-success">Ver</a>
                            <a href="{{ route('teams.edit', $team->id) }}" class="btn btn-info">Editar</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
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
