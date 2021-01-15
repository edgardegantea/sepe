@extends('layouts.app')

@section('content')

    <nav class="nav nav-pills nav-fill">
        <a class="nav-link" href="{{ route('subjects.index')}}">Asignaturas</a>
        <a class="nav-link" href="{{ route('students.index')}}">Estudiantes</a>
        <a class="nav-link" href="{{ route('teams.index')}}">Equipos</a>
        <a class="nav-link" href="{{ route('teachers.index')}}">Docentes</a>
        <a class="nav-link" href="{{ route('evaluators.index')}}">Evaluadores</a>
    </nav>

    <div class="container">
        <div class="card mt-3">

            <!-- DIV PARA BOTÓN CREAR -->
            <div class="card-header d-inline-flex">
                <b><h1>Proyectos</h1></b>
                <a href="{{ route('projects.create')}}" class="btn btn-primary ml-auto">
                    <i class="fa fa-plus"></i>
                    Agregar
                </a>
            </div>

            <div class="table-responsive">
                <table class="table table-striped mt-4">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Semestre</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($projects as $project)
                        <tr>
                            <td>
                                {{ $project->id }}
                            </td>
                            <td>
                                {{ $project->name}}
                            </td>
                            <td>
                            {{ $project->semester}}<!-- created_at-->
                            </td>
                            <td>
                                {{ $project->description}}
                            </td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Acciones">

                                    <form action="{{ route('projects.destroy', $project->id) }}" method="post">

                                        <a href="{{route('projects.show', $project->id)}}" class="btn btn-info btn-sm">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-fill"
                                                 fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                                <path fill-rule="evenodd"
                                                      d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                            </svg>
                                        </a>
                                        <a href="{{route('projects.edit', $project->id)}}"
                                           class="btn btn-primary btn-sm">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16"
                                                 class="bi bi-pencil-square"
                                                 fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                <path fill-rule="evenodd"
                                                      d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                            </svg>
                                        </a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill"
                                                 fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                      d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection
