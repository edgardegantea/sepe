@extends('layouts.app')

@section('content')

    <h2>CRITERIOS DEL "HEURÍSTICO ASPECTOS GENERALES"</h2>
    <h4>Elementos relacionados con los objetos del sitio, el look & feel, coherencia y nivel de actualización de
        contenidos</h4>

    <div class="container">
        <a href="{{ route('proyectos.index') }}" class="btn btn-primary">Proyectos</a>
        <a href="{{ route('structures.create') }}" class="btn btn-primary">Siguiente evaluación</a>
    </div>

    <h3>Instrucciones</h3>
    <p>1. Evalue cada criterio y rellene la columna "Valor" según la leyenda.</p>
    <p>2. Añada sus comentarios o la referencia a los mismos en otro documento anexo en la columna "Comentarios."</p>


@section('contentSelect')
    <select name="valor" id="" required>
        <option value="">--Selecciona un valor--</option>
        @for($i = 0; $i<=10;$i++)
            <option value="{{ $i }}">{{ $i }}</option>
        @endfor
        <option value="NA">NA</option>
    </select>
@endsection

@section('contentSelect2')
    <select name="valor" id="" required>
        <option value="">--Seleccione un valor--</option>
        <option value="Criterio no aplicable en el sitio.">NA</option>
        <option value="No se cumple en todo el sitio.">NTS</option>
        <option value="No se cumple en los enlaces principales.">NEP</option>
        <option value="No se cumple en la pagina principal.">NPP</option>
        <option value="No se cumple en alguna pagina interior.">NPI</option>
        <option value="Se cumple el criterio.">S</option>
    </select>
@endsection

@section('contentCampos')
    <td>
        <input type="text" name="relevancia" id="" required maxlength="200">
    </td>
    <td>
        <textarea name="comentario" id="" cols="30" rows="1"></textarea>
    </td>


@endsection


<!-- Tabla -->
<div class="container">
    <!--CABECERA DE LA TABLA-->
    <form method="POST" name="" action="{{ route('evaluations.store') }}">
        @csrf
        <table class="table">
            <thead>
            <tr>
                <th>Codigo</th>
                <th>Criterio</th>
                <th>Valor</th>
                <th>Relevancia</th>
                <th>Comentario</th>
            </tr>
            </thead>
            <tbody>

            @foreach($aspectos as $aspecto)
                <tr>
                    <td>{{ $aspecto->codigo }}</td>
                    <td>{{ $aspecto->criterio }}</td>
                    <td>
                        @switch($aspecto->id)
                            @case(1)
                            @yield('contentSelect')
                            @break

                            @case(2)
                            @yield('contentSelect')
                            @break

                            @case(3)
                            @yield('contentSelect')
                            @break

                            @case(4)
                            @yield('contentSelect')
                            @break

                            @case(5)
                            @yield('contentSelect')
                            @break

                            @case(6)
                            @yield('contentSelect')
                            @break

                            @case(7)
                            @yield('contentSelect2')
                            @break

                            @case(8)
                            @yield('contentSelect2')
                            @break

                            @case(9)
                            @yield('contentSelect2')
                            @break

                            @case(10)
                            @yield('contentSelect2')
                            @break
                        @endswitch
                    </td>
                    @yield('contentCampos')
                    <input type="hidden" name="evaluacion_heuristica" value="aspectos">
                </tr>
            @endforeach
            </tbody>
        </table>
        <input type="submit">
    </form>
</div>


@endsection

