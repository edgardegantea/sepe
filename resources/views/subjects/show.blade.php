@extends('layouts.app')
@section('content')
    <div class="card mt-3">
        <div class="card-header d-inline-flex">
            <b><h1>Detalle de la asignatura</h1></b>
            <a href="{{ route('subjects.index')}}" class="btn btn-primary ml-auto">
                <i class="fa fa-arrow-left">volver</i></a>
        </div>
        <div class="card-body">
            <p><b>ID:</b> {{ $subject->id}}</p>
            <p><b>Nombre:</b> {{ $subject->name}}</p>
        </div>
        <div class="card-footer">
            <a class="btn btn-primary" href="{{route('subjects.edit', $subject->id) }}">
                <i class="fa fa-edit"></i>
                Editar
            </a>
        </div>
    </div>
@endsection
