@extends('layouts.app')
@section('content')
    <div class="card mt-3">
        <div class="card-header d-inline-flex">
            <b>Detalle usuarios</b>
            <a href="{{ route('users.index')}}" class="btn btn-primary ml-auto">
                <i class="fa fa-arrow-left">volver</i></a>
        </div>
        <div class="card-body">
            <p><b>ID:</b> {{ $user->id_Users}}</p>
            <p><b>Nombre:</b> {{ $user->firstname}}</p>
            <p><b>Apellidos:</b> {{ $user->lastname}} </p>
            <p><b>ID perfil:</b> {{ $user->id_Profiles}} </p>
        </div>
        <div class="card-footer">
            <a class="btn btn-primary" href="{{route('users.edit', $user->id_Users) }}">
                <i class="fa fa-edit"></i>
                Editar
            </a>
        </div>
    </div>
@endsection
