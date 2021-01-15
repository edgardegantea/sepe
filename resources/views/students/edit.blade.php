@extends('layouts.app')
@section('content')
    <div class="card mt-3">
        <div class="card-header d-inline-flex">
            <b><h1>Editar datos del estudiante</h1></b>
        </div>

        <div class="card-body">

            <form method="POST" name="" action="{{ route('students.update', $student->id) }}">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="">Nombre</label>
                            <input type="text" class="form-control" name="firstName" value="{{ $student->firstName }}"
                                   required>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="">Apellidos</label>
                            <input type="text" class="form-control" name="lastName" value="{{ $student->lastName }}"
                                   required>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="" class="col-form-label">Semestre</label>
                            <select name="semester" id="" required>
                                <option value="{{ $student->semester }}">{{ $student->semester }}</option>
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
                                <option value="{{ $student->engineering }}">{{ $student->engineering }}</option>
                                <option value="Ingeniería Informática">Ingeniería Informática</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="">Número de control</label>
                            <input type="text" class="form-control" name="controlNumber"
                                   value="{{ $student->controlNumber }}" required>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="">Correo electrónico institucional</label>
                            <input type="text" class="form-control" name="email" value="{{ $student->email }}" required>
                        </div>
                    </div>

                    <a href="{{ route('students.index') }}" class="btn btn-secondary" tabindex="5">Cancelar</a>
                    <button type="submit" class="btn btn-primary" tabindex="4">Actualizar</button>

                </div>
            </form>
        </div>
    </div>
@endsection
