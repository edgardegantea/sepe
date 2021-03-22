@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

    @can('teams.create')
        <a href="{{ route('teams.create')}}" class="btn btn-primary float-right">
            <i class="fa fa-plus"></i>
            Agregar
        </a>
    @endcan

    <h1>Equipos</h1>
@stop

@section('content')
    <div class="container">
        <div class="card mt-3">

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
                    @foreach($teams as $team)
                        <tr>
                            <td>
                                {{ $team->id }}
                            </td>
                            <td>
                                {{ $team->name }}
                            </td>
                            <td>
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
