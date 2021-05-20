@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

    @can('subjects.create')
        <a href="{{ route('subjects.create')}}" class="btn btn-primary float-right">
            <i class="fa fa-plus"></i>
            Agregar
        </a>
    @endcan

    <h1>Asignaturas eje</h1>
@stop

@section('content')

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped" id="subjects">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($subjects as $subject)
                        <tr>
                            <td>
                                {{ $subject->id }}
                            </td>
                            <td>
                                {{ $subject->name}}
                            </td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Acciones">

                                    @can('subjects.edit')
                                        <a href="{{route('subjects.edit', $subject->id)}}"
                                           class="btn btn-info btn-sm">
                                            Editar
                                        </a>
                                    @endcan
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- DIV PARA BOTÓN CREAR -->

    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css">



@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
            crossorigin="anonymous"></script>

    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.7/js/responsive.bootstrap4.min.js"></script>

    <script>
        $('#subjects').DataTable({
            responsive: true,
            autoWith: false,
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

    </script>


@stop
