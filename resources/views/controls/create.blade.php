@extends('layouts.app')

@section('content')

    <h2>CRITERIOS DEL "CONTROL Y RETROALIMENTACIÓN":</h2>
    <h4>Elementos relacionados con libertad del usuario en la navegación y la información proporcionada al mismo en el proceso.</h4>

    <div class="container">
        <a href="{{ route('proyectos.index') }}" class="btn btn-primary">Proyectos</a>
        <a href="{{ route('layoutpages.create') }}" class="btn btn-primary">Evaluación anterior</a>
        <a href="{{ route('searchs.create') }}" class="btn btn-primary">Siguiente evaluación</a>
    </div>

@section('contentSelect')
    <select name="valor[]" id="" class="form-control" required>
        <option value="">Seleccionar</option>
        @for($i = 0; $i<=10;$i++)
            <option value="{{ $i }}">{{ $i }}</option>
        @endfor
        <option value="NA">NA</option>
    </select>
@endsection

@section('contentSelect2')
    <select name="valor[]" id="" class="form-control" required>
        <option value="">Seleccionar</option>
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
        <input type="text" name="relevancia[]" id="" required maxlength="100">
    </div>
    <div class="col-2">
        <textarea name="comentario[]" id="" cols="30" rows="1"></textarea>
    </div>
    <div class="col-2">
        <!--<input type="submit">-->
        <a href="">Enviar</a>
        <a href="">Editar</a>

    </div>
@endsection


<!-- Tabla -->
<!--****************************** TABLA CON DIV ********************************************-->
<form method="POST" action="{{ route('controls.store') }}">
    @csrf
<div class="container">
    <!--CABECERA DE LA TABLA-->
    <div class="form-group row">
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

        <div class="row">
            <div class="col-1">
                CR.1
                <input type="hidden" name="codigo" value="CR.1">
            </div>
            <div class="col-3">
                El usuario tiene todo el control sobre la interfaz.
                <input type="hidden" name="criterio" value="El usuario tiene todo el control sobre la interfaz.">
            </div>
            <div class="col-2">
                @yield('contentSelect2')
            </div>
            @yield('contentForm')
        </div>
    <!--</form>-->

    <!--CRITERIO 2-->

        <div class="row">
            <div class="col-1">
                CR.2
                <input type="hidden" name="codigo" value="CR.2">
            </div>
            <div class="col-3">
                Se informa al usuario acerca de lo que está pasando.
                <input type="hidden" name="criterio" value="Se informa al usuario acerca de lo que está pasando.">
            </div>
            <div class="col-2">
                @yield('contentSelect2')
            </div>
            @yield('contentForm')
        </div>


    <!--CRITERIO 3-->

        <div class="row">
            <div class="col-1">
                CR.3
                <input type="hidden" name="codigo" value="CR.3">
            </div>
            <div class="col-3">
                Se informa al usuario de lo que ha pasado.
                <input type="hidden" name="criterio" value="Se informa al usuario de lo que ha pasado.">
            </div>
            <div class="col-2">
                @yield('contentSelect2')
            </div>
            @yield('contentForm')
        </div>


    <!--CRITERIO 4-->

        <div class="row">
            <div class="col-1">
                CR.4
                <input type="hidden" name="codigo" value="CR.4">
            </div>
            <div class="col-3">
                Existen sistemas de validación antes de que el usuario envíe información para tratar de evitar errores.
                <input type="hidden" name="criterio" value="Existen sistemas de validación antes de que el usuario envíe información para tratar de evitar errores.">
            </div>
            <div class="col-2">
                @yield('contentSelect2')
            </div>
            @yield('contentForm')
        </div>


    <!--CRITERIO 5-->

        <div class="row">
            <div class="col-1">
                CR.5
                <input type="hidden" name="codigo" value="CR.5">
            </div>
            <div class="col-3">
                Cuando se produce un error, se informa de forma clara y no alarmista al usuario de lo ocurrido y de cómo solucionar el problema.
                <input type="hidden" name="criterio" value="Cuando se produce un error, se informa de forma clara y no alarmista al usuario de lo ocurrido y de cómo solucionar el problema.">
            </div>
            <div class="col-2">
                @yield('contentSelect')
            </div>
            @yield('contentForm')
        </div>


    <!--CRITERIO 6-->

        <div class="row">
            <div class="col-1">
                CR.6
                <input type="hidden" name="codigo" value="CR.6">
            </div>
            <div class="col-3">
                Se ha controlado el tiempo de respuesta.
                <input type="hidden" name="criterio" value="Se ha controlado el tiempo de respuesta.">
            </div>
            <div class="col-2">
                @yield('contentSelect')
            </div>
            @yield('contentForm')
        </div>


    <!--CRITERIO 7-->

        <div class="row">
            <div class="col-1">
                CR.7
                <input type="hidden" name="codigo" value="CR.7">
            </div>
            <div class="col-3">
                Se ha evitado que las ventanas del sitio anulen o se superpongan a la del navegador.
                <input type="hidden" name="criterio" value="Se ha evitado que las ventanas del sitio anulen o se superpongan a la del navegador.">
            </div>
            <div class="col-2">
                @yield('contentSelect2')
            </div>
            @yield('contentForm')
        </div>


    <!--CRITERIO 8-->

        <div class="row">
            <div class="col-1">
                CR.8
                <input type="hidden" name="codigo" value="CR.8">
            </div>
            <div class="col-3">
                Se ha evitado la proliferación de ventanas en la pantalla del usuario.
                <input type="hidden" name="criterio" value="Se ha evitado la proliferación de ventanas en la pantalla del usuario.">
            </div>
            <div class="col-2">
                @yield('contentSelect2')
            </div>
            @yield('contentForm')
        </div>


    <!--CRITERIO 9-->

        <div class="row">
            <div class="col-1">
                CR.9
                <input type="hidden" name="codigo" value="CR.9">
            </div>
            <div class="col-3">
                Se ha evitado la descarga por parte del usuario de plugins adicionales.
                <input type="hidden" name="criterio" value="Se ha evitado la descarga por parte del usuario de plugins adicionales.">
            </div>
            <div class="col-2">
                @yield('contentSelect2')
            </div>
            @yield('contentForm')
        </div>


    <!--CRITERIO 10-->

        <div class="row">
            <div class="col-1">
                CR.10
                <input type="hidden" name="codigo" value="CR.10">
            </div>
            <div class="col-3">
                Si existen tareas de varios pasos, se indica al usuario en cual está y cuantos faltan para completar la tarea.
                <input type="hidden" name="criterio" value="Si existen tareas de varios pasos, se indica al usuario en cual está y cuantos faltan para completar la tarea.">
            </div>
            <div class="col-2">
                @yield('contentSelect2')
            </div>
            @yield('contentForm')
        </div>
</div>
    <input type="submit">
</form>
<h3>Instrucciones</h3>
<p>1. Evalue cada criterio y rellene la columna "Valor" según la leyenda.</p>
<p>2. Añada sus comentarios o la referencia a los mismos en otro documento anexo en la columna "Comentarios."</p>

@endsection
