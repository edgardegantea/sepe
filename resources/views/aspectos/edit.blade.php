@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="container">
        <h1>Editar Evaluación</h1>
        <h2>Criterios del Heurístico "Aspectos Generales"</h2>
        <p>Elementos relacionados con los objetos del sitio, el look & feel, coherencia y nivel de actualización de
            contenidos.</p>

        <a href="{{ route('proyectos.index') }}" class="btn btn-primary">Proyectos</a>
        @include('partials.instructions')

    </div>

    <!-- Tabla -->
    <div class="container">
        <!--CABECERA DE LA TABLA-->
        <form method="POST" name="" action="{{ route('aspectos.update'. $aspecto->id) }}">
            @csrf
            @method('PUT')
            <table class="table">
                <thead>
                <tr>
                    <th>Código</th>
                    <th>Criterio</th>
                    <th>Valor</th>
                    <th>Relevancia</th>
                    <th>Comentario</th>
                </tr>
                </thead>
                <tbody>

                <!--Criterio 1-->
                <tr>
                    <td>
                        {{ $aspecto->codigo }}
                        <input type="hidden" name="codigo[]" value="{{ $aspecto->codigo }}" maxlength="10">
                    </td>
                    <td>
                        {{ $aspecto->criterio }}
                        <input type="hidden" name="criterio[]" id=""
                               value="{{ $aspecto->criterio }}">
                    </td>
                    <td>
                        <select name="valor[]" id="" required>
                            <option value="{{ $aspecto->valor }}">{{ $aspecto->valor }}</option>
                            @for($i = 0; $i<=10;$i++)
                                <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                            <option value="NA">NA</option>
                        </select>

                    </td>
                    <td>
                        <input type="text" name="relevancia[]" value="{{ $aspecto->relevancia }}" id="" required
                               maxlength="200">
                    </td>
                    <td>
                        <textarea name="comentario[]" id="" cols="30" rows="1">{{ $aspecto->comentario }}</textarea>
                    </td>
                </tr>
                </tbody>
            </table>
            <input type="submit" class="btn btn-success">
            <a href="" class="btn btn-dark">Editar</a>
        </form>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
