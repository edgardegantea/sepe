@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')
    @can('users.create')
        <a href="{{ route('users.create')}}" class="btn btn-primary float-right">
            <i class="fa fa-plus"></i>
            Agregar
        </a>
    @endcan

    <h1>Usuarios</h1>

@stop

@section('content')

    @if(session('info'))
        <div class="alert alert-success">
            <strong>
                {{ session('info') }}
            </strong>
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <table class="table table-striped" id="users">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Correo Institucional</th>
                    <th>N° Control</th>
                    <th>Acciones</th>
                </tr>
                </thead>

                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->lastName }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->controlNumber }}</td>

                        <td>
                            @can('users.edit')
                                <a class="btn btn-info btn-sm"
                                   href="{{ route('users.edit', $user->id) }}">Editar</a>
                            @endcan
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>


    </div>

@stop

@section('css')

    <link rel="stylesheet" href="/css/admin_custom.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css">
@stop

@section('js')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
            crossorigin="anonymous"></script>

    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.7/js/responsive.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#users').DataTable({
                responsive: true,
                autoWidth: false,
                "language": {
                    "lengthMenu": "Muestra _MENU_ registros por página.",
                    "zeroRecords": "Nada encontrado - Disculpa.",
                    "info": "Página _PAGE_ de _PAGES_",
                    "infoEmpty": "Ningún registro disponible.",
                    "infoFiltered": "(Filtrado de _MAX_ registros.)",
                    "search": "Buscar",
                    "paginate": {
                        "next": "Siguiente",
                        "previous": "Anterior"
                    }
                }
            });
        });
    </script>
@stop
