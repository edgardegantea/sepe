@extends('layouts.app')
@section('content')
    <div class="card mt-3">
        <div class="card-header d-inline-flex">
            <b><h1>Detalle evaluadores</h1></b>
            <a href="{{ route('evaluators.index')}}" class="btn btn-primary ml-auto">
                <i class="fa fa-arrow-left">volver</i></a>
        </div>
        <div class="card-body">
            <p><b>ID:</b> {{ $evaluator->id}}</p>
            <p><b>Nombre:</b> {{ $evaluator->firstName}} </p>
            <p><b>Apellidos:</b> {{ $evaluator->lastName}} </p>
            <p><b>Correo electrónico institucional:</b> {{ $evaluator->email}}</p>
        </div>
        <div class="card-footer">
            <a class="btn btn-primary" href="{{route('evaluators.edit', $evaluator->id) }}">
                <i class="fa fa-edit"></i>
                Editar
            </a>
        </div>
    </div>
@endsection
