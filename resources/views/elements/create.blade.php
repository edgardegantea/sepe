@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Criterios del Heurístico "Elementos Multimedia"</h1>
@stop

@section('content')
    <div class="container">
        <p>Elementos relacionados con el grado de adecuación de los contenidos multimedia al sitio web.</p>

        <a href="{{ route('projects.index') }}" class="btn btn-primary">Proyectos</a>
        @include('partials.instructions')

    </div>


    <!-- Tabla -->
    <div class="container">
        <!--CABECERA DE LA TABLA-->
        <form method="POST" name="" action="{{ route('elements.store') }}">
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
                        EM.1
                        <input type="hidden" name="codigo[]" value="EM.1" maxlength="10">
                    </td>
                    <td>
                        Fotografías bien recortadas.
                        <input type="hidden" name="criterio[]" id=""
                               value="Fotografías bien recortadas.">
                    </td>
                    <td>
                        @include('partials.selectTwo')
                    </td>
                    @include('partials.camposForm')
                </tr>

                <!--Criterio 2-->
                <tr>
                    <td>
                        EM.2
                        <input type="hidden" name="codigo[]" value="EM.2" maxlength="10">
                    </td>
                    <td>
                        Fotografías comprensibles.
                        <input type="hidden" name="criterio[]" id=""
                               value="Fotografías comprensibles.">
                    </td>
                    <td>
                        @include('partials.selectTwo')
                    </td>
                    @include('partials.camposForm')
                </tr>

                <!--Criterio 3-->
                <tr>
                    <td>
                        EM.3
                        <input type="hidden" name="codigo[]" value="EM.3" maxlength="10">
                    </td>
                    <td>
                        Fotografías con correcta resolución.
                        <input type="hidden" name="criterio[]" id=""
                               value="Fotografías con correcta resolución.">
                    </td>
                    <td>
                        @include('partials.selectTwo')
                    </td>
                    @include('partials.camposForm')
                </tr>

                <!--Criterio 4-->
                <tr>
                    <td>
                        EM.4
                        <input type="hidden" name="codigo[]" value="EM.4" maxlength="10">
                    </td>
                    <td>
                        El uso de imágenes o animaciones proporciona algún tipo de valor añadido.
                        <input type="hidden" name="criterio[]" id=""
                               value="El uso de imágenes o animaciones proporciona algún tipo de valor añadido.">
                    </td>
                    <td>
                        @include('partials.selectTwo')
                    </td>
                    @include('partials.camposForm')
                </tr>

                <!--Criterio 5-->
                <tr>
                    <td>
                        EM.5
                        <input type="hidden" name="codigo[]" value="EM.5" maxlength="10">
                    </td>
                    <td>
                        Se ha evitado el uso de animaciones cíclicas.
                        <input type="hidden" name="criterio[]" id=""
                               value="Se ha evitado el uso de animaciones cíclicas.">
                    </td>
                    <td>
                        @include('partials.selectTwo')
                    </td>
                    @include('partials.camposForm')
                </tr>

                <!--Criterio 6-->
                <tr>
                    <td>
                        EM.6
                        <input type="hidden" name="codigo[]" value="EM.6" maxlength="10">
                    </td>
                    <td>
                        El uso de sonido proporciona algún tipo de valor añadido.
                        <input type="hidden" name="criterio[]" id=""
                               value="El uso de sonido proporciona algún tipo de valor añadido.">
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

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

