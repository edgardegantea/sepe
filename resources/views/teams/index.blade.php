@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

    @can('teams.create')
        <a href="{{ route('teams.create')}}" class="btn btn-primary float-right">
            Crear nuevo Equipo
        </a>
    @endcan

    <h1>Equipos</h1>
@stop

@section('content')

    <div class="container">
        <div class="card">

            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>ID equipo</th>
                        <th>Nombre de equipo u Organización</th>
                        <th>Proyectos</th>
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
                                @if( $team->project_count )

                                    {{ $team->project_count }}
                                @else
                                    <p>Ninguno</p>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('teams.show', $team->id) }}" class="btn btn-primary">Ver</a>
                                <a href="{{ route('teams.edit', $team->id) }}" class="btn btn-primary">Editar</a>
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
