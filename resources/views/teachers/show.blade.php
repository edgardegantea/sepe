@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Detalles del docente</h1>
@stop

@section('content')
    <div class="card mt-3">
        <div class="card-header d-inline-flex">
            <a href="{{ route('teachers.index')}}" class="btn btn-primary ml-auto">
                <i class="fa fa-arrow-left">Volver</i></a>
        </div>
        <div class="card-body">
            <p><b>ID:</b> {{ $teacher->id}}</p>
            <p><b>Nombre:</b> {{ $teacher->firstName}} </p>
            <p><b>Apellidos:</b> {{ $teacher->lastName}} </p>
            <p><b>Número de control:</b> {{ $teacher->controlNumber}}</p>
            <p><b>Correo electrónico institucional:</b> {{ $teacher->email}} </p>
        </div>
        <div class="card-footer">
            <a class="btn btn-primary" href="{{route('teachers.edit', $teacher->id) }}">
                <i class="fa fa-edit"></i>
                Editar
            </a>
        </div>
    </div>@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
