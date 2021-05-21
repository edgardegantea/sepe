@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div class="container">
        <a class="btn btn-warning float-right" href="{{ route('teams.show', $project->team_id) }}">Regresar</a>
        <a class="btn btn-info float-right mr-2" href="{{ route('projects.edit', $project->id) }}">
            <i class="fa fa-edit"></i>
            Editar
        </a>
        <h1>Detalles</h1>
    </div>

@stop

@section('content')
    <div class="container">

        <div class="card mb-3" style="max-width: 100%;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ Storage::url( $project->logo ) }}" class="card-img-top border border-1 ml-2 mt-3 mr-2"
                         alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">{{ $project->name }}.</h5>
                        <p class="card-text">{{ $project->description }}.</p>

                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="accordion accordion-flush border border-1" id="accordionFlushExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="flush-headingOne">
                                                <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                                        aria-expanded="false" aria-controls="flush-collapseOne">
                                                    Ver Evaluadores Asignados
                                                </button>
                                            </h2>
                                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                                 aria-labelledby="flush-headingOne"
                                                 data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body">
                                                    @foreach( $project->users as $user )
                                                        <p>{{ $user->name }} {{ $user->lastName }}</p>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row-10 mt-3">

                                <table class="table table-bordered">
                                    <tbody>
                                    <tr>
                                        <td>
                                            <strong>Asignatura eje:</strong>
                                        </td>
                                        <td>
                                            {{ $project->subject->name }}.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Semestre:</strong>
                                        </td>
                                        <td>
                                            {{ $project->semester }}.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Status:</strong>
                                        </td>
                                        <td>
                                            @if( $evaluacion == 0)
                                                Pendiente.
                                            @elseif($evaluacion > 0 && $evaluacion < 10)
                                                En progreso...
                                            @elseif($evaluacion == 10)
                                                Calificado.
                                            @endif

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Porcentaje obtenido:</strong>
                                        </td>
                                        <td id="porcentaje">
                                            @if($evaluacion == 10)

                                            @endif
                                            Pendiente.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Nivel de Usabilidad:</strong>
                                        </td>
                                        <td id="usabilidad">
                                            @if( $evaluacion == 10 )

                                            @endif
                                            Pendiente.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Modulos calificados:</strong>
                                        </td>
                                        <td>
                                            <small class="text-muted">{{ $evaluacion }}/10</small>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-footer border">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                    aria-selected="true">Calificaciones por módulos
                            </button>

                            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile"
                                    aria-selected="false">Calificación general
                            </button>
                            @can("aspectos.create")
                            <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact"
                                    aria-selected="false">Calificar Proyecto
                            </button>
                            @endcan

                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                             aria-labelledby="nav-home-tab">
                            @if ($evaluacion == 10)
                                <div class="container">

                                    <div id="carouselExampleDark" class="carousel carousel-dark slide"
                                         data-bs-ride="carousel">
                                        <div class="carousel-indicators">
                                            <button type="button" data-bs-target="#carouselExampleDark"
                                                    data-bs-slide-to="0"
                                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                            <button type="button" data-bs-target="#carouselExampleDark"
                                                    data-bs-slide-to="1"
                                                    aria-label="Slide 2"></button>
                                            <button type="button" data-bs-target="#carouselExampleDark"
                                                    data-bs-slide-to="2"
                                                    aria-label="Slide 3"></button>
                                            <button type="button" data-bs-target="#carouselExampleDark"
                                                    data-bs-slide-to="3"
                                                    aria-label="Slide 4"></button>
                                            <button type="button" data-bs-target="#carouselExampleDark"
                                                    data-bs-slide-to="4"
                                                    aria-label="Slide 5"></button>
                                            <button type="button" data-bs-target="#carouselExampleDark"
                                                    data-bs-slide-to="5"
                                                    aria-label="Slide 6"></button>
                                            <button type="button" data-bs-target="#carouselExampleDark"
                                                    data-bs-slide-to="6"
                                                    aria-label="Slide 7"></button>
                                            <button type="button" data-bs-target="#carouselExampleDark"
                                                    data-bs-slide-to="7"
                                                    aria-label="Slide 8"></button>
                                            <button type="button" data-bs-target="#carouselExampleDark"
                                                    data-bs-slide-to="8"
                                                    aria-label="Slide 9"></button>
                                            <button type="button" data-bs-target="#carouselExampleDark"
                                                    data-bs-slide-to="9"
                                                    aria-label="Slide 10"></button>
                                        </div>

                                        <div class="carousel-inner">

                                            <!-- Modulo Apesctos-->
                                            <div class="carousel-item active" data-bs-interval="100000">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <canvas class="align-content-center" id="myChartAspectos"
                                                                width="1000"
                                                                height="400"></canvas>
                                                    </div>

                                                    <div class="accordion" id="accordionExample">
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingOne">
                                                                <button class="accordion-button" type="button"
                                                                        data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseOne"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapseOne">
                                                                    Nomenclatura
                                                                </button>
                                                            </h2>
                                                            <div id="collapseOne" class="accordion-collapse collapse"
                                                                 aria-labelledby="headingOne"
                                                                 data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <div class="col-12" id="nomenclaturaAspectos">
                                                                        <table class="table">
                                                                            <thead>
                                                                            <tr>
                                                                                <th>Codigo</th>
                                                                                <th>Criterio</th>
                                                                            </tr>
                                                                            </thead>
                                                                            <tbody id="tbodyAspectos">
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Modulo Identidad-->
                                            <div class="carousel-item" data-bs-interval="2000">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <canvas id="myChartIdentidad" width="1000"
                                                                height="400"></canvas>
                                                    </div>

                                                    <div class="accordion" id="accordionExample">
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingOne">
                                                                <button class="accordion-button" type="button"
                                                                        data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseOne"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapseOne">
                                                                    Nomenclatura
                                                                </button>
                                                            </h2>
                                                            <div id="collapseOne" class="accordion-collapse collapse"
                                                                 aria-labelledby="headingOne"
                                                                 data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <div class="col-12" id="nomenclaturaIdentidad">
                                                                        Nomenclatura:
                                                                        <table class="table">
                                                                            <thead>
                                                                            <tr>
                                                                                <th>Codigo</th>
                                                                                <th>Criterio</th>
                                                                            </tr>
                                                                            </thead>
                                                                            <tbody id="tbodyIdentidad">
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Modulo Estructora-->
                                            <div class="carousel-item">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <canvas id="myChartEstructura" width="1000"
                                                                height="400"></canvas>
                                                    </div>

                                                    <div class="accordion" id="accordionExample">
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingOne">
                                                                <button class="accordion-button" type="button"
                                                                        data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseOne"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapseOne">
                                                                    Nomenclatura
                                                                </button>
                                                            </h2>
                                                            <div id="collapseOne" class="accordion-collapse collapse"
                                                                 aria-labelledby="headingOne"
                                                                 data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <div class="col-12" id="nomenclaturaEstructura">
                                                                        Nomenclatura:
                                                                        <table class="table">
                                                                            <thead>
                                                                            <tr>
                                                                                <th>Codigo</th>
                                                                                <th>Criterio</th>
                                                                            </tr>
                                                                            </thead>
                                                                            <tbody id="tbodyEstructura">
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Modulo Rotulado-->
                                            <div class="carousel-item">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <canvas id="myChartRotulado" width="1000" height="400"></canvas>
                                                    </div>
                                                    <div class="accordion" id="accordionExample">
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingOne">
                                                                <button class="accordion-button" type="button"
                                                                        data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseOne"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapseOne">
                                                                    Nomenclatura
                                                                </button>
                                                            </h2>
                                                            <div id="collapseOne" class="accordion-collapse collapse"
                                                                 aria-labelledby="headingOne"
                                                                 data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <div class="col-12" id="nomenclaturaRotulado">
                                                                        Nomenclatura:
                                                                        <table class="table">
                                                                            <thead>
                                                                            <tr>
                                                                                <th>Codigo</th>
                                                                                <th>Criterio</th>
                                                                            </tr>
                                                                            </thead>
                                                                            <tbody id="tbodyRotulado">
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Modulo Layout-->
                                            <div class="carousel-item">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <canvas id="myChartLayoutPage" width="1000"
                                                                height="400"></canvas>
                                                    </div>

                                                    <div class="accordion" id="accordionExample">
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingOne">
                                                                <button class="accordion-button" type="button"
                                                                        data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseOne"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapseOne">
                                                                    Nomenclatura
                                                                </button>
                                                            </h2>
                                                            <div id="collapseOne" class="accordion-collapse collapse"
                                                                 aria-labelledby="headingOne"
                                                                 data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <div class="col-12" id="nomenclaturaLayoutPage">
                                                                        Nomenclatura:
                                                                        <table class="table">
                                                                            <thead>
                                                                            <tr>
                                                                                <th>Codigo</th>
                                                                                <th>Criterio</th>
                                                                            </tr>
                                                                            </thead>
                                                                            <tbody id="tbodyLayoutPage">
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Modulo Interacion-->
                                            <div class="carousel-item">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <canvas id="myChartInteracion" width="1000"
                                                                height="400"></canvas>
                                                    </div>
                                                    <div class="accordion" id="accordionExample">
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingOne">
                                                                <button class="accordion-button" type="button"
                                                                        data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseOne"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapseOne">
                                                                    Nomenclatura
                                                                </button>
                                                            </h2>
                                                            <div id="collapseOne" class="accordion-collapse collapse"
                                                                 aria-labelledby="headingOne"
                                                                 data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <div class="col-12" id="nomenclaturaInteracion">
                                                                        Nomenclatura:
                                                                        <table class="table">
                                                                            <thead>
                                                                            <tr>
                                                                                <th>Codigo</th>
                                                                                <th>Criterio</th>
                                                                            </tr>
                                                                            </thead>
                                                                            <tbody id="tbodyInteracion">
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Modulo Control-->
                                            <div class="carousel-item">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <canvas id="myChartControl" width="1000" height="400"></canvas>
                                                    </div>
                                                    <div class="accordion" id="accordionExample">
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingOne">
                                                                <button class="accordion-button" type="button"
                                                                        data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseOne"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapseOne">
                                                                    Nomenclatura
                                                                </button>
                                                            </h2>
                                                            <div id="collapseOne" class="accordion-collapse collapse"
                                                                 aria-labelledby="headingOne"
                                                                 data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <div class="col-12" id="nomenclaturaControl">
                                                                        Nomenclatura:
                                                                        <table class="table">
                                                                            <thead>
                                                                            <tr>
                                                                                <th>Codigo</th>
                                                                                <th>Criterio</th>
                                                                            </tr>
                                                                            </thead>
                                                                            <tbody id="tbodyControl">
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Modulo Elementos-->
                                            <div class="carousel-item">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <canvas id="myChartElementos" width="1000"
                                                                height="400"></canvas>
                                                    </div>
                                                    <div class="accordion" id="accordionExample">
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingOne">
                                                                <button class="accordion-button" type="button"
                                                                        data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseOne"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapseOne">
                                                                    Nomenclatura
                                                                </button>
                                                            </h2>
                                                            <div id="collapseOne" class="accordion-collapse collapse"
                                                                 aria-labelledby="headingOne"
                                                                 data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <div class="col-12" id="nomenclaturaElementos">
                                                                        Nomenclatura:
                                                                        <table class="table">
                                                                            <thead>
                                                                            <tr>
                                                                                <th>Codigo</th>
                                                                                <th>Criterio</th>
                                                                            </tr>
                                                                            </thead>
                                                                            <tbody id="tbodyElementos">
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Modulo Busqueda-->
                                            <div class="carousel-item">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <canvas id="myChartBusqueda" width="1000" height="400"></canvas>
                                                    </div>
                                                    <div class="accordion" id="accordionExample">
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingOne">
                                                                <button class="accordion-button" type="button"
                                                                        data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseOne"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapseOne">
                                                                    Nomenclatura
                                                                </button>
                                                            </h2>
                                                            <div id="collapseOne" class="accordion-collapse collapse"
                                                                 aria-labelledby="headingOne"
                                                                 data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <div class="col-12" id="nomenclaturaBusqueda">
                                                                        Nomenclatura:
                                                                        <table class="table">
                                                                            <thead>
                                                                            <tr>
                                                                                <th>Codigo</th>
                                                                                <th>Criterio</th>
                                                                            </tr>
                                                                            </thead>
                                                                            <tbody id="tbodyBusqueda">
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Modulo Ayuda-->
                                            <div class="carousel-item">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <canvas id="myChartAyuda" width="1000" height="400"></canvas>
                                                    </div>
                                                    <div class="accordion" id="accordionExample">
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingOne">
                                                                <button class="accordion-button" type="button"
                                                                        data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseOne"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapseOne">
                                                                    Nomenclatura
                                                                </button>
                                                            </h2>
                                                            <div id="collapseOne" class="accordion-collapse collapse"
                                                                 aria-labelledby="headingOne"
                                                                 data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <div class="col-12" id="nomenclaturaAyuda">
                                                                        Nomenclatura:
                                                                        <table class="table">
                                                                            <thead>
                                                                            <tr>
                                                                                <th>Codigo</th>
                                                                                <th>Criterio</th>
                                                                            </tr>
                                                                            </thead>
                                                                            <tbody id="tbodyAyuda">
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="carousel-control-prev" type="button"
                                                data-bs-target="#carouselExampleDark"
                                                data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button"
                                                data-bs-target="#carouselExampleDark"
                                                data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>
                                </div>
                            @else
                                <h3 class="p-4">La evaluación está en proceso...</h3>
                            @endif
                        </div>

                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            @if($evaluacion == 10)
                                <div class="row">
                                    <div class="col-12">
                                        <canvas id="myChartGeneral" width="1000" height="400"></canvas>
                                    </div>
                                </div>
                            @else
                                <h3 class="p-4">La evaluación está en proceso...</h3>
                            @endif
                        </div>

                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <div class="container">
                                @can('aspectos.create')
                                    <div class="row g-2">
                                        <div class="col-6">
                                            <div class="p-3 border">
                                                @if ($ev_segunda == true)
                                                    <a class="btn btn-success btn-block"
                                                       href="{{ route('aspectos.edit', $project->id)}}">
                                                        1. Editar Aspectos G.
                                                    </a>

                                                @else
                                                    <a class="btn btn-primary btn-block"
                                                       href="{{ route('aspectos.projects.create', $project->id)}}">
                                                        1. Calificar Aspecto G.
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="p-3 border">
                                                @if ($ev_tercera == true)
                                                    <a class="btn btn-success btn-block"
                                                       href="{{ route('identitys.edit', $project->id)}}">
                                                        2. Editar Identidad e Información
                                                    </a>
                                                @else
                                                    <a class="btn btn-primary btn-block"
                                                       href="{{ route('identitys.projects.create', $project->id)}}">
                                                        2. Calificar Identidad e Información
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="p-3 border">
                                                @if ($ev_cuarta == true)
                                                    <a class="btn btn-success btn-block"
                                                       href="{{ route('structures.edit', $project->id)}}">
                                                        3. Editar Estructura y Navegación
                                                    </a>
                                                @else
                                                    <a class="btn btn-primary btn-block"
                                                       href="{{ route('structures.projects.create', $project->id)}}">
                                                        3. Calificar Estructura y Navegación
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="p-3 border">
                                                @if ($ev_quinto == true)
                                                    <a class="btn btn-success btn-block"
                                                       href="{{ route('rotulados.edit', $project->id)}}">
                                                        4. Editar Rotulado
                                                    </a>
                                                @else
                                                    <a class="btn btn-primary btn-block"
                                                       href="{{ route('rotulados.projects.create', $project->id)}}">
                                                        4. Calificar Rotulado
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="p-3 border">
                                                @if ($ev_sexto == true)
                                                    <a class="btn btn-success btn-block"
                                                       href="{{ route('layoutpages.edit', $project->id)}}">
                                                        5. Editar Layout de la Página
                                                    </a>
                                                @else
                                                    <a class="btn btn-primary btn-block"
                                                       href="{{ route('layoutpages.projects.create', $project->id)}}">
                                                        5. Calificar Layout de la Página
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="p-3 border">
                                                @if ($ev_septimo == true)
                                                    <a class="btn btn-success btn-block"
                                                       href="{{ route('interactions.edit', $project->id)}}">
                                                        6. Editar Entendibilidad e Interacción
                                                    </a>
                                                @else
                                                    <a class="btn btn-primary btn-block"
                                                       href="{{ route('interactions.projects.create', $project->id)}}">
                                                        6. Calificar Entendibilidad e Interacción
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="p-3 border">
                                                @if ($ev_octavo == true)
                                                    <a class="btn btn-success btn-block"
                                                       href="{{ route('controls.edit', $project->id)}}">
                                                        7. Editar Control y Retroalimentación
                                                    </a>
                                                @else
                                                    <a class="btn btn-primary btn-block"
                                                       href="{{ route('controls.projects.create', $project->id)}}">
                                                        7. Calificar Control y Retroalimentación
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="p-3 border">
                                                @if ($ev_noveno == true)
                                                    <a class="btn btn-success btn-block"
                                                       href="{{ route('elements.edit', $project->id)}}">
                                                        8. Editar Elementos Multimedia
                                                    </a>
                                                @else
                                                    <a class="btn btn-primary btn-block"
                                                       href="{{ route('elements.projects.create', $project->id)}}">
                                                        8. Calificar Elementos Multimedia
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="p-3 border">
                                                @if ($ev_decimo == true)
                                                    <a class="btn btn-success btn-block"
                                                       href="{{ route('searchs.edit', $project->id)}}">
                                                        9. Editar Búsqueda
                                                    </a>
                                                @else
                                                    <a class="btn btn-primary btn-block"
                                                       href="{{ route('searchs.projects.create', $project->id)}}">
                                                        9. Calificar Búsqueda
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="p-3 border">
                                                @if ($ev_ultimo == true)
                                                    <a class="btn btn-success btn-block"
                                                       href="{{ route('ayudas.edit', $project->id)}}">
                                                        10. Editar Ayuda
                                                    </a>
                                                @else
                                                    <a class="btn btn-primary btn-block"
                                                       href="{{ route('ayudas.projects.create', $project->id)}}">
                                                        10. Calificar Ayuda
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                @endcan
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

