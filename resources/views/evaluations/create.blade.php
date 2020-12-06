@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>CRITERIOS DEL "HEURÍSTICO ASPECTOS GENERALES"</h2>
        <h4>Elementos relacionados con los objetos del sitio, el look & feel, coherencia y nivel de actualización de
            contenidos</h4>


        <a href="{{ route('proyectos.index') }}" class="btn btn-primary">Proyectos</a>
        <a href="{{ route('structures.create') }}" class="btn btn-primary">Siguiente evaluación</a>


        <h4>Instrucciones</h4>
        <p>1. Evalue cada criterio y rellene la columna "Valor" según la leyenda.</p>
        <p>2. Añada sus comentarios o la referencia a los mismos en otro documento anexo en la columna
            "Comentarios."</p>

    </div>


@section('contentSelect')
    <select name="valor[]" id="" required>
        <option value="">--Selecciona un valor--</option>
        @for($i = 0; $i<=10;$i++)
            <option value="{{ $i }}">{{ $i }}</option>
        @endfor
        <option value="NA">NA</option>
    </select>
@endsection

@section('contentSelect2')
    <select name="valor[]" id="" required>
        <option value="">--Seleccione un valor--</option>
        <option value="Criterio no aplicable en el sitio.">NA</option>
        <option value="No se cumple en todo el sitio.">NTS</option>
        <option value="No se cumple en los enlaces principales.">NEP</option>
        <option value="No se cumple en la pagina principal.">NPP</option>
        <option value="No se cumple en alguna pagina interior.">NPI</option>
        <option value="Se cumple el criterio.">S</option>
    </select>
@endsection

@section('contentCampos')
    <td>
        <input type="text" name="relevancia[]" id="" required maxlength="200">
    </td>
    <td>
        <textarea name="comentario[]" id="" cols="30" rows="1"></textarea>
    </td>
@endsection


<!-- Tabla -->
<div class="container">
    <!--CABECERA DE LA TABLA-->
    <form method="POST" name="" action="{{ route('evaluations.store') }}">
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
            <tr>
                <!--Criterio 1-->
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
                    @yield('contentSelect')
                </td>
                @yield('contentCampos')
            </tr>
            <tr>
                <!--Criterio 2-->
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
                    @yield('contentSelect')
                </td>
                @yield('contentCampos')
            </tr>
            <tr>
                <!--Criterio 3-->
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
                    @yield('contentSelect')
                </td>
                @yield('contentCampos')
            </tr>
            <tr>
                <!--Criterio 4-->
                <td>
                    A.G4
                    <input type="hidden" name="codigo[]" value="A.G4" maxlength="10">
                </td>
                <td>
                    Look & Feel general se corresponde con los objetivos, características, contenidos y servicios del
                    sitio web.
                    <input type="hidden" name="criterio[]" id=""
                           value="Look & Feel general se corresponde con los objetivos, características, contenidos y servicios del sitio web.">
                </td>
                <td>
                    @yield('contentSelect')
                </td>
                @yield('contentCampos')
            </tr>

            <!--Criterio 5-->
            <td>
                A.G5
                <input type="hidden" name="codigo[]" value="A.G5" maxlength="10">
            </td>
            <td>
                Diseño general del sitio web reconocible.
                <input type="hidden" name="criterio[]" id="" value="Diseño general del sitio web reconocible.">
            </td>
            <td>
                @yield('contentSelect')
            </td>
            @yield('contentCampos')
            </tr>

            <!--Criterio 6-->
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
                @yield('contentSelect')
            </td>
            @yield('contentCampos')
            </tr>

            <!--Criterio 7-->
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
                @yield('contentSelect2')
            </td>
            @yield('contentCampos')
            </tr>

            <!--Criterio 8-->
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
                @yield('contentSelect2')
            </td>
            @yield('contentCampos')
            </tr>

            <!--Criterio 9-->
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
                @yield('contentSelect2')
            </td>
            @yield('contentCampos')
            </tr>

            <!--Criterio 10-->
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
                @yield('contentSelect2')
            </td>
            @yield('contentCampos')
            </tr>

            </tbody>
        </table>
        <input type="submit" class="btn btn-success">
        <a href="" class="btn btn-dark">Editar</a>
    </form>
</div>


@endsection

