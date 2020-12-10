@extends('layouts.app')
@section('content')
    <div class="card mt-3">
        <div class="card-header d-inline-flex">
            <b><h1>Detalle equipos</h1></b>
            <a href="{{ route('teams.index')}}" class="btn btn-primary ml-auto">
                <i class="fa fa-arrow-left">volver</i></a>
        </div>
        <div class="card-body">
            <p><b>ID:</b> {{ $team->idTeam}}</p>
            <p><b>Ingeniería:</b> {{ $team->engineering}} </p>
            <p><b>Semestre:</b> {{ $team->semester}} </p>
            <p><b>ID proyecto:</b> {{ $team->idProject}}</p>
            <p><b>ID estudiante:</b> {{ $team->idStudent}} </p>
            <p><b>ID evaludor:</b> {{ $team->idEvaluator}} </p>
        </div>
        <div class="card-footer">
            <a class="btn btn-primary" href="{{route('teams.edit', $team->idTeam) }}">
                <i class="fa fa-edit"></i>
                Editar
            </a>
        </div>
    </div>
@endsection
