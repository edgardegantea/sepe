@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear nueva asignatura</h1>
@stop

@section('content')

    <div class="container">


        <div class="card mt-3">
            <div class="card-header d-inline-flex">
                <a href="{{ route('subjects.index')}}" class="btn btn-link ml-auto">
                    <i class="fa fa-arrow-left"></i></a>
            </div>
            <div class="card-body">
                <form action="{{ route('subjects.store')}}" method="POST">
                    @csrf
                    <div class="row">

                        <div class="col-12">
                            <div class="form-group">
                                <label for="">Nombre de la asignatura</label>
                                <input type="text" class="form-control" name="name" value="" required>
                            </div>
                        </div>

                    </div>

                    <a href="{{ route('subjects.index') }}" class="btn btn-secondary" tabindex="5">Cancelar</a>
                    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
                </form>
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
