@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Detalles de usuario</h1>
@stop

@section('content')
    <div class="card">

        <div class="card-header">
            <a href="{{ route('users.index')}}" class="btn btn-primary">Volver</a>
        </div>

        <div class="card-body">
            <p><b>ID: </b> {{ $user->id}}</p>
            <p><b>Nombre: </b> {{ $user->name}}</p>
            <p><b>Apellidos: </b> {{ $user->lastName }}</p>
            <p><b>Correo Institucional: </b> {{ $user->email }}</p>
            <p><b>Número de control: </b> {{ $user->controlNumber }}</p>
            <p><b></b></p>
        </div>

        <div class="card-footer">
            <a class="btn btn-primary" href="{{route('users.edit', $user->id) }}">
                <i class="fa fa-edit"></i>
                Editar
            </a>
        </div>

    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
