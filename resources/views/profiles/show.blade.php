@extends('layouts.app')
@section('content')
    <div class="card mt-3">
        <div class="card-header d-inline-flex">
            <b>Detalle perfiles</b>
            <a href="{{ route('profiles.index')}}" class="btn btn-primary ml-auto">
                <i class="fa fa-arrow-left">volver</i></a>
        </div>
        <div class="card-body">
            <p><b>ID:</b> {{ $profile->id_Profiles}}</p>
            <p><b>Nombre:</b> {{ $profile->name}}</p>
            <p><b>Descripcion:</b> {{ $profile->description}} </p>
            <p><b>Permisos:</b> {{ $profile->permissions}} </p>
        </div>
        <div class="card-footer">
            <a class="btn btn-primary" href="{{route('profiles.edit', $profile->id_Profiles) }}">
                <i class="fa fa-edit"></i>
                Editar
            </a>
        </div>
    </div>
@endsection
