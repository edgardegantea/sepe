@extends('adminlte::page')

@section('title', 'Crear asignatura')

@section('content_header')
    <a class="btn btn-warning float-right" href="{{ route('subjects.index') }}">Regresar</a>
    <h1>Crear nueva asignatura</h1>
@stop

@section('content')

    <div class="card text-center">
        <div class="card-header">
            <h3>Asignatura Eje:</h3>
        </div>
        <div class="card-body">
            <p class="card-text">
            {!! Form::open(['route' => 'subjects.store']) !!}

            <div class="form-group">
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Escribir...']) !!}

                @error('name')
                <span class="text-danger">{{ $message }}</span>
                @enderror

            </div>

            {!! Form::submit('Crear', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
            </p>
        </div>
    </div>
@stop

@section('css')
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
            crossorigin="anonymous"></script>
    <script> console.log('Hi!'); </script>
@stop
