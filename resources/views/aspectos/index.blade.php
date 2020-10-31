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
                    <th scope="col">Valor interno(vc)</th>
                    <th scope="col">Valor interno de relevancia(rc)</th>
                    <th scope="col">Factor de corrección(fc)</th>
                    <th scope="col">Valor parcial</th>
                    <th scope="col">Valor parcial 2</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($aspectos as $aspecto)
                    <tr>
                        <th scope="row">{{ $aspecto -> id }}</th>
                        <td>{{ $aspecto -> valor }}</td>
                        <td>{{ $aspecto -> relevancia }}</td>
                        <td>{{ $aspecto -> comentario }}</td>
                        <td>{{ $aspecto -> valor_interno }}</td>
                        <td>{{ $aspecto -> valor_interno_relevancia }}</td>
                        <td>{{ $aspecto -> factor_correcion }}</td>
                        <td>{{ $aspecto -> valor_parcial }}</td>
                        <td>{{ $aspecto -> valor_parcial2 }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif

    </div>

@endsection
