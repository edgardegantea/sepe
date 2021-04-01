@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <a href="{{ route('teams.index')}}" class="btn btn-primary float-right">Regresar</a>
    <h1>Crear nuevo equipo</h1>
@stop

@section('content')

    <div class="card">

        <div class="card-body">

            <form method="POST" name="" action="{{ route('teams.store') }}">
                @csrf

                <div class="mb-3">
                    <label for="" class="col-form-label ">Nombre de equipo:</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value=""
                           required>
                </div>

                <a href="{{ route('teams.index') }}" class="btn btn-secondary" tabindex="5">Cancelar</a>
                <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
            </form>

        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">

@stop

@section('js')
    <script> console.log('Hi!'); </script>

@stop
