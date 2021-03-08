@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <a href="{{ route('users.create')}}" class="btn btn-primary float-right">
        Agregar
    </a>
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

    <div class="card">

        <div class="card-body">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Correo Institucional</th>
                    <th>N° Control</th>
                    <th colspan="2">Acciones</th>
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
                            <a class="btn btn-secondary btn-sm" href="{{ route('users.edit', $user->id) }}">Editar</a>
                        </td>
                        <td>
                            <form action="{{ route('users.destroy', $user->id ) }}" method="post"
                                  onclick="return confirm('¿Está seguro de que desea elimiar este usuario?')">
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
