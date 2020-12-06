@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Criterios del "Estructura y Navegación"</h2>
        <p>Elementos relacionados con la idoneidad de la arquitectura de la información y la navegación del sitio.</p>

        <a href="{{ route('proyectos.index') }}" class="btn btn-primary">Proyectos</a>

        @include('partials.instructions')

    </div>

    <!-- Tabla -->
    <div class="container">
        <!--CABECERA DE LA TABLA-->
        <form method="POST" name="" action="{{ route('structures.store') }}">
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
                        EN.1
                        <input type="hidden" name="codigo[]" value="EN.1" maxlength="10">
                    </td>
                    <td>
                        Se ha evitado pantalla de bienvenida.
                        <input type="hidden" name="criterio[]" id=""
                               value="Se ha evitado pantalla de bienvenida.">
                    </td>
                    <td>
                        @include('partials.selectTwo')
                    </td>
                    @include('partials.camposForm')
                </tr>

                <!--Criterio 2-->
                <tr>
                    <td>
                        EN.2
                        <input type="hidden" name="codigo[]" value="EN.2" maxlength="10">
                    </td>
                    <td>
                        Estructura de organización y navegación adecuada.
                        <input type="hidden" name="criterio[]" id=""
                               value="Estructura de organización y navegación adecuada.">
                    </td>
                    <td>
                        @include('partials.selectOne')
                    </td>
                    @include('partials.camposForm')
                </tr>

                <!--Criterio 3-->
                <tr>
                    <td>
                        EN.3
                        <input type="hidden" name="codigo[]" value="EN.3" maxlength="10">
                    </td>
                    <td>
                        Organización de elementos consistente con las convenciones.
                        <input type="hidden" name="criterio[]" id=""
                               value="Organización de elementos consistente con las convenciones.">
                    </td>
                    <td>
                        @include('partials.selectOne')
                    </td>
                    @include('partials.camposForm')
                </tr>

                <!--Criterio 4-->
                <tr>
                    <td>
                        EN.4
                        <input type="hidden" name="codigo[]" value="EN.4" maxlength="10">
                    </td>
                    <td>
                        Control del número de elementos y de términos por elemento en los menús de navegación.
                        <input type="hidden" name="criterio[]" id=""
                               value="Control del número de elementos y de términos por elemento en los menús de navegación.">
                    </td>
                    <td>
                        @include('partials.selectOne')
                    </td>
                    @include('partials.camposForm')
                </tr>

                <!--Criterio 5-->
                <tr>
                    <td>
                        EN.5
                        <input type="hidden" name="codigo[]" value="EN.5" maxlength="10">
                    </td>
                    <td>
                        Equilibrio entre profundidad y anchura en el caso de estructura jerárquica.
                        <input type="hidden" name="criterio[]" id=""
                               value="Equilibrio entre profundidad y anchura en el caso de estructura jerárquica.">
                    </td>
                    <td>
                        @include('partials.selectTwo')
                    </td>
                    @include('partials.camposForm')
                </tr>

                <!--Criterio 6-->
                <tr>
                    <td>
                        EN.6
                        <input type="hidden" name="codigo[]" value="EN.6" maxlength="10">
                    </td>
                    <td>
                        Enlaces fácilmente reconocibles como tales.
                        <input type="hidden" name="criterio[]" id=""
                               value="Enlaces fácilmente reconocibles como tales.">
                    </td>
                    <td>
                        @include('partials.selectTwo')
                    </td>
                    @include('partials.camposForm')
                </tr>

                <!--Criterio 7-->
                <tr>
                    <td>
                        EN.7
                        <input type="hidden" name="codigo[]" value="EN.7" maxlength="10">
                    </td>
                    <td>
                        La caracterización de los enlaces indica su estado (visitados, activos).
                        <input type="hidden" name="criterio[]" id=""
                               value="La caracterización de los enlaces indica su estado (visitados, activos).">
                    </td>
                    <td>
                        @include('partials.selectTwo')
                    </td>
                    @include('partials.camposForm')
                </tr>

                <!--Criterio 8-->
                <tr>
                    <td>
                        EN.8
                        <input type="hidden" name="codigo[]" value="EN.8" maxlength="10">
                    </td>
                    <td>
                        No hay redundancia de enlaces.
                        <input type="hidden" name="criterio[]" id=""
                               value="No hay redundancia de enlaces.">
                    </td>
                    <td>
                        @include('partials.selectTwo')
                    </td>
                    @include('partials.camposForm')
                </tr>

                <!--Criterio 9-->
                <tr>
                    <td>
                        EN.9
                        <input type="hidden" name="codigo[]" value="EN.9" maxlength="10">
                    </td>
                    <td>
                        No hay enlaces rotos.
                        <input type="hidden" name="criterio[]" id=""
                               value="No hay enlaces rotos.">
                    </td>
                    <td>
                        @include('partials.selectTwo')
                    </td>
                    @include('partials.camposForm')
                </tr>

                <!--Criterio 10-->
                <tr>
                    <td>
                        EN.10
                        <input type="hidden" name="codigo[]" value="EN.10" maxlength="10">
                    </td>
                    <td>
                        No hay enlaces que lleven a la misma página que se está visualizando.
                        <input type="hidden" name="criterio[]" id=""
                               value="No hay enlaces que lleven a la misma página que se está visualizando.">
                    </td>
                    <td>
                        @include('partials.selectTwo')
                    </td>
                    @include('partials.camposForm')
                </tr>

                <!--Criterio 11-->
                <tr>
                    <td>
                        EN.11
                        <input type="hidden" name="codigo[]" value="EN.11" maxlength="10">
                    </td>
                    <td>
                        En las imágenes de enlace se indica el contenido al que se va a acceder.
                        <input type="hidden" name="criterio[]" id=""
                               value="En las imágenes de enlace se indica el contenido al que se va a acceder.">
                    </td>
                    <td>
                        @include('partials.selectTwo')
                    </td>
                    @include('partials.camposForm')
                </tr>

                <!--Criterio 12-->
                <tr>
                    <td>
                        EN.12
                        <input type="hidden" name="codigo[]" value="EN.12" maxlength="10">
                    </td>
                    <td>
                        Existe un enlace para volver al inicio en cada página.
                        <input type="hidden" name="criterio[]" id=""
                               value="Existe un enlace para volver al inicio en cada página.">
                    </td>
                    <td>
                        @include('partials.selectTwo')
                    </td>
                    @include('partials.camposForm')
                </tr>

                <!--Criterio 13-->
                <tr>
                    <td>
                        EN.13
                        <input type="hidden" name="codigo[]" value="EN.13" maxlength="10">
                    </td>
                    <td>
                        Existen elementos de navegación que orienten al usuario acerca de dónde está y cómo deshacer su
                        navegación (ej: migas).
                        <input type="hidden" name="criterio[]" id=""
                               value="Existen elementos de navegación que orienten al usuario acerca de dónde está y cómo deshacer su navegación (ej: migas).">
                    </td>
                    <td>
                        @include('partials.selectTwo')
                    </td>
                    @include('partials.camposForm')
                </tr>

                <!--Criterio 14-->
                <tr>
                    <td>
                        EN.14
                        <input type="hidden" name="codigo[]" value="EN.14" maxlength="10">
                    </td>
                    <td>
                        Existe mapa del sitio para acceder directamente a los contenidos sin navegar.
                        <input type="hidden" name="criterio[]" id=""
                               value="Existe mapa del sitio para acceder directamente a los contenidos sin navegar.">
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
