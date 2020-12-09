@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Criterios del Heurístico "Aspectos Generales"</h2>
        <p>Elementos relacionados con los objetos del sitio, el look & feel, coherencia y nivel de actualización de
            contenidos.</p>

        <a href="{{ route('proyectos.index') }}" class="btn btn-primary">Proyectos</a>
        @include('partials.instructions')

    </div>


    <!-- Tabla -->
    <div class="container">
        <!--CABECERA DE LA TABLA-->
        <form method="POST" name="" action="{{ route('aspectos.store') }}">
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
                        A.G1
                        <input type="hidden" name="codigo[]" value="A.G1" maxlength="10">
                    </td>
                    <td>
                        Objetivos del sitio web concretos y bien definidos.
                        <input type="hidden" name="criterio[]" id=""
                               value="Objetivos del sitio web concretos y bien definidos.">
                    </td>
                    <td>
                        @include('partials.selectOne')
                    </td>
                    @include('partials.camposForm')
                </tr>

                <!--Criterio 2-->
                <tr>
                    <td>
                        A.G2
                        <input type="hidden" name="codigo[]" value="A.G2" maxlength="10">
                    </td>
                    <td>
                        Contenidos y servicios ofrecidos precisos y completos.
                        <input type="hidden" name="criterio[]" id=""
                               value="Contenidos y servicios ofrecidos precisos y completos.">
                    </td>
                    <td>
                        @include('partials.selectOne')
                    </td>
                    @include('partials.camposForm')
                </tr>

                <!--Criterio 3-->
                <tr>
                    <td>
                        A.G3
                        <input type="hidden" name="codigo[]" value="A.G3" maxlength="10">
                    </td>
                    <td>
                        Estructura general del sitio web orientada al usuario.
                        <input type="hidden" name="criterio[]" id=""
                               value="Estructura general del sitio web orientada al usuario.">
                    </td>
                    <td>
                        @include('partials.selectOne')
                    </td>
                    @include('partials.camposForm')
                </tr>

                <!--Criterio 4-->
                <tr>
                    <td>
                        A.G4
                        <input type="hidden" name="codigo[]" value="A.G4" maxlength="10">
                    </td>
                    <td>
                        Look & Feel general se corresponde con los objetivos, características, contenidos y servicios
                        del
                        sitio web.
                        <input type="hidden" name="criterio[]" id=""
                               value="Look & Feel general se corresponde con los objetivos, características, contenidos y servicios del sitio web.">
                    </td>
                    <td>
                        @include('partials.selectOne')
                    </td>
                    @include('partials.camposForm')
                </tr>

                <!--Criterio 5-->
                <tr>
                    <td>
                        A.G5
                        <input type="hidden" name="codigo[]" value="A.G5" maxlength="10">
                    </td>
                    <td>
                        Diseño general del sitio web reconocible.
                        <input type="hidden" name="criterio[]" id="" value="Diseño general del sitio web reconocible.">
                    </td>
                    <td>
                        @include('partials.selectOne')
                    </td>
                    @include('partials.camposForm')
                </tr>

                <!--Criterio 6-->
                <tr>
                    <td>
                        A.G6
                        <input type="hidden" name="codigo[]" value="A.G6" maxlength="10">
                    </td>
                    <td>
                        Diseño general del sitio web coherente.
                        <input type="hidden" name="criterio[]" id=""
                               value="Diseño general del sitio web coherente.">
                    </td>
                    <td>
                        @include('partials.selectOne')
                    </td>
                    @include('partials.camposForm')
                </tr>

                <!--Criterio 7-->
                <tr>
                    <td>
                        A.G7
                        <input type="hidden" name="codigo[]" value="A.G7" maxlength="10">
                    </td>
                    <td>
                        Se utiliza el idioma del usuario.
                        <input type="hidden" name="criterio[]" id=""
                               value="Se utiliza el idioma del usuario.">
                    </td>
                    <td>
                        @include('partials.selectTwo')
                    </td>
                    @include('partials.camposForm')
                </tr>

                <!--Criterio 8-->
                <tr>
                    <td>
                        A.G8
                        <input type="hidden" name="codigo[]" value="A.G8" maxlength="10">
                    </td>
                    <td>
                        Se da soporte a otro/s idioma/s.
                        <input type="hidden" name="criterio[]" id=""
                               value="Se da soporte a otro/s idioma/s.">
                    </td>
                    <td>
                        @include('partials.selectTwo')
                    </td>
                    @include('partials.camposForm')
                </tr>

                <!--Criterio 9-->
                <tr>
                    <td>
                        A.G9
                        <input type="hidden" name="codigo[]" value="A.G9" maxlength="10">
                    </td>
                    <td>
                        Traducción del sitio completa y correcta.
                        <input type="hidden" name="criterio[]" id=""
                               value="Traducción del sitio completa y correcta.">
                    </td>
                    <td>
                        @include('partials.selectTwo')
                    </td>
                    @include('partials.camposForm')
                </tr>

                <!--Criterio 10-->
                <tr>
                    <td>
                        A.G10
                        <input type="hidden" name="codigo[]" value="A.G10" maxlength="10">
                    </td>
                    <td>
                        Sitio web actualizado periódicamente.
                        <input type="hidden" name="criterio[]" id=""
                               value="Sitio web actualizado periódicamente.">
                    </td>
                    <td>
                        @include('partials.selectTwo')
                    </td>
                    @include('partials.camposForm')
                </tr>
                </tbody>
            </table>
            <input type="submit" class="btn btn-success">
            <a href="" class="btn btn-primary">Regresar a proyecto</a>
        </form>
    </div>

@endsection
