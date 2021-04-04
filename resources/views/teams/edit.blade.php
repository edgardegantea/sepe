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

                    <h2 class="h5">Listado de Alumnos</h2>
                    @foreach($students as $student)
                        <div>
                            <label>
                                {!! Form::checkbox('users[]',$student->id, null, ['class' => 'mr-1']) !!}
                                {{ $student->name }} {{ $student->lastName }}
                            </label>
                        </div>
                    @endforeach

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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

@stop

@section('js')
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

@stop


