@extends('layouts.app')

@section('content')
    <center>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('¡Bienvenido!') }}</div>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            {{ __('Sistema de Evaluación de Proyectos Escolares') }}
                        </div>

                        <div class="row row-cols-2 row-cols-md-3">
                            <div class="col mb-4">
                                <div class="card">
                                    <img
                                        src="https://www.networkpositiva.com/themes/refineriaweb/assets/image/avatar.png"
                                        class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Estudiantes</h5>
                                        <a href="{{ route('students.index')}}" class="btn btn-outline-primary">Ir</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col mb-4">
                                <div class="card">
                                    <img
                                        src="https://i.pinimg.com/originals/68/b3/d8/68b3d85e43aa0394838d220fb6c0502c.png"
                                        class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Equipos</h5>
                                        <a href="{{ route('teams.index')}}" class="btn btn-outline-success">Ir</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col mb-4">
                                <div class="card">
                                    <img src="https://chavezcarmona.com/img/tu%20proyecto/platicanos.png"
                                         class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Proyectos</h5>
                                        <a href="{{ route('projects.index')}}" class="btn btn-outline-primary">Ir</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col mb-4">
                                <div class="card">
                                    <img
                                        src="https://img.pngio.com/subject-icon-413978-free-icons-library-subject-png-512_512.jpg"
                                        class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Asignaturas</h5>
                                        <a href="{{ route('subjects.index')}}" class="btn btn-outline-success">Ir</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col mb-4">
                                <div class="card">
                                    <img src="https://www.esfm.ipn.mx/assets/files/esfm/img/serv-docentes.png"
                                         class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Docentes</h5>
                                        <a href="{{ route('teachers.index')}}" class="btn btn-outline-success">Ir</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col mb-4">
                                <div class="card">
                                    <img src="https://seplan.yucatan.gob.mx/v2/img/seplan/armonizacion.png"
                                         class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Evaluadores</h5>
                                        <a href="{{ route('evaluators.index')}}" class="btn btn-outline-success">Ir</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </center>
@endsection

