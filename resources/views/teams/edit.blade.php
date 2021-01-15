@extends('layouts.app')
@section('content')
    <div class="card mt-3">
        <div class="card-header d-inline-flex">
            <b><h1>Formulario equipos</h1></b>
            <a href="{{ route('teams.index')}}" class="btn btn-link ml-auto">
                <i class="fa fa-arrow-left"></i></a>
        </div>

        <div class="card-body">

            <form method="POST" name="" action="{{ route('teams.update', $team->id) }}">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="">Carrera</label>
                            <select name="engineering" id="" required>
                                <option value="{{ $team->engineering }}">{{ $team->engineering }}</option>
                                <option value="Ingeniería Informática">Ingeniería Informática</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="" class="col-form-label">Semestre</label>
                            <select name="semester" id="" required>
                                <option value="{{ $team->semester }}">{{ $team->semester }}</option>
                                @for($i = 1; $i<=13;$i++)
                                    <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                            </select>
                        </div>
                    </div>
                </div>
                <a href="{{ route('teams.index') }}" class="btn btn-secondary" tabindex="5">Cancelar</a>
                <button type="submit" class="btn btn-primary" tabindex="4">Actualizar</button>
            </form>
        </div>
    </div>
@endsection
