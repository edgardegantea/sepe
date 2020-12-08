@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Criterios del Heurístico "Ayuda"</h2>
        <p>Elementos relacionados con la ayuda ofrecida al usuario durante la navegación por el sitio.</p>

        <a href="{{ route('proyectos.index') }}" class="btn btn-primary">Proyectos</a>
        @include('partials.instructions')

    </div>

    <!-- Tabla -->
    <div class="container">
        <!--CABECERA DE LA TABLA-->
        <form method="POST" name="" action="{{ route('ayudas.store') }}">
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
                        AY.1
                        <input type="hidden" name="codigo[]" value="AY.1" maxlength="10">
                    </td>
                    <td>
                        El enlace a la sección de Ayuda está colocado en una zona visible y estándar.
                        <input type="hidden" name="criterio[]" id=""
                               value="El enlace a la sección de Ayuda está colocado en una zona visible y estándar.">
                    </td>
                    <td>
                        @include('partials.selectTwo')
                    </td>
                    @include('partials.camposForm')
                </tr>

                <!--Criterio 2-->
                <tr>
                    <td>
                        AY.2
                        <input type="hidden" name="codigo[]" value="AY.2" maxlength="10">
                    </td>
                    <td>
                        Fácil acceso y retorno al/del sistema de ayuda.
                        <input type="hidden" name="criterio[]" id=""
                               value="Fácil acceso y retorno al/del sistema de ayuda.">
                    </td>
                    <td>
                        @include('partials.selectOne')
                    </td>
                    @include('partials.camposForm')
                </tr>

                <!--Criterio 3-->
                <tr>
                    <td>
                        AY.3
                        <input type="hidden" name="codigo[]" value="AY.3" maxlength="10">
                    </td>
                    <td>
                        Se ofrece ayuda contextual en tareas complejas.
                        <input type="hidden" name="criterio[]" id=""
                               value="Se ofrece ayuda contextual en tareas complejas.">
                    </td>
                    <td>
                        @include('partials.selectTwo')
                    </td>
                    @include('partials.camposForm')
                </tr>

                <!--Criterio 4-->
                <tr>
                    <td>
                        AY.4
                        <input type="hidden" name="codigo[]" value="AY.4" maxlength="10">
                    </td>
                    <td>
                        FAQs (si las hay) correcta la elección como la redacción de las preguntas.
                        <input type="hidden" name="criterio[]" id=""
                               value="FAQs (si las hay) correcta la elección como la redacción de las preguntas.">
                    </td>
                    <td>
                        @include('partials.selectOne')
                    </td>
                    @include('partials.camposForm')
                </tr>

                <!--Criterio 5-->
                <tr>
                    <td>
                        AY.5
                        <input type="hidden" name="codigo[]" value="AY.5" maxlength="10">
                    </td>
                    <td>
                        FAQs (si las hay) correcta la redacción de las respuestas.
                        <input type="hidden" name="criterio[]" id=""
                               value="FAQs (si las hay) correcta la redacción de las respuestas.">
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

