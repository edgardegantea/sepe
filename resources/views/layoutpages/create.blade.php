@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Criterios del "Layout de la Página"</h2>
        <p>Elementos relacionados con la distribución y el aspecto de los elementos de navegación e información en la
            interfaz.</p>

        <a href="{{ route('proyectos.index') }}" class="btn btn-primary">Proyectos</a>

        @include('partials.instructions')

    </div>


    <!-- Tabla -->
    <div class="container">
        <!--CABECERA DE LA TABLA-->
        <form method="POST" name="" action="{{ route('layoutpages.store') }}">
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
                        LA.1
                        <input type="hidden" name="codigo[]" value="LA.1" maxlength="10">
                    </td>
                    <td>
                        Se aprovechan las zonas de alta jerarquía informativa de la página para contenidos de mayor
                        relevancia.
                        <input type="hidden" name="criterio[]" id=""
                               value="Se aprovechan las zonas de alta jerarquía informativa de la página para contenidos de mayor relevancia.">
                    </td>
                    <td>
                        @include('partials.selectTwo')
                    </td>
                    @include('partials.camposForm')
                </tr>

                <!--Criterio 2-->
                <tr>
                    <td>
                        LA.2
                        <input type="hidden" name="codigo[]" value="LA.2" maxlength="10">
                    </td>
                    <td>
                        Se ha evitado la sobrecarga informativa.
                        <input type="hidden" name="criterio[]" id=""
                               value="Se ha evitado la sobrecarga informativa.">
                    </td>
                    <td>
                        @include('partials.selectTwo')
                    </td>
                    @include('partials.camposForm')
                </tr>

                <!--Criterio 3-->
                <tr>
                    <td>
                        LA.3
                        <input type="hidden" name="codigo[]" value="LA.3" maxlength="10">
                    </td>
                    <td>
                        Es una interfaz limpia, sin ruido visual.
                        <input type="hidden" name="criterio[]" id=""
                               value="Es una interfaz limpia, sin ruido visual.">
                    </td>
                    <td>
                        @include('partials.selectTwo')
                    </td>
                    @include('partials.camposForm')
                </tr>

                <!--Criterio 4-->
                <tr>
                    <td>
                        LA.4
                        <input type="hidden" name="codigo[]" value="LA.4" maxlength="10">
                    </td>
                    <td>
                        Existen zonas en blanco entre los objetos informativos de la página para poder descansar la
                        vista.
                        <input type="hidden" name="criterio[]" id=""
                               value="Existen zonas en blanco entre los objetos informativos de la página para poder descansar la vista.">
                    </td>
                    <td>
                        @include('partials.selectTwo')
                    </td>
                    @include('partials.camposForm')
                </tr>

                <!--Criterio 5-->
                <tr>
                    <td>
                        LA.5
                        <input type="hidden" name="codigo[]" value="LA.5" maxlength="10">
                    </td>
                    <td>
                        Uso correcto del espacio visual de la página.
                        <input type="hidden" name="criterio[]" id=""
                               value="Uso correcto del espacio visual de la página.">
                    </td>
                    <td>
                        @include('partials.selectOne')
                    </td>
                    @include('partials.camposForm')
                </tr>

                <!--Criterio 6-->
                <tr>
                    <td>
                        LA.6
                        <input type="hidden" name="codigo[]" value="LA.6" maxlength="10">
                    </td>
                    <td>
                        Se utiliza correctamente la jerarquía visual para expresar las relaciones del tipo "parte de"
                        entre los elementos de la página.
                        <input type="hidden" name="criterio[]" id=""
                               value="Se utiliza correctamente la jerarquía visual para expresar las relaciones del tipo 'parte de' entre los elementos de la página.">
                    </td>
                    <td>
                        @include('partials.selectOne')
                    </td>
                    @include('partials.camposForm')
                </tr>

                <!--Criterio 7-->
                <tr>
                    <td>
                        LA.7
                        <input type="hidden" name="codigo[]" value="LA.7" maxlength="10">
                    </td>
                    <td>
                        Se ha controlado la longitud de página.
                        <input type="hidden" name="criterio[]" id=""
                               value="Se ha controlado la longitud de página.">
                    </td>
                    <td>
                        @include('partials.selectTwo')
                    </td>
                    @include('partials.camposForm')
                </tr>

                <!--Criterio 8-->
                <tr>
                    <td>
                        LA.8
                        <input type="hidden" name="codigo[]" value="LA.8" maxlength="10">
                    </td>
                    <td>
                        La versión impresa de la página es correcta.
                        <input type="hidden" name="criterio[]" id=""
                               value="La versión impresa de la página es correcta.">
                    </td>
                    <td>
                        @include('partials.selectTwo')
                    </td>
                    @include('partials.camposForm')
                </tr>

                <!--Criterio 9-->
                <tr>
                    <td>
                        LA.9
                        <input type="hidden" name="codigo[]" value="LA.9" maxlength="10">
                    </td>
                    <td>
                        El texto de la página se lee sin dificultad.
                        <input type="hidden" name="criterio[]" id=""
                               value="El texto de la página se lee sin dificultad.">
                    </td>
                    <td>
                        @include('partials.selectTwo')
                    </td>
                    @include('partials.camposForm')
                </tr>

                <!--Criterio 10-->
                <tr>
                    <td>
                        LA.10
                        <input type="hidden" name="codigo[]" value="LA.10" maxlength="10">
                    </td>
                    <td>
                        Se ha evitado el texto parpadeante / deslizante.
                        <input type="hidden" name="criterio[]" id=""
                               value="Se ha evitado el texto parpadeante / deslizante.">
                    </td>
                    <td>
                        @include('partials.selectTwo')
                    </td>
                    @include('partials.camposForm')
                </tr>

                </tbody>
            </table>
            <input type="submit" class="btn btn-success">
            <a href="" class="btn btn-primary">Regresar</a>
        </form>
    </div>

@endsection
