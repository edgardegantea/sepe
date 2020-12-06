@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Criterios del "Búsqueda"</h2>
        <p>Elementos relacionados con el buscador implementado en el sitio web.</p>

        <a href="{{ route('proyectos.index') }}" class="btn btn-primary">Proyectos</a>

        @include('partials.instructions')

    </div>

    <!-- Tabla -->
    <div class="container">
        <!--CABECERA DE LA TABLA-->
        <form method="POST" name="" action="{{ route('searchs.store') }}">
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
                        BU.1
                        <input type="hidden" name="codigo[]" value="BU.1" maxlength="10">
                    </td>
                    <td>
                        La búsqueda, si es necesaria, se encuentra accesible desde todas las páginas del sitio.
                        <input type="hidden" name="criterio[]" id=""
                               value="La búsqueda, si  es necesaria, se encuentra accesible desde todas las páginas del sitio.">
                    </td>
                    <td>
                        @include('partials.selectTwo')
                    </td>
                    @include('partials.camposForm')
                </tr>

                <!--Criterio 2-->
                <tr>
                    <td>
                        BU.2
                        <input type="hidden" name="codigo[]" value="BU.2" maxlength="10">
                    </td>
                    <td>
                        Es fácilmente reconocible como tal.
                        <input type="hidden" name="criterio[]" id=""
                               value="Es fácilmente reconocible como tal.">
                    </td>
                    <td>
                        @include('partials.selectOne')
                    </td>
                    @include('partials.camposForm')
                </tr>

                <!--Criterio 3-->
                <tr>
                    <td>
                        BU.3
                        <input type="hidden" name="codigo[]" value="BU.3" maxlength="10">
                    </td>
                    <td>
                        Se encuentra fácilmente accesible.
                        <input type="hidden" name="criterio[]" id=""
                               value="Se encuentra fácilmente accesible.">
                    </td>
                    <td>
                        @include('partials.selectOne')
                    </td>
                    @include('partials.camposForm')
                </tr>

                <!--Criterio 4-->
                <tr>
                    <td>
                        BU.4
                        <input type="hidden" name="codigo[]" value="BU.4" maxlength="10">
                    </td>
                    <td>
                        La caja de texto es lo suficientemente ancha.
                        <input type="hidden" name="criterio[]" id=""
                               value="La caja de texto es lo suficientemente ancha.">
                    </td>
                    <td>
                        @include('partials.selectOne')
                    </td>
                    @include('partials.camposForm')
                </tr>

                <!--Criterio 5-->
                <tr>
                    <td>
                        BU.5
                        <input type="hidden" name="codigo[]" value="BU.5" maxlength="10">
                    </td>
                    <td>
                        Sistema de búsqueda simple y claro.
                        <input type="hidden" name="criterio[]" id=""
                               value="Sistema de búsqueda simple y claro.">
                    </td>
                    <td>
                        @include('partials.selectOne')
                    </td>
                    @include('partials.camposForm')
                </tr>

                <!--Criterio 6-->
                <tr>
                    <td>
                        BU.6
                        <input type="hidden" name="codigo[]" value="BU.6" maxlength="10">
                    </td>
                    <td>
                        Permite la búsqueda avanzada.
                        <input type="hidden" name="criterio[]" id=""
                               value="Permite la búsqueda avanzada.">
                    </td>
                    <td>
                        @include('partials.selectOne')
                    </td>
                    @include('partials.camposForm')
                </tr>

                <!--Criterio 7-->
                <tr>
                    <td>
                        BU.7
                        <input type="hidden" name="codigo[]" value="BU.7" maxlength="10">
                    </td>
                    <td>
                        Muestra los resultados de la búsqueda de forma comprensible para el usuario.
                        <input type="hidden" name="criterio[]" id=""
                               value="Muestra los resultados de la búsqueda de forma comprensible para el usuario.">
                    </td>
                    <td>
                        @include('partials.selectOne')
                    </td>
                    @include('partials.camposForm')
                </tr>

                <!--Criterio 8-->
                <tr>
                    <td>
                        BU.8
                        <input type="hidden" name="codigo[]" value="BU.8" maxlength="10">
                    </td>
                    <td>
                        Asiste al usuario en caso de no poder ofrecer resultados para una consulta dada.
                        <input type="hidden" name="criterio[]" id=""
                               value="Asiste al usuario en caso de no poder ofrecer resultados para una consulta dada.">
                    </td>
                    <td>
                        @include('partials.selectOne')
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
