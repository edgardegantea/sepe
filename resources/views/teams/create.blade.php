@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <a href="{{ route('teams.index')}}" class="btn btn-warning float-right">Regresar</a>
    <h3>Crear nuevo equipo</h3>
@stop

@section('content')
    <div class="card text-center">
        <div class="card-body">
            <div class="card-text">
                <form method="POST" name="" action="{{ route('teams.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="" class="col-form-label">Nombre de equipo:</label>
                        <input type="text" placeholder="Escribir..."
                               class="form-control @error('name') is-invalid @enderror" name="name" value=""
                               required>
                    </div>
                    <button type="submit" class="btn btn-primary" tabindex="4">Crear</button>
                </form>
            </div>
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
