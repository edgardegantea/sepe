@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Criterios del Heurístico "Aspectos Generales"</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-9">
                    <p>Elementos relacionados con los objetos del sitio, el look & feel, coherencia y nivel de
                        actualización de contenidos.</p>
                </div>
                <div class="col-3">
                    <a href="{{route('projects.show', $aspecto->project_id)}}" class="btn btn-danger float-right">
                        Regresar</a>
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
            <form method="POST" name="" action="{{route('aspectos.update', $aspecto->project_id)}}">
                @csrf
                @method('PUT')
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th colspan="2">Código</th>
                        <th>Criterio</th>
                        <th>Valor</th>
                        <th>Relevancia</th>
                        <th>Comentario</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($evaluacion as $item)
                        <tr>
                            <td>
                                <input type="hidden" name="id[]" value="{{$item->id}}" maxlength="10">
                            </td>
                            <td>
                                {{$item->codigo}}
                                <input type="hidden" name="codigo[]" value="{{$item->codigo}}" maxlength="10">
                            </td>
                            <td>
                                {{$item->criterio}}
                                <input type="hidden" name="criterio[]" id="" value="{{$item->criterio}}">
                            </td>
                            <td>
                                <input type="number" name="valor[]" id="" value="{{$item->valor}}">
                            </td>
                            <td>
                                <input class="form-group" type="text" name="relevancia[]" id=""
                                       value="{{$item->relevancia}}" required maxlength="200"
                                       placeholder="Escribir">
                            </td>
                            <td>
                            <textarea class="form-group" name="comentario[]" id="" cols="30" rows="1"
                                      placeholder="Opcional">{{$item->comentario}}
                            </textarea>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <input type="hidden" name="id_project" value="{{$aspecto->project_id}}">
                <input type="submit" class="btn btn-success float-right">
            </form>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
            crossorigin="anonymous"></script>

@stop
