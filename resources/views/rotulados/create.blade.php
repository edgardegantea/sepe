@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Criterios del Heurístico "Rotulado"</h2>
        <p>Elementos relacionados con la significación, corrección y familiaridad del rotulado de los contenidos.</p>

        <a href="{{ route('proyectos.index') }}" class="btn btn-primary">Proyectos</a>
        @include('partials.instructions')

    </div>


    <!-- Tabla -->
    <div class="container">
        <!--CABECERA DE LA TABLA-->
        <form method="POST" name="" action="{{ route('rotulados.store') }}">
            @csrf
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
                        RO.1
                        <input type="hidden" name="codigo[]" value="RO.1" maxlength="10">
                    </td>
                    <td>
                        Rótulos significativos.
                        <input type="hidden" name="criterio[]" id=""
                               value="Rótulos significativos.">
                    </td>
                    <td>
                        @include('partials.selectTwo')
                    </td>
                    @include('partials.camposForm')
                </tr>

                <!--Criterio 2-->
                <tr>
                    <td>
                        RO.2
                        <input type="hidden" name="codigo[]" value="RO.2" maxlength="10">
                    </td>
                    <td>
                        Sistema de rotulado controlado y preciso.
                        <input type="hidden" name="criterio[]" id=""
                               value="Sistema de rotulado controlado y preciso.">
                    </td>
                    <td>
                        @include('partials.selectTwo')
                    </td>
                    @include('partials.camposForm')
                </tr>

                <!--Criterio 3-->
                <tr>
                    <td>
                        RO.3
                        <input type="hidden" name="codigo[]" value="RO.3" maxlength="10">
                    </td>
                    <td>
                        Título de las páginas, correcto y planificado.
                        <input type="hidden" name="criterio[]" id=""
                               value="Título de las páginas, correcto y planificado.">
                    </td>
                    <td>
                        @include('partials.selectTwo')
                    </td>
                    @include('partials.camposForm')
                </tr>

                <!--Criterio 4-->
                <tr>
                    <td>
                        RO.4
                        <input type="hidden" name="codigo[]" value="RO.4" maxlength="10">
                    </td>
                    <td>
                        URL página principal correcta, clara y fácil de recordar.
                        <input type="hidden" name="criterio[]" id=""
                               value="URL página principal correcta, clara y fácil de recordar.">
                    </td>
                    <td>
                        @include('partials.selectOne')
                    </td>
                    @include('partials.camposForm')
                </tr>

                <!--Criterio 5-->
                <tr>
                    <td>
                        RO.5
                        <input type="hidden" name="codigo[]" value="RO.5" maxlength="10">
                    </td>
                    <td>
                        URLs de páginas internas claras.
                        <input type="hidden" name="criterio[]" id=""
                               value="URLs de páginas internas claras.">
                    </td>
                    <td>
                        @include('partials.selectTwo')
                    </td>
                    @include('partials.camposForm')
                </tr>

                <!--Criterio 6-->
                <tr>
                    <td>
                        RO.6
                        <input type="hidden" name="codigo[]" value="RO.6" maxlength="10">
                    </td>
                    <td>
                        URLs de páginas internas permanentes.
                        <input type="hidden" name="criterio[]" id=""
                               value="URLs de páginas internas permanentes.">
                    </td>
                    <td>
                        @include('partials.selectTwo')
                    </td>
                    @include('partials.camposForm')
                </tr>

                </tbody>
            </table>
            <input type="submit" class="btn btn-success">
            <a href="{{ route('structures.create') }}" class="btn btn-primary">Siguiente evaluación</a>
            <a href="" class="btn btn-dark">Editar</a>
        </form>
    </div>

@endsection
