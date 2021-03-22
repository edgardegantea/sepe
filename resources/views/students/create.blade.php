@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <a class="btn btn-primary float-right" href="{{ route('students.index') }}">Regresar</a>
    <h1>Crear nuevo Estudiante</h1>
@stop

@section('content')

    <div class="card mt-3">
        <div class="card-body">
            <form method="POST" name="" action="{{ route('students.store') }}">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="">Nombre</label>
                            <input type="text" class="form-control" name="firstName" value="" required>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="">Apellidos</label>
                            <input type="text" class="form-control" name="lastName" value="" required>
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
                            <label for="">Número de control</label>
                            <input type="text" class="form-control" name="controlNumber" value="" required>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="">Correo electrónico institucional</label>
                            <input type="text" class="form-control" name="email" value="" required>
                        </div>
                    </div>

                    <a href="{{ route('students.index') }}" class="btn btn-secondary mr-2" tabindex="5">Cancelar</a>
                    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
                </div>
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
