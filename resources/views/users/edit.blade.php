@extends('layouts.app')
@section('content')
    <div class="card mt-3">
        <div class="card-header d-inline-flex">
            <b>Formulario editar usuarios</b>
            <a href="{{ route('users.index')}}" class="btn btn-primary ml-auto">
                <i class="fa fa-arrow-left">volver</i></a>
        </div>
        <div class="card-body">
            <form action="{{ route('users.update', $user->id_Users)}}" method="POST" enctype="multipart/form-data"
                  id="create">
                @method('PUT')
                @include('users.partials.form')
            </form>
        </div>
        <div class="card-footer">
            <button class="btn btn-primary" form="create">
                <i class="fa fa-save"></i>
                Guardar cambios
            </button>
            <button class="btn btn-danger" form="delete_{{ $user->id_Users}}"
                    onclick="return confirm('¿Esta seguro de eliminar registro?')">
                <i class="fa fa-trash"></i>
                Eliminar
            </button>
            <form action="{{ route('users.destroy', $user->id_Users) }}" id="delete_{{$user->id_Users}}" method="post"
                  enctype="multipart/form-data" hidden>
                @csrf
                @method('DELETE')
            </form>
        </div>
    </div>
@endsection
