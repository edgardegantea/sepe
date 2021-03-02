@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Detalle de equipo</h1>
@stop

@section('content')
    <div class="container">
        <div class="card mt-3">
            <div class="card-header d-inline-flex">
                <a href="{{ route('teams.index')}}" class="btn btn-primary ml-auto">
                    <i class="fa fa-arrow-left">volver</i></a>
            </div>
            <div class="card-body">
                <p><b>ID:</b> {{ $team->id}}</p>
                <p><b>Ingeniería:</b> {{ $team->engineering}} </p>
                <p><b>Semestre:</b> {{ $team->semester}} </p>
            </div>
            <div class="card-footer">
                <a class="btn btn-primary" href="{{route('teams.edit', $team->id) }}">
                    <i class="fa fa-edit"></i>
                    Editar
                </a>
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
