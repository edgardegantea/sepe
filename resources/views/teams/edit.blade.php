@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <a class="btn btn-primary float-right" href="{{ route('teams.index')}}">Regresar</a>
    <h1>Editar equipo</h1>
@stop

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">

                <form method="POST" name="" action="{{ route('teams.update', $team->id) }}">
                    @csrf
                    @method('PUT')


                    <div id="survey_options">

                        <label for="subject">Integrante</label>

                        <select
                            name="users[]"
                            class="form-control @error('users[]') is-invalid @enderror"
                            id="users[]" required>

                            <option value="">--Seleccione--</option>
                            @foreach( $users as $user )
                                <option
                                    value="{{ $user->id }}"
                                    {{ old('user') == $user->id ? 'selected' : '' }}
                                >{{ $user->name }}</option>
                            @endforeach
                        </select>

                    </div>
                    <div class="controls">
                        <a href="#" id="add_more_fields" class="btn btn-primary">Agregar campo</a>
                        <a href="#" id="remove_fields" class="btn btn-danger">Remover campo</a>
                    </div>


                    <input type="button" id="add_field" value="Agregar Integrante">
                    <br>
                    <div id="listas">

                        <div>
                            <input type="text" name="users[]">
                        </div>
                    </div>


                    <a href="{{ route('teams.index') }}" class="btn btn-secondary" tabindex="5">Cancelar</a>
                    <button type="submit" class="btn btn-primary" tabindex="4">Actualizar</button>
                </form>
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        var survey_options = document.getElementById('survey_options');
        var add_more_fields = document.getElementById('add_more_fields');
        var remove_fields = document.getElementById('remove_fields');

        add_more_fields.onclick = function (){
            var newField = document.createElement('select');
            newField.setAttribute('name', 'users[]');
            newField.setAttribute('class', 'form-control');


            survey_options.appendChild(newField);
        }

        remove_fields.onclick = function (){
            var input_tags = survey_options.getElementsByTagName('select');
            if (input_tags.length > 1){
                survey_options.removeChild(input_tags[(input_tags.length) - 1]);
            }
        }

    </script>




    <script>

        var campos_max = 10;   //max de 10 campos

        var x = 0;
        $('#add_field').click(function (e) {
            e.preventDefault();     //prevenir novos clicks
            if (x < campos_max) {
                $('#listas').append('<div>\
                                <input type="text" name="campo[]">\
                                <a href="#" class="remover_campo">Remover</a>\
                                </div>');
                x++;
            }
        });
        // Remover o div anterior
        $('#listas').on("click", ".remover_campo", function (e) {
            e.preventDefault();
            $(this).parent('div').remove();
            x--;
        });

    </script>
@stop


