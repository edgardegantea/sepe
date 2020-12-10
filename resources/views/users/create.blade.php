@extends('layouts.app')
@section('content')
    <div class="card mt-3">
        <div class="card-header d-inline-flex">
            <b>Formulario usuarios</b>
            <a href="{{ route('users.index')}}" class="btn btn-link ml-auto">
                <i class="fa fa-arrow-left">volver</i></a>
        </div>
        <div class="card-body">
            <form action="{{ route('users.store')}}" method="POST" enctype="multipart/form-data" id="create">
                @include('users.partials.form')
            </form>
        </div>
        <div class="card-footer">
            <button class="btn btn-primary" form="create">
                <i class="fa fa-plus"></i>
                Crear
            </button>
        </div>
    </div>
@endsection
