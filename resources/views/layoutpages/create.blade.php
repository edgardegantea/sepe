@extends('layouts.app')

@section('content')

    <h2>CRITERIOS DEL "LAYOUT DE LA PÁGINA":</h2>
    <h4>Elementos relacionados con la distribución y el aspecto de los elementos de navegación e información en la interfaz.</h4>

    <div class="container">
        <a href="{{ route('proyectos.index') }}" class="btn btn-primary">Proyectos</a>
        <a href="{{ route('structures.create') }}" class="btn btn-primary">Evaluación anterior</a>
        <a href="{{ route('controls.create') }}" class="btn btn-primary">Siguiente evaluación</a>
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
    <form method="POST" name="formCriterio1" action="{{ route('layoutpages.store') }}">
        @csrf
        <div class="row">
            <div class="col-1">
                LA.1
            </div>
            <div class="col-3">
                Se aprovechan las zonas de alta jerarquía informativa de la página para contenidos de mayor relevancia.
            </div>
            <div class="col-2">
                @yield('contentSelect2')
            </div>
            @yield('contentForm')
        </div>
    </form>

    <!--CRITERIO 2-->
    <form method="POST" name="formCriterio2" action="{{ route('layoutpages.store') }}">
        @csrf
        <div class="row">
            <div class="col-1">
                LA.2
            </div>
            <div class="col-3">
                Se ha evitado la sobrecarga informativa.
            </div>
            <div class="col-2">
                @yield('contentSelect2')
            </div>
            @yield('contentForm')
        </div>
    </form>

    <!--CRITERIO 3-->
    <form method="POST" name="formCriterio3" action="{{ route('layoutpages.store') }}">
        @csrf
        <div class="row">
            <div class="col-1">
                LA.3
            </div>
            <div class="col-3">
                Es una interfaz limpia, sin ruido visual.
            </div>
            <div class="col-2">
                @yield('contentSelect2')
            </div>
            @yield('contentForm')
        </div>
    </form>

    <!--CRITERIO 4-->
    <form method="POST" name="formCriterio4" action="{{ route('layoutpages.store') }}">
        @csrf
        <div class="row">
            <div class="col-1">
                LA.4
            </div>
            <div class="col-3">
                Existen zonas en blanco entre los objetos informativos de la página para poder descansar la vista.
            </div>
            <div class="col-2">
                @yield('contentSelect2')
            </div>
            @yield('contentForm')
        </div>
    </form>

    <!--CRITERIO 5-->
    <form method="POST" name="formCriterio5" action="{{ route('layoutpages.store') }}">
        @csrf
        <div class="row">
            <div class="col-1">
                LA.5
            </div>
            <div class="col-3">
                Uso correcto del espacio visual de la página.
            </div>
            <div class="col-2">
                @yield('contentSelect')
            </div>
            @yield('contentForm')
        </div>
    </form>

    <!--CRITERIO 6-->
    <form method="POST" name="formCriterio6" action="{{ route('layoutpages.store') }}">
        @csrf
        <div class="row">
            <div class="col-1">
                LA.6
            </div>
            <div class="col-3">
                Se utiliza correctamente la jerarquía visual para expresar las relaciones del tipo "parte de" entre los elementos de la página.
            </div>
            <div class="col-2">
                @yield('contentSelect')
            </div>
            @yield('contentForm')
        </div>
    </form>

    <!--CRITERIO 7-->
    <form method="POST" name="formCriterio7" action="{{ route('layoutpages.store') }}">
        @csrf
        <div class="row">
            <div class="col-1">
                LA.7
            </div>
            <div class="col-3">
                Se ha controlado la longitud de página.
            </div>
            <div class="col-2">
                @yield('contentSelect2')
            </div>
            @yield('contentForm')
        </div>
    </form>

    <!--CRITERIO 8-->
    <form method="POST" name="formCriterio8" action="{{ route('layoutpages.store') }}">
        @csrf
        <div class="row">
            <div class="col-1">
                LA.8
            </div>
            <div class="col-3">
                La versión impresa de la página es correcta.
            </div>
            <div class="col-2">
                @yield('contentSelect2')
            </div>
            @yield('contentForm')
        </div>
    </form>

    <!--CRITERIO 9-->
    <form method="POST" name="formCriterio9" action="{{ route('layoutpages.store') }}">
        @csrf
        <div class="row">
            <div class="col-1">
                LA.9
            </div>
            <div class="col-3">
                El texto de la página se lee sin dificultad.
            </div>
            <div class="col-2">
                @yield('contentSelect2')
            </div>
            @yield('contentForm')
        </div>
    </form>

    <!--CRITERIO 10-->
    <form method="POST" name="formCriterio10" action="{{ route('layoutpages.store') }}">
        @csrf
        <div class="row">
            <div class="col-1">
                LA.10
            </div>
            <div class="col-3">
                Se ha evitado el texto parpadeante / deslizante.
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

