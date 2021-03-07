@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Usuarios</h1>
@stop

@section('content')

    @if(session('info'))
        <div class="alert alert-success">
            <strong>
                {{ session('info') }}
            </strong>
        </div>
    @endif



    LIsta de usuarios
    <div class="card">
        <div class="card-header d-inline-flex">
            <a href="{{ route('users.create')}}" class="btn btn-primary ml-auto">
                <i class="fa fa-plus"></i>
                Agregar
            </a>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Correo Institucional</th>
                    <th>N° Control</th>
                    <th colspan="3">Acciones</th>
                </tr>
                </thead>

                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->lastName }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->controlNumber }}</td>
                        <td width="10px">
                            <a class="btn btn-primary btn-sm" href="{{ route('users.show', $user->id) }}">Ver</a>
                        </td>
                        <td width="10px">
                            <a class="btn btn-secondary btn-sm" href="{{ route('users.edit', $user->id) }}">Roles</a>
                        </td>
                        <td width="10px">
                            <form action="{{ route('users.destroy', $user->id ) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
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
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
