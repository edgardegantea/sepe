@extends('layouts.app')

@section('content')

    <div class="card mt-3">

        <!-- DIV PARA BOTÓN CREAR -->
        <div class="card-header d-inline-flex">
            <b>Perfiles</b>
            <a href="{{ route('profiles.create')}}" class="btn btn-primary ml-auto">
                <i class="fa fa-plus"></i>
                Agregar
            </a>
        </div>


        <div class="card-body">
            <div class=row>
                <div class="col-4">
                    <div class="form-group m-0">
                        <label>
                            Listar:
                        </label>

                        <!-- Limitar tamaño de consulta en la tabla -->
                        <select class="form-control" id="limit" name="limit">
                            @foreach ([10,20,50,100] as $limit)
                                <option value="{{$limit}}" @if (isset($_GET['limit']))
                                    {{($_GET['limit']==$limit)?'selected':''}} @endif>{{$limit}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-8">
                    <div class="form-group">
                        <label>
                            Buscar:
                        </label>
                        <input class="form-control" id="search" name="search" type="text"
                               value="{{(isset($_GET['search']))?$_GET['search']:''}}">
                    </div>
                </div>
            </div>

            @if($profiles->total() > 10)
                {{$profiles->links()}}
            @endif
        </div>

        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Permisos</th>
                </tr>
                </thead>
                <tbody>
                @foreach($profiles as $profile)
                    <tr>
                        <td>
                            {{ $profile->id_Profiles }}
                        </td>
                        <td>
                            {{ $profile->name}}
                        </td>
                        <td>
                            {{ $profile->description}}
                        </td>
                        <td>
                            {{ $profile->permissions}}
                        </td>

                        <td>
                            <div class="btn-group" role="group" aria-label="Acciones">
                                <a href="{{route('profiles.show', $profile->id_Profiles)}}" class="btn btn-info btn-sm">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <a href="{{route('profiles.edit', $profile->id_Profiles)}}"
                                   class="btn btn-primary btn-sm">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <button type="submit" class="btn btn-danger btn-sm"
                                        form="delete_{{$profile->id_Profiles}}"
                                        onclick="return confirm('¿Estas seguro que deseas eliminar el item?')">
                                    <i class="fa fa-trash"></i>
                                </button>
                                <form action="{{route('profiles.destroy', $profile->id_Profiles)}}"
                                      id="delete_{{$profile->id_Profiles}}"
                                      method="post" enctype="multipart/form-data" hidden>
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </div>

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
        <div class="card-footer">
            @if($profiles->total() > 10)
                {{$profiles->links()}}
            @endif
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript">
        $('#limit').on('change', function () {
            window.location.href = '{{ route( "profiles.index" ) }}?limit=' + $(this).val() + '&search=' + $('#search').val()
        })

        $('#search').on('keyup', function (e) {
            if (e.keyCode == 13) {
                window.location.href = '{{ route("profiles.index") }}?limit=' + $('#limit').val() + '&search=' + $(this).val()
            }
        })
    </script>
@endsection
