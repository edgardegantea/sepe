@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Detalles del estudiante</h1>
@stop

@section('content')
    <div class="card mt-3">
        <div class="card-header d-inline-flex">
            <a href="{{ route('students.index')}}" class="btn btn-primary ml-auto">
                <i class="fa fa-arrow-left">volver</i></a>
        </div>
        <div class="card-body">
            <p><b>ID:</b> {{ $student->id}}</p>
            <p><b>Nombre:</b> {{ $student->firstName}}</p>
            <p><b>Apellidos:</b> {{ $student->lastName}} </p>
            <p><b>Semestre:</b> {{ $student->semester}} </p>
            <p><b>Carrera:</b> {{ $student->engineering}} </p>
            <p><b>Número de control:</b> {{ $student->controlNumber}} </p>
            <p><b>Correo electrónico institutional:</b> {{ $student->email}} </p>
        </div>
        <div class="card-footer">
            <a class="btn btn-primary" href="{{route('students.edit', $student->id) }}">
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
