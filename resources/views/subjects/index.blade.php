@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

    @can('subjects.create')
        <a href="{{ route('subjects.create')}}" class="btn btn-primary float-right">
            <i class="fa fa-plus"></i>
            Agregar
        </a>
    @endcan

    <h1>Asignaturas</h1>
@stop

@section('content')
    <div class="card mt-3">

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
                                           class="btn btn-primary btn-sm">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square"
                                                 fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                <path fill-rule="evenodd"
                                                      d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                            </svg>
                                        </a>
                                    @endcan


                                    @can('subjects.destroy')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                                form="delete_{{$subject->id}}"
                                                onclick="return confirm('¿Estas seguro que deseas eliminar el item?')">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill"
                                                 fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                      d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
                                            </svg>
                                        </button>
                                        <form action="{{route('subjects.destroy', $subject->id)}}"
                                              id="delete_{{$subject->id}}"
                                              method="post" enctype="multipart/form-data" hidden>
                                            @csrf
                                            @method('DELETE')
                                        </form>
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css">



@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

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
                "paginate":{
                    "next": "Siguiente",
                    "previous": "Anterior"
                }
            }
        });

    </script>


@stop