@stop

@section('js')
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.2.1/dist/chart.min.js"></script>

    <script>

        var codigoAspectos = [];
        var valoresAspectos = [];

        var codigoIdentidad = [];
        var valoresIdentidad = [];

        var codigoEstructura = [];
        var valoresEstructura = [];

        var codigoRotulado = [];
        var valoresRotulado = [];

        var codigoLayout = [];
        var valoresLayout = [];

        var codigoInteraccion = [];
        var valoresInteraccion = [];

        var codigoControl = [];
        var valoresControl = [];

        var codigoElementos = [];
        var valoresElementos = [];

        var codigoBusqueda = [];
        var valoresBusqueda = [];

        var codigoAyuda = [];
        var valoresAyuda = [];

        var resFinal;

        /*
        Variables para grafica general
         */
        var suma = 0;
        var resultadoGeneral = [];
        var resultadoAspecto, resultadoIdentidad, resultadoEstructura, resultadoRotulado, resultadoLayout,
            resultadoInteraction,
            resultadoControl, resultadoElementos, resultadoBusqueda, resultadoAyuda = 0;


        <!-- Grafica de todos los modulos -->


        $(document).ready(function () {

            <!-- *******Grafica para Aspectos ***********-->

            var arregloAs = @json($aspectos);
            for (let x = 0; x < arregloAs.length; x++) {
                var todo = '<tr><td>' + arregloAs[x].codigo + '</td>';
                todo += '<td>' + arregloAs[x].criterio + '</td>';
                todo += '</tr>';
                $("#tbodyAspectos").append(todo);

                codigoAspectos.push(arregloAs[x].codigo);
                valoresAspectos.push(arregloAs[x].valor);
            }

            <!-- *******Grafica para Identidad ***********-->

            var arregloIden = @json($identidad);
            for (let x = 0; x < arregloIden.length; x++) {
                var todo = '<tr><td>' + arregloIden[x].codigo + '</td>';
                todo += '<td>' + arregloIden[x].criterio + '</td>';
                todo += '</tr>';
                $("#tbodyIdentidad").append(todo);

                codigoIdentidad.push(arregloIden[x].codigo);
                valoresIdentidad.push(arregloIden[x].valor);
            }

            <!-- *******Grafica para Estructura ***********-->

            var arregloEstru = @json($estructura);
            for (let x = 0; x < arregloEstru.length; x++) {
                var todo = '<tr><td>' + arregloEstru[x].codigo + '</td>';
                todo += '<td>' + arregloEstru[x].criterio + '</td>';
                todo += '</tr>';
                $("#tbodyEstructura").append(todo);

                codigoEstructura.push(arregloEstru[x].codigo);
                valoresEstructura.push(arregloEstru[x].valor);
            }

            <!-- *******Grafica para Rotulado ***********-->

            var arregloRot = @json($rotulado);
            for (let x = 0; x < arregloRot.length; x++) {
                var todo = '<tr><td>' + arregloRot[x].codigo + '</td>';
                todo += '<td>' + arregloRot[x].criterio + '</td>';
                todo += '</tr>';
                $("#tbodyRotulado").append(todo);

                codigoRotulado.push(arregloRot[x].codigo);
                valoresRotulado.push(arregloRot[x].valor);
            }

            <!-- *******Grafica para LayoutPage ***********-->

            var arregloLayout = @json($layoutPage);
            for (let x = 0; x < arregloLayout.length; x++) {
                var todo = '<tr><td>' + arregloLayout[x].codigo + '</td>';
                todo += '<td>' + arregloLayout[x].criterio + '</td>';
                todo += '</tr>';
                $("#tbodyLayoutPage").append(todo);

                codigoLayout.push(arregloLayout[x].codigo);
                valoresLayout.push(arregloLayout[x].valor);
            }

            <!-- *******Grafica para Interaccion ***********-->

            var arregloInteraction = @json($interacion);
            for (let x = 0; x < arregloInteraction.length; x++) {
                var todo = '<tr><td>' + arregloInteraction[x].codigo + '</td>';
                todo += '<td>' + arregloInteraction[x].criterio + '</td>';
                todo += '</tr>';
                $("#tbodyInteracion").append(todo);

                codigoInteraccion.push(arregloInteraction[x].codigo);
                valoresInteraccion.push(arregloInteraction[x].valor);
            }

            <!-- *******Grafica para Control ***********-->

            var arregloControl = @json($control);
            for (let x = 0; x < arregloControl.length; x++) {
                var todo = '<tr><td>' + arregloControl[x].codigo + '</td>';
                todo += '<td>' + arregloControl[x].criterio + '</td>';
                todo += '</tr>';
                $("#tbodyControl").append(todo);

                codigoControl.push(arregloControl[x].codigo);
                valoresControl.push(arregloControl[x].valor);
            }

            <!-- *******Grafica para Elementos ***********-->

            var arregloElementos = @json($elementos);
            for (let x = 0; x < arregloElementos.length; x++) {
                var todo = '<tr><td>' + arregloElementos[x].codigo + '</td>';
                todo += '<td>' + arregloElementos[x].criterio + '</td>';
                todo += '</tr>';
                $("#tbodyElementos").append(todo);

                codigoElementos.push(arregloElementos[x].codigo);
                valoresElementos.push(arregloElementos[x].valor);
            }

            <!-- *******Grafica para Busqueda ***********-->

            var arregloBusqueda = @json($busqueda);
            for (let x = 0; x < arregloBusqueda.length; x++) {
                var todo = '<tr><td>' + arregloBusqueda[x].codigo + '</td>';
                todo += '<td>' + arregloBusqueda[x].criterio + '</td>';
                todo += '</tr>';
                $("#tbodyBusqueda").append(todo);

                codigoBusqueda.push(arregloBusqueda[x].codigo);
                valoresBusqueda.push(arregloBusqueda[x].valor);
            }

            <!-- *******Grafica para Ayuda ***********-->

            var arregloAyuda = @json($ayuda);
            for (let x = 0; x < arregloAyuda.length; x++) {
                var todo = '<tr><td>' + arregloAyuda[x].codigo + '</td>';
                todo += '<td>' + arregloAyuda[x].criterio + '</td>';
                todo += '</tr>';
                $("#tbodyAyuda").append(todo);

                codigoAyuda.push(arregloAyuda[x].codigo);
                valoresAyuda.push(arregloAyuda[x].valor);
            }

            /**
             * For para suma de calificaciones
             */
            suma = 0;
            valoresAspectos.forEach(function (numero) {
                suma += numero;
            });
            resultadoAspecto = suma / valoresAspectos.length;
            console.log(resultadoAspecto);

            /*
            Indentidad
             */

            suma = 0;
            valoresIdentidad.forEach(function (numero) {
                suma += numero;
            });
            resultadoIdentidad = suma / valoresIdentidad.length;
            console.log(resultadoIdentidad);

            /*
            Estructura
             */

            suma = 0;
            valoresEstructura.forEach(function (numero) {
                suma += numero;
            });
            resultadoEstructura = suma / valoresEstructura.length;
            console.log(resultadoEstructura);

            /*
            Rotulado
             */

            suma = 0;
            valoresRotulado.forEach(function (numero) {
                suma += numero;
            });
            resultadoRotulado = suma / valoresRotulado.length;
            console.log(resultadoRotulado);

            /*
            Layout Page
             */

            suma = 0;
            valoresLayout.forEach(function (numero) {
                suma += numero;
            });
            resultadoLayout = suma / valoresLayout.length;
            console.log(resultadoLayout);

            /*
            Interaction
             */

            suma = 0;
            valoresInteraccion.forEach(function (numero) {
                suma += numero;
            });
            resultadoInteraction = suma / valoresInteraccion.length;
            console.log(resultadoInteraction);

            /*
            Control
             */

            suma = 0;
            valoresControl.forEach(function (numero) {
                suma += numero;
            });
            resultadoControl = suma / valoresControl.length;
            console.log(resultadoControl);

            /*
            Elementos Multimedia
             */

            suma = 0;
            valoresElementos.forEach(function (numero) {
                suma += numero;
            });
            resultadoElementos = suma / valoresElementos.length;
            console.log(resultadoElementos);

            /*
            Busqueda
             */

            suma = 0;
            valoresBusqueda.forEach(function (numero) {
                suma += numero;
            });
            resultadoBusqueda = suma / valoresBusqueda.length;
            console.log(resultadoBusqueda);

            /*
            Ayuda
             */

            suma = 0;
            valoresAyuda.forEach(function (numero) {
                suma += numero;
            });
            resultadoAyuda = suma / valoresAyuda.length;
            console.log(resultadoAyuda);

            resultadoGeneral = [
                resultadoAspecto,
                resultadoIdentidad,
                resultadoEstructura,
                resultadoRotulado,
                resultadoLayout,
                resultadoInteraction,
                resultadoControl,
                resultadoElementos,
                resultadoBusqueda,
                resultadoAyuda
            ];


            gAspectos();
            gIdentidad();
            gEstructura();
            gRotulado();
            gLayoutPage();
            gInteraccion();
            gControl();
            gElementos();
            gBusqueda();
            gAyuda();
            gGeneral();
            usabilidad();
            estilosModulos();

        });

        //Cambiar color de letra
        function estilosModulos() {
            let botones = document.getElementById(".btn btn-success btn-block");

        }

        //usabilidad y porcentaje
        function usabilidad() {
            let tdPorcentaje = document.getElementById("porcentaje");
            let tdUsabilidad = document.getElementById("usabilidad");
            resFinal = resultadoAspecto + resultadoIdentidad + resultadoEstructura + resultadoRotulado + resultadoLayout + resultadoInteraction + resultadoControl + resultadoElementos + resultadoBusqueda + resultadoAyuda;
            tdPorcentaje.innerHTML = resFinal.toFixed(1) + "%";

            if (resFinal >= 0 && resFinal <= 30) {
                tdUsabilidad.innerHTML = "Muy malo.";
            } else if (resFinal >= 31 && resFinal <= 60) {
                tdUsabilidad.innerHTML = "Malo.";
            } else if (resFinal >= 61 && resFinal <= 75) {
                tdUsabilidad.innerHTML = "Regular.";
            } else if (resFinal >= 76 && resFinal <= 90) {
                tdUsabilidad.innerHTML = "Bueno.";
            } else if (resFinal >= 91 && resFinal <= 100) {
                tdUsabilidad.innerHTML = "Muy bueno.";
            }
        }

        function gAspectos() {
            var ctx = document.getElementById('myChartAspectos').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: codigoAspectos,
                    datasets: [{
                        label: 'Modulo "Aspectos Generales."',
                        data: valoresAspectos,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        }

        function gIdentidad() {
            var ctx = document.getElementById('myChartIdentidad').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: codigoIdentidad,
                    datasets: [{
                        label: 'Modulo "Identidad e Información."',
                        data: valoresIdentidad,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        }

        function gEstructura() {
            var ctx = document.getElementById('myChartEstructura').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: codigoEstructura,
                    datasets: [{
                        label: 'Modulo "Estructura y Navegación."',
                        data: valoresEstructura,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        }

        function gRotulado() {
            var ctx = document.getElementById('myChartRotulado').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: codigoRotulado,
                    datasets: [{
                        label: 'Modulo "Rotulado."',
                        data: valoresRotulado,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        }

        function gLayoutPage() {
            var ctx = document.getElementById('myChartLayoutPage').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: codigoLayout,
                    datasets: [{
                        label: 'Modulo "Layout de la Página."',
                        data: valoresLayout,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        }

        function gInteraccion() {
            var ctx = document.getElementById('myChartInteracion').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: codigoInteraccion,
                    datasets: [{
                        label: 'Modulo "Entendibilidad e Interacción."',
                        data: valoresInteraccion,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        }

        function gControl() {
            var ctx = document.getElementById('myChartControl').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: codigoControl,
                    datasets: [{
                        label: 'Modulo "Control y Retroalimentación."',
                        data: valoresControl,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        }

        function gElementos() {
            var ctx = document.getElementById('myChartElementos').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: codigoElementos,
                    datasets: [{
                        label: 'Modulo "Elementos Multimedia."',
                        data: valoresElementos,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        }

        function gBusqueda() {
            var ctx = document.getElementById('myChartBusqueda').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: codigoBusqueda,
                    datasets: [{
                        label: 'Modulo "Búsqueda."',
                        data: valoresBusqueda,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        }

        function gAyuda() {
            var ctx = document.getElementById('myChartAyuda').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: codigoAyuda,
                    datasets: [{
                        label: 'Modulo "Ayuda."',
                        data: valoresAyuda,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        }

        function gGeneral() {

            var ctx = document.getElementById('myChartGeneral').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Aspectos Generales', 'Identidad e Información', 'Estructura y Navegaciín', 'Rotulado', 'Layout de la Página', 'Entendibilidad e Interacción', 'Control y Retroalimentación', 'Elementos Multimedia', 'Búsqueda', 'Ayuda'],
                    datasets: [{
                        label: 'Resultados Generales',
                        data: resultadoGeneral,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });

        }
    </script>
@stop
