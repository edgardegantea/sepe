@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    @can('users.create')
        <a href="{{ route('users.create')}}" class="btn btn-primary float-right">
            Agregar
        </a>
    @endcan

    <h1>Usuarios</h1>

    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
                    type="button" role="tab" aria-controls="pills-home" aria-selected="true">Todos
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile"
                    type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Docentes
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact"
                    type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Estudiantes
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-sinRol-tab" data-bs-toggle="pill" data-bs-target="#pills-sinRol"
                    type="button" role="tab" aria-controls="pills-sinRol" aria-selected="false">Usuarios sin rol
            </button>
        </li>
    </ul>
@stop

@section('content')

    @if(session('info'))
        <div class="alert alert-success">
            <strong>
                {{ session('info') }}
            </strong>
        </div>
    @endif

    <div class="card">


        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Correo Institucional</th>
                            <th>N° Control</th>
                            <th>Roles asignados</th>
                            <th colspan="2">Acciones</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->lastName }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->controlNumber }}</td>
                                <td>
                                    @foreach($roles as $role)
                                        <p> {{ $role->name }} </p>
                                    @endforeach

                                </td>


                                <td width="10px">
                                    @can('users.edit')
                                        <a class="btn btn-secondary btn-sm"
                                           href="{{ route('users.edit', $user->id) }}">Editar</a>
                                    @endcan
                                </td>
                                <td>
                                    @can('users.destroy')
                                        <form action="{{ route('users.destroy', $user->id ) }}" method="post"
                                              onclick="return confirm('¿Está seguro de que desea elimiar este usuario?')">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                            @endcan
                                        </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Correo Institucional</th>
                            <th>N° Control</th>
                            <th>Roles asignados</th>
                            <th colspan="2">Acciones</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($teachers as $teacher)
                            <tr>
                                <td>{{ $teacher->name }}</td>
                                <td>{{ $teacher->lastName }}</td>
                                <td>{{ $teacher->email }}</td>
                                <td>{{ $teacher->controlNumber }}</td>
                                <td>
                                    @foreach($roles as $role)
                                        <p> {{ $role->name }} </p>
                                    @endforeach

                                </td>


                                <td width="10px">
                                    @can('users.edit')
                                        <a class="btn btn-secondary btn-sm"
                                           href="{{ route('users.edit', $user->id) }}">Editar</a>
                                    @endcan
                                </td>
                                <td>
                                    @can('users.destroy')
                                        <form action="{{ route('users.destroy', $user->id ) }}" method="post"
                                              onclick="return confirm('¿Está seguro de que desea elimiar este usuario?')">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                            @endcan
                                        </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Correo Institucional</th>
                            <th>N° Control</th>
                            <th>Roles asignados</th>
                            <th colspan="2">Acciones</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($students as $student)
                            <tr>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->lastName }}</td>
                                <td>{{ $student->email }}</td>
                                <td>{{ $student->controlNumber }}</td>
                                <td>
                                    @foreach($roles as $role)
                                        <p> {{ $role->name }} </p>
                                    @endforeach

                                </td>


                                <td width="10px">
                                    @can('users.edit')
                                        <a class="btn btn-secondary btn-sm"
                                           href="{{ route('users.edit', $user->id) }}">Editar</a>
                                    @endcan
                                </td>
                                <td>
                                    @can('users.destroy')
                                        <form action="{{ route('users.destroy', $user->id ) }}" method="post"
                                              onclick="return confirm('¿Está seguro de que desea elimiar este usuario?')">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                            @endcan
                                        </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="tab-pane fade" id="pills-sinRol" role="tabpanel" aria-labelledby="pills-sinRol-tab">
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Correo Institucional</th>
                            <th>N° Control</th>
                            <th>Roles asignados</th>
                            <th colspan="2">Acciones</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($sinroles as $sinrol)
                            <tr>
                                <td>{{ $sinrol->name }}</td>
                                <td>{{ $sinrol->lastName }}</td>
                                <td>{{ $sinrol->email }}</td>
                                <td>{{ $sinrol->controlNumber }}</td>
                                <td>
                                    @foreach($roles as $role)
                                        <p> {{ $role->name }} </p>
                                    @endforeach

                                </td>


                                <td width="10px">
                                    @can('users.edit')
                                        <a class="btn btn-secondary btn-sm"
                                           href="{{ route('users.edit', $user->id) }}">Editar</a>
                                    @endcan
                                </td>
                                <td>
                                    @can('users.destroy')
                                        <form action="{{ route('users.destroy', $user->id ) }}" method="post"
                                              onclick="return confirm('¿Está seguro de que desea elimiar este usuario?')">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                            @endcan
                                        </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

@stop

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
            crossorigin="anonymous"></script>

@stop
