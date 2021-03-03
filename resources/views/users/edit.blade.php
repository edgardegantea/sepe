@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Usuario</h1>
@stop

@section('content')

    @if(session('info'))
        <div class="alert alert-default-success">
            <strong>
                {{ session('info') }}
            </strong>
        </div>
    @endif


    <div class="card">
        <div class="card-header d-inline-flex">
            <a href="{{ route('users.index')}}" class="btn btn-primary ml-auto">
                Regresar
            </a>
        </div>


        <div class="card-body">
            <p class="h5">Nombre:</p>
            <p class="form-control">{{ $user->name }}</p>

            <h2 class="h5">Listado de roles</h2>
            {!! Form::model(['route' => ['users.update', $user], 'method' => 'put']) !!}
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
