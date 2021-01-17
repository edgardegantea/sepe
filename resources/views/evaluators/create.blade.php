@extends('layouts.app')

@section('content')
    <div class="card mt-3">
        <div class="card-header d-inline-flex">
            <b><h1>Formulario evaluadores</h1></b>
            <a href="{{ route('evaluators.index')}}" class="btn btn-link ml-auto">
                <i class="fa fa-arrow-left"></i></a>
        </div>
        <div class="card-body">
            <form action="{{ route('evaluators.store')}}" method="POST">
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
                            <label for="">Correo electrónico institucional</label>
                            <input type="text" class="form-control" name="email" value="" required>
                        </div>
                    </div>
                </div>
                <a href="{{ route('evaluators.index') }}" class="btn btn-secondary" tabindex="5">Cancelar</a>
                <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
            </form>
        </div>
    </div>
@endsection
