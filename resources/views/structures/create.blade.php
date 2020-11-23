@extends('layouts.app')

@section('content')

    <h2>CRITERIOS DEL "ESTRUCTURA Y NAVEGACIÓN"</h2>
    <h4>Elementos relacionados con la idoneidad de la arquitectura de la información y la navegación del sitio.</h4>

    <div class="container">
        <a href="{{ route('proyectos.index') }}" class="btn btn-primary">Proyectos</a>
        <a href="{{ route('aspectos.create') }}" class="btn btn-primary">Evaluación anterior</a>
        <a href="{{ route('layoutpages.create') }}" class="btn btn-primary">Siguiente evaluación</a>
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
            Comentarios
        </div>
        <div class="col-2">
            Aciones
        </div>
    </div>
    <!--******************************** Filas de Los Criterios ************************* -->

    <!--CRITERIO 1-->
    <form method="POST" name="formCriterio1" action="{{ route('structures.store') }}">
        @csrf
        <div class="row">
            <div class="col-1">
                EN.1
            </div>
            <div class="col-3">
                Se ha evitado pantalla de bienvenida.
            </div>
            <div class="col-2">
                @yield('contentSelect2')
            </div>
            @yield('contentForm')
        </div>
    </form>

    <!--CRITERIO 2-->
    <form method="POST" name="formCriterio2" action="{{ route('structures.store') }}">
        @csrf
        <div class="row">
            <div class="col-1">
                EN.2
            </div>
            <div class="col-3">
                Estructura de organización y navegación adecuada.
            </div>
            <div class="col-2">
                @yield('contentSelect')
            </div>
            @yield('contentForm')
        </div>
    </form>

    <!--CRITERIO 3-->
    <form method="POST" name="formCriterio3" action="{{ route('structures.store') }}">
        @csrf
        <div class="row">
            <div class="col-1">
                EN.3
            </div>
            <div class="col-3">
                Organización de elementos consistente con las convenciones.
            </div>
            <div class="col-2">
                @yield('contentSelect')
            </div>
            @yield('contentForm')
        </div>
    </form>

    <!--CRITERIO 4-->
    <form method="POST" name="formCriterio4" action="{{ route('structures.store') }}">
        @csrf
        <div class="row">
            <div class="col-1">
                EN.4
            </div>
            <div class="col-3">
                Control del número de elementos y de términos por elemento en los menús de navegación.
            </div>
            <div class="col-2">
                @yield('contentSelect')
            </div>
            @yield('contentForm')
        </div>
    </form>

    <!--CRITERIO 5-->
    <form method="POST" name="formCriterio5" action="{{ route('structures.store') }}">
        @csrf
        <div class="row">
            <div class="col-1">
                EN.5
            </div>
            <div class="col-3">
                Equilibrio entre profundidad y anchura en el caso de estructura jerárquica
            </div>
            <div class="col-2">
                @yield('contentSelect2')
            </div>
            @yield('contentForm')
        </div>
    </form>

    <!--CRITERIO 6-->
    <form method="POST" name="formCriterio6" action="{{ route('structures.store') }}">
        @csrf
        <div class="row">
            <div class="col-1">
                EN.6
            </div>
            <div class="col-3">
                Enlaces fácilmente reconocibles como tales.
            </div>
            <div class="col-2">
                @yield('contentSelect2')
            </div>
            @yield('contentForm')
        </div>
    </form>

    <!--CRITERIO 7-->
    <form method="POST" name="formCriterio7" action="{{ route('structures.store') }}">
        @csrf
        <div class="row">
            <div class="col-1">
                EN.7
            </div>
            <div class="col-3">
                La caracterización de los enlaces indica su estado (visitados, activos).
            </div>
            <div class="col-2">
                @yield('contentSelect2')
            </div>
            @yield('contentForm')
        </div>
    </form>

    <!--CRITERIO 8-->
    <form method="POST" name="formCriterio8" action="{{ route('structures.store') }}">
        @csrf
        <div class="row">
            <div class="col-1">
                EN.8
            </div>
            <div class="col-3">
                No hay redundancia de enlaces.
            </div>
            <div class="col-2">
                @yield('contentSelect2')
            </div>
            @yield('contentForm')
        </div>
    </form>

    <!--CRITERIO 9-->
    <form method="POST" name="formCriterio9" action="{{ route('structures.store') }}">
        @csrf
        <div class="row">
            <div class="col-1">
                EN.9
            </div>
            <div class="col-3">
                No hay enlaces rotos.
            </div>
            <div class="col-2">
                @yield('contentSelect2')
            </div>
            @yield('contentForm')
        </div>
    </form>

    <!--CRITERIO 10-->
    <form method="POST" name="formCriterio10" action="{{ route('structures.store') }}">
        @csrf
        <div class="row">
            <div class="col-1">
                EN.10
            </div>
            <div class="col-3">
                No hay enlaces que lleven a la misma página que se está visualizando.
            </div>
            <div class="col-2">
                @yield('contentSelect2')
            </div>
            @yield('contentForm')
        </div>
    </form>

    <!--CRITERIO 11-->
    <form method="POST" name="formCriterio11" action="{{ route('structures.store') }}">
        @csrf
        <div class="row">
            <div class="col-1">
                EN.11
            </div>
            <div class="col-3">
                En las imágenes de enlace se indica el contenido al que se va a acceder.
            </div>
            <div class="col-2">
                @yield('contentSelect2')
            </div>
            @yield('contentForm')
        </div>
    </form>

    <!--CRITERIO 12-->
    <form method="POST" name="formCriterio12" action="{{ route('structures.store') }}">
        @csrf
        <div class="row">
            <div class="col-1">
                EN.12
            </div>
            <div class="col-3">
                Existe un enlace para volver al inicio en cada página.
            </div>
            <div class="col-2">
                @yield('contentSelect2')
            </div>
            @yield('contentForm')
        </div>
    </form>

    <!--CRITERIO 13-->
    <form method="POST" name="formCriterio13" action="{{ route('structures.store') }}">
        @csrf
        <div class="row">
            <div class="col-1">
                EN.13
            </div>
            <div class="col-3">
                Existen elementos de navegación que orienten al usuario acerca de dónde está y cómo deshacer su navegación (ej: migas).
            </div>
            <div class="col-2">
                @yield('contentSelect2')
            </div>
            @yield('contentForm')
        </div>
    </form>

    <!--CRITERIO 14-->
    <form method="POST" name="formCriterio14" action="{{ route('structures.store') }}">
        @csrf
        <div class="row">
            <div class="col-1">
                EN.14
            </div>
            <div class="col-3">
                Existe mapa del sitio para acceder directamente a los contenidos sin navegar.
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
