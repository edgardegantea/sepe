@extends('layouts.app')
@section('content')
    <div class="card mt-3">
        <div class="card-header d-inline-flex">
            <b><h1>Formulario editar asignatura</h1></b>
            <a href="{{ route('subjects.index')}}" class="btn btn-primary ml-auto">
                <i class="fa fa-arrow-left">volver</i></a>
        </div>
        <div class="card-body">
            <form action="{{ route('subjects.update', $subject->idSubject)}}" method="POST"
                  enctype="multipart/form-data" id="create">
                @method('PUT')
                @include('subjects.partials.form')
            </form>
        </div>
        <div class="card-footer">
            <button class="btn btn-primary" form="create">
                <i class="fa fa-save"></i>
                Guardar cambios
            </button>
            <button class="btn btn-danger" form="delete_{{ $subject->idSubject}}"
                    onclick="return confirm('¿Esta seguro de eliminar registro?')">
                <i class="fa fa-trash"></i>
                Eliminar
            </button>
            <form action="{{ route('subjects.destroy', $subject->idSubject) }}" id="delete_{{$subject->idSubject}}"
                  method="post" enctype="multipart/form-data" hidden>
                @csrf
                @method('DELETE')
            </form>
        </div>
    </div>
@endsection
