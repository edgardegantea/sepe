@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <a href="{{ route('teams.show', $team ) }}" class="btn btn-warning float-right" tabindex="5">Cancelar</a>
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="card mt-3">
        <div class="card-body">

            @if($errors->any())
                <p>Hay errores!!</p>
            @endif

            <form method="POST" name="" action="{{ route('projects.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="" class="col-form-label ">Nombre del proyecto:</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" required>

                    @error('name')
                    <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>

                <div class="mb-3">
                    <label for="" class="col-form-label">Descripción:</label>
                    <textarea class="form-control" name="description" required></textarea>

                    @error('description')
                    <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>

                <div class="mb-3">
                    <label for="" class="col-form-label">Semestre: </label>
                    <select name="semester" id="" required>
                        <option value="">--Selecciona tu semestre--</option>
                        @for($i = 1; $i<=13;$i++)
                            <option value="{{ $i }}">{{ $i }}</option>
                        @endfor
                    </select>
                </div>

                <div class="form-group mt-3">
                    <label for="logo">Elegil logo: </label>

                    <input type="file" id="logo" class="form-group @error('logo') is-invalid @enderror" name="logo"
                           required>

                    @error('logo')
                    <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group mt-3">
                    <input type="hidden" name="status" value="Pendiente">
                </div>

                <div class="form-group">
                    <label for="subject">Asignatura eje:</label>

                    <select
                        name="subject_id"
                        class="form-control @error('subject_id') is-invalid @enderror"
                        id="subject_id" required>

                        <option value="">--Seleccione--</option>
                        @foreach( $materias as $materia )
                            <option
                                value="{{ $materia->id }}"
                                {{ old('materia') == $materia->id ? 'selected' : '' }}
                            >{{ $materia->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group mt-3">
                    <input type="hidden" name="team_id" value="{{ $team }}">
                </div>
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
