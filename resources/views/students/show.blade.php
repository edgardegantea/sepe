@extends('layouts.app')
@section('content')
    <div class="card mt-3">
        <div class="card-header d-inline-flex">
            <b><h1>Detalle estudiantes</h1></b>
            <a href="{{ route('students.index')}}" class="btn btn-primary ml-auto">
                <i class="fa fa-arrow-left">volver</i></a>
        </div>
        <div class="card-body">
            <p><b>ID:</b> {{ $student->idStudent}}</p>
            <p><b>Nombre:</b> {{ $student->firstname}}</p>
            <p><b>Apellidos:</b> {{ $student->lastname}} </p>
            <p><b>Semestre:</b> {{ $student->semester}} </p>
            <p><b>Ingeniería:</b> {{ $student->engineering}} </p>
            <p><b>Número de control:</b> {{ $student->controlNumber}} </p>
            <p><b>Correo electrónico institutional:</b> {{ $student->email}} </p>
        </div>
        <div class="card-footer">
            <a class="btn btn-primary" href="{{route('students.edit', $student->idStudent) }}">
                <i class="fa fa-edit"></i>
                Editar
            </a>
        </div>
    </div>
@endsection
