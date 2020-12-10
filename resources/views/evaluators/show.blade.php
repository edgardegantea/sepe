@extends('layouts.app')
@section('content')
    <div class="card mt-3">
        <div class="card-header d-inline-flex">
            <b><h1>Detalle evaluadores</h1></b>
            <a href="{{ route('evaluators.index')}}" class="btn btn-primary ml-auto">
                <i class="fa fa-arrow-left">volver</i></a>
        </div>
        <div class="card-body">
            <p><b>ID:</b> {{ $evaluator->idEvaluator}}</p>
            <p><b>Nombre:</b> {{ $evaluator->firstname}} </p>
            <p><b>Apellidos:</b> {{ $evaluator->lastname}} </p>
            <p><b>Correo electrónico institucional:</b> {{ $evaluator->email}}</p>
            <p><b>ID proyecto:</b> {{ $evaluator->idProject}} </p>
        </div>
        <div class="card-footer">
            <a class="btn btn-primary" href="{{route('evaluators.edit', $evaluator->idEvaluator) }}">
                <i class="fa fa-edit"></i>
                Editar
            </a>
        </div>
    </div>
@endsection
