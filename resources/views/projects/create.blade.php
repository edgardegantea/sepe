@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="card mt-3">
            <div class="card-header d-inline-flex">
                <b><h1>Crear nuevo Proyecto</h1></b>
            </div>

            <div class="card-body">

                <form method="POST" name="" action="{{ route('projects.store') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="" class="col-form-label">Nombre del proyecto</label>
                        <input type="text" class="form-control" name="name" value="" required>
                    </div>

                    <div class="mb-3">
                        <label for="" class="col-form-label">Semestre</label>
                        <select name="semester" id="" required>
                            <option value="">--Selecciona tu semestre--</option>
                            @for($i = 1; $i<=13;$i++)
                                <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="" class="col-form-label">Descripción</label>
                        <textarea class="form-control" name="description"></textarea>
                    </div>

                    <a href="{{ route('projects.index') }}" class="btn btn-secondary" tabindex="5">Cancelar</a>
                    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>

                </form>

            </div>
        </div>

    </div>

@endsection
