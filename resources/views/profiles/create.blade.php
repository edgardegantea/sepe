@extends('layouts.app')
@section('content')
    <div class="card mt-3">
        <div class="card-header d-inline-flex">
            <b>Formulario perfiles</b>
            <a href="{{ route('profiles.index')}}" class="btn btn-link ml-auto">
                <i class="fa fa-arrow-left">volver</i></a>
        </div>
        <div class="card-body">
            <form action="{{ route('profiles.store')}}" method="POST" enctype="multipart/form-data" id="create">
                @include('profiles.partials.form')
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
