@extends('adminlte::page')

@section('title', 'Editar Proyecto')

@section('content_header')
    <h1>Editar Proyecto</h1>
@stop

@section('content')
    <div class="container">
        <div class="card mt-3">
            <div class="card-body">

                <form method="POST" name="" action="{{ route('projects.update', $project->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="" class="col-form-label">Nombre del proyecto</label>
                        <input type="text" class="form-control" name="name" value="{{ $project->name }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="" class="col-form-label">Semestre</label>
                        <select name="semester" id="" required>
                            <option value="{{ $project->semester }}">{{ $project->semester }}</option>
                            @for($i = 1; $i<=13;$i++)
                                <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>
                    </div>

                    <div class="form-group mt-4">
                        <p>Imagen actual</p>

                        <img src="/storage/{{ $project->logo }}" style="width: 200px">


                        <label for="logo">Elegil logo</label>

                        <input type="file" id="logo" class="form-group @error('logo') is-invalid @enderror" name="logo">

                        @error('logo')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="" class="col-form-label">Descripción</label>
                        <textarea class="form-control" name="description">{{ $project->description }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="subject">Asignatura</label>

                        <select
                            name="subject_id"
                            class="form-control @error('subject_id') is-invalid @enderror"
                            id="subject_id">

                            <option value="">{{ $project->subject->id }}</option>
                            @foreach( $subjects as $subject )
                                <option
                                    value="{{ $subject->id }}"
                                    {{ $project->subject_id == $subject->id ? 'selected' : '' }}>
                                    {{ $subject->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <a href="{{ route('projects.index') }}" class="btn btn-secondary" tabindex="5">Cancelar</a>
                    <button type="submit" class="btn btn-primary" tabindex="4">Actualizar</button>

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
