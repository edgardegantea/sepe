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
            <!-- DIV PARA BOTÓN CREAR -->
            <div class="card-header d-inline-flex">

            </div>

            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>ID equipo</th>
                        <th>Ingeniería</th>
                        <th>Semestre</th>
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
                                {{ $team->engineering }}
                            </td>
                            <td>
                                {{ $team->semester }}
                            </td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Acciones">

                                    @can('teams.edit')
                                        <a href="{{route('teams.edit', $team->id)}}" class="btn btn-primary btn-sm">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16"
                                                 class="bi bi-pencil-square"
                                                 fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                <path fill-rule="evenodd"
                                                      d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                            </svg>
                                        </a>
                                    @endcan

                                    @can('teams.destroy')
                                        <button type="submit" class="btn btn-danger btn-sm" form="delete_{{$team->id}}"
                                                onclick="return confirm('¿Estas seguro que deseas eliminar el item?')">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill"
                                                 fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                      d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
                                            </svg>
                                        </button>
                                        <form action="{{route('teams.destroy', $team->id)}}"
                                              id="delete_{{$team->id}}"
                                              method="post" enctype="multipart/form-data" hidden>
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    @endcan
                                </div>


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
