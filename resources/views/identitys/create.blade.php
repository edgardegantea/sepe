@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Criterios del Heurístico "Identidad e Información"</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-9">
                    <p>Elementos relacionados con la identidad del sitio, la información proporcionada sobre el proveedor y la autoría de los contenidos.</p>
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
            <form method="POST" name="" action="{{ route('identitys.store') }}">
                @csrf
                <table class="table table-striped">
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
                            II.1
                            <input type="hidden" name="codigo[]" value="II.1" maxlength="10">
                        </td>
                        <td>
                            Identidad o logotipo significativo, identificable y suficientemente visible.
                            <input type="hidden" name="criterio[]" id=""
                                   value="Identidad o logotipo significativo, identificable y suficientemente visible.">
                        </td>
                        <td>
                            @include('partials.selectOne')
                        </td>
                        @include('partials.camposForm')
                    </tr>
                    <tr>
                        <td>
                            II.2
                            <input type="hidden" name="codigo[]" value="II.2" maxlength="10">
                        </td>
                        <td>
                            Identidad del sitio en todas las páginas.
                            <input type="hidden" name="criterio[]" id=""
                                   value="Identidad del sitio en todas las páginas.">
                        </td>
                        <td>
                            @include('partials.selectTwo')
                        </td>
                        @include('partials.camposForm')
                    </tr>
                    <tr>
                        <td>
                            II.3
                            <input type="hidden" name="codigo[]" value="II.3" maxlength="10">
                        </td>
                        <td>
                            Eslogan o tagline adecuado al objetivo del sitio.
                            <input type="hidden" name="criterio[]" id=""
                                   value="Eslogan o tagline adecuado al objetivo del sitio.">
                        </td>
                        <td>
                            @include('partials.selectOne')
                        </td>
                        @include('partials.camposForm')
                    </tr>
                    <tr>
                        <td>
                            II.4
                            <input type="hidden" name="codigo[]" value="II.4" maxlength="10">
                        </td>
                        <td>
                            Se ofrece información sobre el sitio web, empresa.
                            <input type="hidden" name="criterio[]" id=""
                                   value="Se ofrece información sobre el sitio web, empresa.">
                        </td>
                        <td>
                            @include('partials.selectTwo')
                        </td>
                        @include('partials.camposForm')
                    </tr>
                    <tr>
                        <td>
                            II.5
                            <input type="hidden" name="codigo[]" value="II.5" maxlength="10">
                        </td>
                        <td>
                            Existen mecanismos de contacto.
                            <input type="hidden" name="criterio[]" id="" value="Existen mecanismos de contacto.">
                        </td>
                        <td>
                            @include('partials.selectTwo')
                        </td>
                        @include('partials.camposForm')
                    </tr>
                    <tr>
                        <td>
                            II.6
                            <input type="hidden" name="codigo[]" value="II.6" maxlength="10">
                        </td>
                        <td>
                            Se ofrece información sobre la protección de datos de carácter personal o los derechos de autor
                            de los contenidos del sitio web.
                            <input type="hidden" name="criterio[]" id=""
                                   value="Se ofrece información sobre la protección de datos de carácter personal o los derechos de autor de los contenidos del sitio web.">
                        </td>
                        <td>
                            @include('partials.selectTwo')
                        </td>
                        @include('partials.camposForm')
                    </tr>
                    <tr>
                        <td>
                            II.7
                            <input type="hidden" name="codigo[]" value="II.7" maxlength="10">
                        </td>
                        <td>
                            Se ofrece información sobre el autor, fuentes y fechas de creación y revisión en artículos,
                            noticias, informes.
                            <input type="hidden" name="criterio[]" id=""
                                   value="Se ofrece información sobre el autor, fuentes y fechas de creación y revisión en artículos, noticias, informes.">
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
