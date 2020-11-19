@extends('layouts.app')

@section('content')
    <h2>Criterios de evaluacion Heurística</h2>
    <h3>Aspectos Generales</h3>

    <div>
        <a href="{{ route('aspectos.create') }}">Hacer nueva evaluación</a>
    </div>

    <div>
        @if($aspectos -> isEmpty())
            <div><h3>No hay evaluaciones registradas</h3></div>
        @else
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
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

@endsection
