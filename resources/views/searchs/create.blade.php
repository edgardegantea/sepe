@extends('layouts.app')

@section('content')

    <div class="container">
        <h2>CRITERIOS DEL "BÚSQUEDA":</h2>
        <h4>Elementos relacionados con el buscador implementado en el sitio web.</h4>
    </div>

    <div class="container">
        <a href="{{ route('proyectos.index') }}" class="btn btn-primary">Proyectos</a>
        <a href="{{ route('controls.create') }}" class="btn btn-primary">Evaluación anterior</a>
        <a href="{{ route('structures.create') }}" class="btn btn-primary">Siguiente evaluación</a>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>Instrucciones</h3>
            </div>
            <div class="col">
                <p>1. Evalue cada criterio y rellene la columna "Valor" según la leyenda.</p>
                <p>2. Añada sus comentarios o la referencia a los mismos en otro documento anexo en la columna "Comentarios."</p>
            </div>
        </div>
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
        <input type="submit" value="Guardar">
        <a href="" class="btn btn-success">Editar</a>

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
    <form method="POST" name="formCriterio1" action="{{ route('searchs.store') }}">
        @csrf
        <div class="row">
            <div class="col-1">
                BU.1
            </div>
            <div class="col-3">
                La búsqueda, si  es necesaria, se encuentra accesible desde todas las páginas del sitio.
            </div>
            <div class="col-2">
                @yield('contentSelect2')
            </div>
            @yield('contentForm')
        </div>
    </form>

    <!--CRITERIO 2-->
    <form method="POST" name="formCriterio2" action="{{ route('searchs.store') }}">
        @csrf
        <div class="row">
            <div class="col-1">
                BU.2
            </div>
            <div class="col-3">
                Es fácilmente reconocible como tal.
            </div>
            <div class="col-2">
                @yield('contentSelect')
            </div>
            @yield('contentForm')
        </div>
    </form>

    <!--CRITERIO 3-->
    <form method="POST" name="formCriterio3" action="{{ route('searchs.store') }}">
        @csrf
        <div class="row">
            <div class="col-1">
                BU.3
            </div>
            <div class="col-3">
                Se encuentra fácilmente accesible.
            </div>
            <div class="col-2">
                @yield('contentSelect')
            </div>
            @yield('contentForm')
        </div>
    </form>

    <!--CRITERIO 4-->
    <form method="POST" name="formCriterio4" action="{{ route('searchs.store') }}">
        @csrf
        <div class="row">
            <div class="col-1">
                BU.4
            </div>
            <div class="col-3">
                La caja de texto es lo suficientemente ancha.
            </div>
            <div class="col-2">
                @yield('contentSelect')
            </div>
            @yield('contentForm')
        </div>
    </form>

    <!--CRITERIO 5-->
    <form method="POST" name="formCriterio5" action="{{ route('searchs.store') }}">
        @csrf
        <div class="row">
            <div class="col-1">
                BU.5
            </div>
            <div class="col-3">
                Sistema de búsqueda simple y claro.
            </div>
            <div class="col-2">
                @yield('contentSelect')
            </div>
            @yield('contentForm')
        </div>
    </form>

    <!--CRITERIO 6-->
    <form method="POST" name="formCriterio6" action="{{ route('searchs.store') }}">
        @csrf
        <div class="row">
            <div class="col-1">
                BU.6
            </div>
            <div class="col-3">
                Permite la búsqueda avanzada.
            </div>
            <div class="col-2">
                @yield('contentSelect')
            </div>
            @yield('contentForm')
        </div>
    </form>

    <!--CRITERIO 7-->
    <form method="POST" name="formCriterio7" action="{{ route('searchs.store') }}">
        @csrf
        <div class="row">
            <div class="col-1">
                BU.7
            </div>
            <div class="col-3">
                Muestra los resultados de la búsqueda de forma comprensible para el usuario.
            </div>
            <div class="col-2">
                @yield('contentSelect')
            </div>
            @yield('contentForm')
        </div>
    </form>

    <!--CRITERIO 8-->
    <form method="POST" name="formCriterio8" action="{{ route('searchs.store') }}">
        @csrf
        <div class="row">
            <div class="col-1">
                BU.8
            </div>
            <div class="col-3">
                Asiste al usuario en caso de no poder ofrecer resultados para una consulta dada.
            </div>
            <div class="col-2">
                @yield('contentSelect')
            </div>
            @yield('contentForm')
        </div>
    </form>

</div>


@endsection

