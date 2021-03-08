@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Usuario</h1>
@stop

@section('content')

    <div class="card">
        <div class="card-header d-inline-flex">
            <a href="{{ route('users.index')}}" class="btn btn-primary ml-auto">
                Regresar
            </a>
        </div>


        <div class="card-body">

            {!! Form::model($user, ['route' => ['users.update', $user], 'method' => 'PUT']) !!}

            <div class="form-group">
                {!! Form::label('name', 'Nombre') !!}
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('name', 'Apellidos') !!}
                {!! Form::text('lastName', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('name', 'Correo Institucional') !!}
                {!! Form::text('email', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('name', 'Correo Institucional') !!}
                {!! Form::text('controlNumber', null, ['class' => 'form-control']) !!}
            </div>


            <h2 class="h5">Listado de roles</h2>
            @foreach($roles as $role)
                <div>
                    <label>
                        {!! Form::checkbox('roles[]',$role->id, null, ['class' => 'mr-1']) !!}
                        {{ $role->name }}
                    </label>
                </div>
            @endforeach

            {!! Form::submit('Asignar rol', ['class' => 'btn btn-primary mt-2']) !!}
            {!! Form::close() !!}


        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
