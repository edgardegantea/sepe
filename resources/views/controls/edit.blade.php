@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Criterios del "Control y Retroalimentación"</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-9">
                    <p>Elementos relacionados con libertad del usuario en la navegación y la información proporcionada
                        al mismo en el proceso.</p>
                </div>
                <div class="col-3">
                    <a href="{{route('projects.show', $control->project_id)}}" class="btn btn-danger float-right">
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
            <form method="POST" name="" action="{{route('controls.update', $control->project_id)}}">
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
                                       value="{{$item->relevancia}}" required maxlength="200" placeholder="Escribir">
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
                <input type="hidden" name="id_project" value="{{$control->project_id}}">
                <input type="submit" class="btn btn-success float-right">
            </form>
        </div>
    </div>
@endsection
