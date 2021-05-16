@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Criterios del Heurístico "Elementos Multimedia"</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-9">
                    <p>Elementos relacionados con el grado de adecuación de los contenidos multimedia al sitio web.</p>
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

