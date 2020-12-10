@extends('layouts.app')

@section('content')
    <div class="card mt-3">
        <div class="card-header d-inline-flex">
            <b><h1>Formulario evaluadores</h1></b>
            <a href="{{ route('evaluators.index')}}" class="btn btn-link ml-auto">
                <i class="fa fa-arrow-left"></i></a>
        </div>
        <div class="card-body">
            <form action="{{ route('evaluators.store')}}" method="POST" enctype="multipart/form-data" id="create">
                @include('evaluators.partials.form')
            </form>
        </div>
        <div class="card-footer">
            <button class="btn btn-success" form="create">
                <i class="fa fa-plus"></i>
                Crear
            </button>
            <button class="btn btn-primary" form="create">
                <i class="fa fa-plus"></i>
                Volver
            </button>
        </div>
    </div>
@endsection
