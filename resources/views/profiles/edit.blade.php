@extends('layouts.app')
@section('content')
    <div class="card mt-3">
        <div class="card-header d-inline-flex">
            <b>Formulario editar perfiles</b>
            <a href="{{ route('profiles.index')}}" class="btn btn-primary ml-auto">
                <i class="fa fa-arrow-left">volver</i></a>
        </div>
        <div class="card-body">
            <form action="{{ route('profiles.update', $profile->id_Profiles)}}" method="POST"
                  enctype="multipart/form-data" id="create">
                @method('PUT')
                @include('profiles.partials.form')
            </form>
        </div>
        <div class="card-footer">
            <button class="btn btn-primary" form="create">
                <i class="fa fa-save"></i>
                Guardar cambios
            </button>
            <button class="btn btn-danger" form="delete_{{ $profile->id_Profiles}}"
                    onclick="return confirm('¿Esta seguro de eliminar registro?')">
                <i class="fa fa-trash"></i>
                Eliminar
            </button>
            <form action="{{ route('profiles.destroy', $profile->id_Profiles) }}" id="delete_{{$profile->id_Profiles}}"
                  method="post" enctype="multipart/form-data" hidden>
                @csrf
                @method('DELETE')
            </form>
        </div>
    </div>
@endsection
