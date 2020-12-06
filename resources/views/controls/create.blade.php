@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Criterios del "Control y Retroalimentación"</h2>
        <p>Elementos relacionados con libertad del usuario en la navegación y la información proporcionada al mismo en
            el proceso.</p>

        <a href="{{ route('proyectos.index') }}" class="btn btn-primary">Proyectos</a>

        @include('partials.instructions')

    </div>


    <!-- Tabla -->
    <div class="container">
        <!--CABECERA DE LA TABLA-->
        <form method="POST" name="" action="{{ route('controls.store') }}">
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
                        CR.1
                        <input type="hidden" name="codigo[]" value="CR.1" maxlength="10">
                    </td>
                    <td>
                        El usuario tiene todo el control sobre la interfaz.
                        <input type="hidden" name="criterio[]" id=""
                               value="El usuario tiene todo el control sobre la interfaz.">
                    </td>
                    <td>
                        @include('partials.selectTwo')
                    </td>
                    @include('partials.camposForm')
                </tr>

                <!--Criterio 2-->
                <tr>
                    <td>
                        CR.2
                        <input type="hidden" name="codigo[]" value="CR.2" maxlength="10">
                    </td>
                    <td>
                        Se informa al usuario acerca de lo que está pasando.
                        <input type="hidden" name="criterio[]" id=""
                               value="Se informa al usuario acerca de lo que está pasando.">
                    </td>
                    <td>
                        @include('partials.selectTwo')
                    </td>
                    @include('partials.camposForm')
                </tr>

                <!--Criterio 3-->
                <tr>
                    <td>
                        CR.3
                        <input type="hidden" name="codigo[]" value="CR.3" maxlength="10">
                    </td>
                    <td>
                        Se informa al usuario de lo que ha pasado.
                        <input type="hidden" name="criterio[]" id=""
                               value="Se informa al usuario de lo que ha pasado.">
                    </td>
                    <td>
                        @include('partials.selectTwo')
                    </td>
                    @include('partials.camposForm')
                </tr>

                <!--Criterio 4-->
                <tr>
                    <td>
                        CR.4
                        <input type="hidden" name="codigo[]" value="CR.4" maxlength="10">
                    </td>
                    <td>
                        Existen sistemas de validación antes de que el usuario envíe información para tratar de evitar
                        errores.
                        <input type="hidden" name="criterio[]" id=""
                               value="Existen sistemas de validación antes de que el usuario envíe información para tratar de evitar errores.">
                    </td>
                    <td>
                        @include('partials.selectTwo')
                    </td>
                    @include('partials.camposForm')
                </tr>

                <!--Criterio 5-->
                <tr>
                    <td>
                        CR.5
                        <input type="hidden" name="codigo[]" value="CR.5" maxlength="10">
                    </td>
                    <td>
                        Cuando se produce un error, se informa de forma clara y no alarmista al usuario de lo ocurrido y
                        de
                        cómo solucionar el problema.
                        <input type="hidden" name="criterio[]" id=""
                               value="Cuando se produce un error, se informa de forma clara y no alarmista al usuario de lo ocurrido y de cómo solucionar el problema.">
                    </td>
                    <td>
                        @include('partials.selectTwo')
                    </td>
                    @include('partials.camposForm')
                </tr>

                <!--Criterio 6-->
                <tr>
                    <td>
                        CR.6
                        <input type="hidden" name="codigo[]" value="CR.6" maxlength="10">
                    </td>
                    <td>
                        Se ha controlado el tiempo de respuesta.
                        <input type="hidden" name="criterio[]" id=""
                               value="Se ha controlado el tiempo de respuesta.">
                    </td>
                    <td>
                        @include('partials.selectTwo')
                    </td>
                    @include('partials.camposForm')
                </tr>

                <!--Criterio 7-->
                <tr>
                    <td>
                        CR.7
                        <input type="hidden" name="codigo[]" value="CR.7" maxlength="10">
                    </td>
                    <td>
                        Se ha evitado que las ventanas del sitio anulen o se superpongan a la del navegador.
                        <input type="hidden" name="criterio[]" id=""
                               value="Se ha evitado que las ventanas del sitio anulen o se superpongan a la del navegador.">
                    </td>
                    <td>
                        @include('partials.selectTwo')
                    </td>
                    @include('partials.camposForm')
                </tr>

                <!--Criterio 8-->
                <tr>
                    <td>
                        CR.8
                        <input type="hidden" name="codigo[]" value="CR.8" maxlength="10">
                    </td>
                    <td>
                        Se ha evitado la proliferación de ventanas en la pantalla del usuario.
                        <input type="hidden" name="criterio[]" id=""
                               value="Se ha evitado la proliferación de ventanas en la pantalla del usuario.">
                    </td>
                    <td>
                        @include('partials.selectTwo')
                    </td>
                    @include('partials.camposForm')
                </tr>

                <!--Criterio 9-->
                <tr>
                    <td>
                        CR.9
                        <input type="hidden" name="codigo[]" value="CR.9" maxlength="10">
                    </td>
                    <td>
                        Se ha evitado la descarga por parte del usuario de plugins adicionales.
                        <input type="hidden" name="criterio[]" id=""
                               value="Se ha evitado la descarga por parte del usuario de plugins adicionales.">
                    </td>
                    <td>
                        @include('partials.selectTwo')
                    </td>
                    @include('partials.camposForm')
                </tr>

                <!--Criterio 10-->
                <tr>
                    <td>
                        CR.10
                        <input type="hidden" name="codigo[]" value="CR.10" maxlength="10">
                    </td>
                    <td>
                        Si existen tareas de varios pasos, se indica al usuario en cual está y cuantos faltan para
                        completar
                        la tarea.
                        <input type="hidden" name="criterio[]" id=""
                               value="Si existen tareas de varios pasos, se indica al usuario en cual está y cuantos faltan para completar la tarea.">
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
