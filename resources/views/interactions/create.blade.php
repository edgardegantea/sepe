@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Criterios del Heurístico "Entendibilidad y Facilidad en la Interacción"</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-9">
                    <p>Elementos relacionados con la adecuación y calidad de los contenidos textuales, iconos y
                        controles de lainterfaz.</p>
                </div>
                <div class="col-3">
                    <a href="{{route('projects.show', $projects)}}" class="btn btn-danger float-right"> Regresar</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    @include('partials.instructions')
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <form method="POST" name="" action="{{ route('interactions.store') }}">
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
                            EF.1
                            <input type="hidden" name="codigo[]" value="EF.1" maxlength="10">
                        </td>
                        <td>
                            Se emplea un lenguaje claro y conciso.
                            <input type="hidden" name="criterio[]" id=""
                                   value="Se emplea un lenguaje claro y conciso.">
                        </td>
                        <td>
                            @include('partials.selectTwo')
                        </td>
                        @include('partials.camposForm')
                    </tr>

                    <!--Criterio 2-->
                    <tr>
                        <td>
                            EF.2
                            <input type="hidden" name="codigo[]" value="EF.2" maxlength="10">
                        </td>
                        <td>
                            Lenguaje amigable, familiar y cercano.
                            <input type="hidden" name="criterio[]" id=""
                                   value="Lenguaje  amigable, familiar y cercano.">
                        </td>
                        <td>
                            @include('partials.selectTwo')
                        </td>
                        @include('partials.camposForm')
                    </tr>

                    <!--Criterio 3-->
                    <tr>
                        <td>
                            EF.3
                            <input type="hidden" name="codigo[]" value="EF.3" maxlength="10">
                        </td>
                        <td>
                            Cada párrafo expresa una idea.
                            <input type="hidden" name="criterio[]" id=""
                                   value="Cada párrafo expresa una idea.">
                        </td>
                        <td>
                            @include('partials.selectTwo')
                        </td>
                        @include('partials.camposForm')
                    </tr>

                    <!--Criterio 4-->
                    <tr>
                        <td>
                            EF.4
                            <input type="hidden" name="codigo[]" value="EF.4" maxlength="10">
                        </td>
                        <td>
                            Uso consistente de los controles de la interfaz.
                            <input type="hidden" name="criterio[]" id=""
                                   value="Uso consistente de los controles de la interfaz.">
                        </td>
                        <td>
                            @include('partials.selectTwo')
                        </td>
                        @include('partials.camposForm')
                    </tr>

                    <!--Criterio 5-->
                    <tr>
                        <td>
                            EF.5
                            <input type="hidden" name="codigo[]" value="EF.5" maxlength="10">
                        </td>
                        <td>
                            Metáforas visuales reconocibles y comprensibles por cualquier usuario (ej.: iconos).
                            <input type="hidden" name="criterio[]" id=""
                                   value="Metáforas visuales reconocibles y comprensibles por cualquier usuario (ej.: iconos).">
                        </td>
                        <td>
                            @include('partials.selectTwo')
                        </td>
                        @include('partials.camposForm')
                    </tr>

                    <!--Criterio 6-->
                    <tr>
                        <td>
                            EF.6
                            <input type="hidden" name="codigo[]" value="EF.6" maxlength="10">
                        </td>
                        <td>
                            Si se usan menús desplegables, orden coherente o alfabético.
                            <input type="hidden" name="criterio[]" id=""
                                   value="Si se usan menús desplegables, orden coherente o alfabético.">
                        </td>
                        <td>
                            @include('partials.selectTwo')
                        </td>
                        @include('partials.camposForm')
                    </tr>

                    <!--Criterio 7-->
                    <tr>
                        <td>
                            EF.7
                            <input type="hidden" name="codigo[]" value="EF.7" maxlength="10">
                        </td>
                        <td>
                            Si el usuario tiene que rellenar un campo, las opciones disponibles se pueden seleccionar en
                            vez de tener que escribirlas.
                            <input type="hidden" name="criterio[]" id=""
                                   value="Si el usuario tiene que rellenar un campo, las opciones  disponibles se pueden seleccionar en vez de tener que escribirlas.">
                        </td>
                        <td>
                            @include('partials.selectTwo')
                        </td>
                        @include('partials.camposForm')
                    </tr>
                    </tbody>
                </table>
                <input type="hidden" name="project_id" value="{{$projects}}">
                <input type="submit" class="btn btn-success float-right">
            </form>
        </div>
    </div>

@stop
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
@section('js')
@stop
