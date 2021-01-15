@extends('layouts.app')
@section('content')
    <div class="card mt-3">
        <div class="card-header d-inline-flex">
            <b><h1>Formulario asignaturas</h1></b>
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
                    <div class="col-12">
                        <div class="form-group">
                            <label for="">Docente asignado</label>
                            <input type="text" class="form-control" name="teacher" value="" required>
                        </div>
                    </div>
                </div>

                <a href="{{ route('subjects.index') }}" class="btn btn-secondary" tabindex="5">Cancelar</a>
                <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>

            </form>
        </div>
    </div>
@endsection
