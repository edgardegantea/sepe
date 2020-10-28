<h3>Proyectos registrados</h3>

@forelse($proyectos as $proyecto)
    <div>
        <h2>{{$proyecto->name}}</h2>
        <p>{{$proyecto->descripción}}</p>
        <p>{{$proyecto->desarrollador}}</p>
        <p>{{$proyecto->asesor}}</p>
        <p>{{$proyecto->semestre}}</p>
    </div>
@empty
    <div><h3>NO HAY REGISTROS</h3></div>
@endforelse
