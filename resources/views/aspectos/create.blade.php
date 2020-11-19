@extends('layouts.app')

@section('content')

    <h2>CRITERIOS DEL "HEURÍSTICO ASPECTOS GENERALES"</h2>
    <h4>Elementos relacionados con los objetos del sitio, el look & feel, coherencia y nivel de actualización de
        contenidos</h4>

    <div class="container">
        <a href="{{ route('proyectos.index') }}" class="btn btn-primary">Proyectos</a>
        <a href="{{ route('structures.create') }}" class="btn btn-primary">Siguiente evaluación</a>
    </div>


@section('contentSelect')
    <select name="valor" id="" required>
        <option value="">--Selecciona un valor--</option>
        @for($i = 0; $i<=10;$i++)
            <option value="{{ $i }}">{{ $i }}</option>
        @endfor
        <option value="NA">NA</option>
    </select>
@endsection

@section('contentSelect2')
    <select name="valor" id="" required>
        <option value="">--Seleccione un valor--</option>
        <option value="Criterio no aplicable en el sitio">NA</option>
        <option value="No se cumple en todo el sitio">NTS</option>
        <option value="No se cumple en los enlaces principales">NEP</option>
        <option value="No se cumple en la pagina principal">NPP</option>
        <option value="No se cumple en alguna pagina interior">NPI</option>
        <option value="Se cumple el criterio">S</option>
    </select>
@endsection


@section('contentForm')
    <div class="col-2">
        <input type="text" name="relevancia" id="" required maxlength="100">
    </div>
    <div class="col-2">
        <textarea name="comentario" id="" cols="30" rows="1"></textarea>
    </div>
    <div class="col-2">
        <input type="submit">
        <a href="">Editar</a>

    </div>
@endsection


<!-- Tabla -->
<!--****************************** TABLA CON DIV ********************************************-->

