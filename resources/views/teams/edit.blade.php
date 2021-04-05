@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <a class="btn btn-primary float-right" href="{{ route('teams.index')}}">Regresar</a>
    <h1>Editar equipo</h1>
@stop

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">

                <div>
                    {!! Form::model($team, ['route' => ['teams.update', $team], 'method' => 'PUT']) !!}

                    <div class="form-group">
                        {!! Form::label('name', 'Nombre') !!}
                        {!! Form::text('name', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        <h2 class="h5">Listado de Alumnos</h2>

                        <div>
                            <table class="table table-striped" id="alumnos">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th>
                                        Nombre
                                    </th>
                                    <th>
                                        Apellido
                                    </th>
                                    <th>Número de control</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($students as $student)
                                    <tr>
                                        <td>
                                            {!! Form::checkbox('users[]',$student->id, null, ['class' => 'mr-1']) !!}
                                        </td>

                                        <td>{{ $student->name }}</td>
                                        <td>{{ $student->lastName }}</td>
                                        <td>{{ $student->controlNumber }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>

                    {!! Form::submit('Guardar', ['class' => 'btn btn-primary mt-2']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css">

@stop

@section('js')
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
            crossorigin="anonymous"></script>

    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.7/js/responsive.bootstrap4.min.js"></script>


    <script>
        $('#alumnos').DataTable();
    </script>

@stop


