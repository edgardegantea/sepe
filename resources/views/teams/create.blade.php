@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear nuevo equipo</h1>
@stop

@section('content')
    <div class="container">
        <div class="card mt-3">
            <div class="card-header d-inline-flex">
                <a href="{{ route('teams.index')}}" class="btn btn-link ml-auto">
                    <i class="fa fa-arrow-left"></i></a>
            </div>

            <div class="card-body">

                <form method="POST" name="" action="{{ route('teams.store') }}">
                    @csrf

                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="">Carrera</label>
                                <select name="engineering" id="" required>
                                    <option value="">--Seleccione tu carrera--</option>
                                    <option value="Ingeniería Informática">Ingeniería Informática</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="" class="col-form-label">Semestre</label>
                                <select name="semester" id="" required>
                                    <option value="">--Selecciona tu semestre--</option>
                                    @for($i = 1; $i<=13;$i++)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                </select>
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('teams.index') }}" class="btn btn-secondary" tabindex="5">Cancelar</a>
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
