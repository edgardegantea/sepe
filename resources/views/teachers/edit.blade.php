@extends('layouts.app')
@section('content')
    <div class="card mt-3">
        <div class="card-header d-inline-flex">
            <b><h1>Actualizar datos</h1></b>
            <a href="{{ route('teachers.index')}}" class="btn btn-link ml-auto">
                <i class="fa fa-arrow-left"></i></a>
        </div>
        <div class="card-body">
            <form action="{{ route('teachers.update', $teacher->id)}}" method="POST">
                @csrf

                @method('PUT')

                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="">Nombre</label>
                            <input type="text" class="form-control" name="firstName" value="{{ $teacher->firstName }}"
                                   required>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="">Apellidos</label>
                            <input type="text" class="form-control" name="lastName" value="{{ $teacher->lastName }}"
                                   required>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="">Número de control</label>
                            <input type="text" class="form-control" name="controlNumber"
                                   value="{{ $teacher->controlNumber }}" required>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="">Correo electrónico institucional</label>
                            <input type="text" class="form-control" name="email" value="{{ $teacher->email }}" required>
                        </div>
                    </div>
                </div>

                <a href="{{ route('teachers.index') }}" class="btn btn-secondary" tabindex="5">Regresar</a>
                <button type="submit" class="btn btn-primary" tabindex="4">Actualizar</button>
            </form>
        </div>
    </div>
    </div>
@endsection
