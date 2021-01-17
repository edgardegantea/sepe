@extends('layouts.app')
@section('content')
    <div class="card mt-3">
        <div class="card-header d-inline-flex">
            <b><h1>Detalle docentes</h1></b>
            <a href="{{ route('teachers.index')}}" class="btn btn-primary ml-auto">
                <i class="fa fa-arrow-left">volver</i></a>
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
    </div>
@endsection
