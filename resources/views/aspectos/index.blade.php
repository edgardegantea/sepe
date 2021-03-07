@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Criterios de evaluacion Heurística - Aspectos Generales</h1>
@stop

@section('content')
    <div class="card">

        <div class="card-header">
            <a href="{{ route('aspectos.create') }}">Hacer nueva evaluación</a>
        </div>

        <div class="card-body">

        </div>

        <div>
            @if($aspectos -> isEmpty())
                <div><h3>No hay evaluaciones registradas</h3></div>
            @else
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Valor</th>
                        <th scope="col">Relevancia</th>
                        <th scope="col">Comentarios</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($aspectos as $aspecto)
                        <tr>
                            <th scope="row">{{ $aspecto -> id }}</th>
                            <td>{{ $aspecto -> valor }}</td>
                            <td>{{ $aspecto -> relevancia }}</td>
                            <td>{{ $aspecto -> comentario }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif

        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
