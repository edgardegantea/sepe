@extends('layouts.app')

@section('content')

    <div class="card mt-3">
        <nav class="nav nav-pills nav-fill">
            <a class="nav-link" href="{{ route('evaluators.index')}}">Evaluadores</a>
            <a class="nav-link" href="{{ route('students.index')}}">Estudiantes</a>
            <a class="nav-link" href="{{ route('teams.index')}}">Equipos</a>
            <a class="nav-link" href="{{ route('teachers.index')}}">Docentes</a>
            <a class="nav-link" href="{{ route('projects.index')}}">Proyectos</a>
        </nav>

        <!-- DIV PARA BOTÓN CREAR -->
        <div class="card-header d-inline-flex">
            <b><h1>Asignaturas</h1></b>
            <a href="{{ route('subjects.create')}}" class="btn btn-primary ml-auto">
                <i class="fa fa-plus"></i>
                Agregar
            </a>
        </div>

        <div class="card-body">
            <div class=row>
                <div class="col-4">
                    <div class="form-group m-0">
                        <label>
                            Listar:
                        </label>

                        <!-- Limitar tamaño de consulta en la tabla -->
                        <select class="form-control" id="limit" name="limit">
                            @foreach ([10,20,50,100] as $limit)
                                <option value="{{$limit}}" @if (isset($_GET['limit']))
                                    {{($_GET['limit']==$limit)?'selected':''}} @endif>{{$limit}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-8">
                    <div class="form-group">
                        <label>
                            Buscar:
                        </label>
                        <input class="form-control" id="search" name="search" type="text"
                               value="{{(isset($_GET['search']))?$_GET['search']:''}}">
                    </div>
                </div>
            </div>

            @if($subjects->total() > 10)
                {{$subjects->links()}}
            @endif
        </div>

        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Docente asignado</th>
                </tr>
                </thead>
                <tbody>
                @foreach($subjects as $subject)
                    <tr>
                        <td>
                            {{ $subject->id }}
                        </td>
                        <td>
                            {{ $subject->name}}
                        </td>
                        <td>
                            {{ $subject->teacher}}
                        </td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Acciones">
                                <a href="{{route('subjects.show', $subject->id)}}" class="btn btn-info btn-sm">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-fill"
                                         fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                        <path fill-rule="evenodd"
                                              d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                    </svg>
                                </a>
                                <a href="{{route('subjects.edit', $subject->id)}}"
                                   class="btn btn-primary btn-sm">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square"
                                         fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                        <path fill-rule="evenodd"
                                              d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                    </svg>
                                </a>
                                <button type="submit" class="btn btn-danger btn-sm"
                                        form="delete_{{$subject->id}}"
                                        onclick="return confirm('¿Estas seguro que deseas eliminar el item?')">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill"
                                         fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                              d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
                                    </svg>
                                </button>
                                <form action="{{route('subjects.destroy', $subject->id)}}"
                                      id="delete_{{$subject->id}}"
                                      method="post" enctype="multipart/form-data" hidden>
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </div>

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
        <div class="card-footer">
            @if($subjects->total() > 10)
                {{$subjects->links()}}
            @endif
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript">
        $('#limit').on('change', function () {
            window.location.href = '{{ route( "subjects.index" ) }}?limit=' + $(this).val() + '&search=' + $('#search').val()
        })

        $('#search').on('keyup', function (e) {
            if (e.keyCode == 13) {
                window.location.href = '{{ route("subjects.index") }}?limit=' + $('#limit').val() + '&search=' + $(this).val()
            }
        })
    </script>
@endsection