<div class="container">
    <!--CABECERA DE LA TABLA-->
    <div class="row">
        <div class="col-1">
            Codigo
        </div>
        <div class="col-3">
            Criterio
        </div>
        <div class="col-2">
            Valor
        </div>
        <div class="col-2">
            Relevancia
        </div>
        <div class="col-2">
            Comentario
        </div>
        <div class="col-2">
            Aciones
        </div>
    </div>
    <!--******************************** Filas de Los Criterios ************************* -->


    <!--CRITERIO 1-->
    <form method="POST" name="formCriterio1" action="{{ route('aspectos.store') }}">
        @csrf
        <div class="row">
            <div class="col-1">
                AG1
                <input type="hidden" name="codigo" value="AG.1">
            </div>
            <div class="col-3">
                Objetivos del sitio web concretos y bien definidos.
                <input type="hidden" name="criterio" value="Objetivos del sitio web concretos y bien definidos.">
            </div>
            <div class="col-2">
                @yield('contentSelect')
            </div>
            @yield('contentForm')
        </div>
    </form>

    <!--CRITERIO 2-->
    <form method="POST" name="formCriterio2" action="{{ route('aspectos.store') }}">
        @csrf
        <div class="row">
            <div class="col-1">
                AG2
                <input type="hidden" name="codigo" value="AG.2">
            </div>
            <div class="col-3">
                Contenidos y servicios ofrecidos precisos y completos.
                <input type="hidden" name="criterio" value="Contenidos y servicios ofrecidos precisos y completos.">
            </div>
            <div class="col-2">
                @yield('contentSelect')
            </div>
            @yield('contentForm')
        </div>
    </form>

    <!--CRITERIO 3-->
    <form method="POST" name="formCriterio3" action="{{ route('aspectos.store') }}">
        @csrf
        <div class="row">
            <div class="col-1">
                AG3
                <input type="hidden" name="codigo" value="AG.3">
            </div>
            <div class="col-3">
                Estructura general del sitio web orientada al usuario.
                <input type="hidden" name="criterio" value="Estructura general del sitio web orientada al usuario.">
            </div>
            <div class="col-2">
                @yield('contentSelect')
            </div>
            @yield('contentForm')
        </div>
    </form>

    <!--CRITERIO 4-->
    <form method="POST" name="formCriterio4" action="{{ route('aspectos.store') }}">
        @csrf
        <div class="row">
            <div class="col-1">
                AG4
                <input type="hidden" name="codigo" value="AG.4">
            </div>
            <div class="col-3">
                Look & Feel general se corresponde con los objetivos, características, contenidos y servicios del sitio
                web.
            </div>
            <div class="col-2">
                @yield('contentSelect')
            </div>
            @yield('contentForm')
        </div>
    </form>

    <!--CRITERIO 5-->
    <form method="POST" name="formCriterio5" action="{{ route('aspectos.store') }}">
        @csrf
        <div class="row">
            <div class="col-1">
                AG5
                <input type="hidden" name="codigo" value="AG.5">
            </div>
            <div class="col-3">
                Diseño general del sitio web reconocible.
                <input type="hidden" name="criterio" value="Diseño general del sitio web reconocible.">
            </div>
            <div class="col-2">
                @yield('contentSelect')
            </div>
            @yield('contentForm')
        </div>
    </form>

    <!--CRITERIO 6-->
    <form method="POST" name="formCriterio6" action="{{ route('aspectos.store') }}">
        @csrf
        <div class="row">
            <div class="col-1">
                AG6
                <input type="hidden" name="codigo" value="AG.6">
            </div>
            <div class="col-3">
                Diseño general del sitio web coherente.
                <input type="hidden" name="criterio" value="Diseño general del sitio web coherente.">
            </div>
            <div class="col-2">
                @yield('contentSelect')
            </div>
            @yield('contentForm')
        </div>
    </form>

    <!--CRITERIO 7-->
    <form method="POST" name="formCriterio7" action="{{ route('aspectos.store') }}">
        @csrf
        <div class="row">
            <div class="col-1">
                AG7
                <input type="hidden" name="codigo" value="AG.7">
            </div>
            <div class="col-3">
                Se utiliza el idioma del usuario.
                <input type="hidden" name="criterio" value="Se utiliza el idioma del usuario.">
            </div>
            <div class="col-2">
                @yield('contentSelect2')
            </div>
            @yield('contentForm')
        </div>
    </form>

    <!--CRITERIO 8-->
    <form method="POST" name="formCriterio8" action="{{ route('aspectos.store') }}">
        @csrf
        <div class="row">
            <div class="col-1">
                AG8
                <input type="hidden" name="codigo" value="AG.8">
            </div>
            <div class="col-3">
                Se da soporte a otro/s idioma/s.
                <input type="hidden" name="criterio" value="Se da soporte a otro/s idioma/s.">
            </div>
            <div class="col-2">
                @yield('contentSelect2')
            </div>
            @yield('contentForm')
        </div>
    </form>

    <!--CRITERIO 9-->
    <form method="POST" name="formCriterio9" action="{{ route('aspectos.store') }}">
        @csrf
        <div class="row">
            <div class="col-1">
                AG9
                <input type="hidden" name="codigo" value="AG.9">
            </div>
            <div class="col-3">
                Traducción del sitio completa y correcta.
                <input type="hidden" name="criterio" value="Traducción del sitio completa y correcta.">
            </div>
            <div class="col-2">
                @yield('contentSelect2')
            </div>
            @yield('contentForm')
        </div>
    </form>

    <!--CRITERIO 10-->
    <form method="POST" name="formCriterio10" action="{{ route('aspectos.store') }}">
        @csrf
        <div class="row">
            <div class="col-1">
                AG10
                <input type="hidden" name="codigo" value="AG.10">
            </div>
            <div class="col-3">
                Sitio web actualizado periódicamente.
                <input type="hidden" name="criterio" value="Sitio web actualizado periódicamente.">
            </div>
            <div class="col-2">
                @yield('contentSelect2')
            </div>
            @yield('contentForm')
        </div>
    </form>
</div>

<h3>Instrucciones</h3>
<p>1. Evalue cada criterio y rellene la columna "Valor" según la leyenda.</p>
<p>2. Añada sus comentarios o la referencia a los mismos en otro documento anexo en la columna "Comentarios."</p>

@endsection
