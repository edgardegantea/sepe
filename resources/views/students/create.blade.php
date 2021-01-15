@extends('layouts.app')
@section('content')
    <div class="card mt-3">
        <div class="card-header d-inline-flex">
            <b><h1>Formulario estudiantes</h1></b>
            <a href="{{ route('students.index')}}" class="btn btn-link ml-auto">
                <i class="fa fa-arrow-left"></i></a>
        </div>

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

                    <a href="{{ route('students.index') }}" class="btn btn-secondary" tabindex="5">Cancelar</a>
                    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
                </div>
            </form>
        </div>
    </div>
@endsection
