@extends('layouts.app')
@section('content')
    <!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
            crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ayuda</title>
</head>
<body>

<center>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-20">
                <div class="card">
                    <div class="card-header">{{ __('Sección de Ayuda') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        {{ __('Sistema de Evaluación de Proyectos Escolares') }}
                    </div>

                    <div class="row row-cols-2 row-cols-md-5">
                        <div class="col mb-4">
                            <div class="card">
                                <img src="https://image.flaticon.com/icons/png/512/74/74235.png" class="card-img-top"
                                     alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Inicio de Sesión</h5>
                                    <p class="card-text">Para poder iniciar sesión en el sistema, el usuario deberá
                                        ingresar su correo electrónico y contraseña</p>
                                    <p class="card-text">En caso de olvidar su contraseña, debe dar clic en en dicha
                                        opción para que pueda ser
                                        restablecida.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4">
                            <div class="card">
                                <img src="https://image.flaticon.com/icons/png/512/189/189689.png" class="card-img-top"
                                     alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Registro de nuevo usuario</h5>
                                    <p class="card-text">Para que un usuario pueda registrarse en el sistema, deberá
                                        ingresar su nombre, correo electrónico
                                        y una contraseña.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4">
                            <div class="card">
                                <img src="https://www.networkpositiva.com/themes/refineriaweb/assets/image/avatar.png"
                                     class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Estudiantes</h5>
                                    <p class="card-text">En el apartado de Estudiantes, deberás conocer los siguientes
                                        datos para poder registrar un estudiante:</p>
                                    <p class="card-text">Nombre(s), Apellidos, Semestre al que pertenece, Carrera,
                                        Número de control y Correo electrónico institucional</p>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4">
                            <div class="card">
                                <img src="https://i.pinimg.com/originals/68/b3/d8/68b3d85e43aa0394838d220fb6c0502c.png"
                                     class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Equipos</h5>
                                    <p class="card-text">En el apartado de Equipos, deberás conocer los siguientes datos
                                        para poder registrar un equipo de trabajo:</p>
                                    <p class="card-text">Carrera que cursan los integrantes del equipo, Semestre al que
                                        pertenece cada uno de los integrantes
                                        del equipo, el nombre del proyecto que registrarán y el nombre del evaluador
                                        correspondiente.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4">
                            <div class="card">
                                <img src="https://chavezcarmona.com/img/tu%20proyecto/platicanos.png"
                                     class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Proyectos</h5>
                                    <p class="card-text">En el apartado de Proyectos, deberás conocer los siguientes
                                        datos para poder registrar un proyecto estudiantil:</p>
                                    <p class="card-text">Nombre del proyecto, Fecha del registro y Semestre que cursa(n)
                                        el(los) estudiante(s) que participa(n).</p>
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
                                    <p class="card-text">En el apartado de Asignaturas, deberás conocer los siguientes
                                        datos para poder registrar una asignatura:</p>
                                    <p class="card-text">Nombre de la asignatura y nombre del docente encargado de
                                        impartirla.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4">
                            <div class="card">
                                <img src="https://www.esfm.ipn.mx/assets/files/esfm/img/serv-docentes.png"
                                     class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Docentes</h5>
                                    <p class="card-text">En el apartado de Docentes, deberás conocer los siguientes
                                        datos para poder registrar un docente:</p>
                                    <p class="card-text">Nombre(s), Apellidos, Matrícula, Correo electrónico
                                        institucional y el proyecto del cual es el asesor.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4">
                            <div class="card">
                                <img src="https://seplan.yucatan.gob.mx/v2/img/seplan/armonizacion.png"
                                     class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Evaluadores</h5>
                                    <p class="card-text">En el apartado de Evaluadores, deberás conocer los siguientes
                                        datos para poder registrar un evaluador:</p>
                                    <p class="card-text">Nombre(s), Apellidos, Correo electrónico institucional y nombre
                                        del proyecto que evaluó.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4">
                            <div class="card">
                                <img src="https://i.pinimg.com/originals/47/3b/b3/473bb3cbdc37b2fa690b2e9e912fa0bd.png"
                                     class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Dudas</h5>
                                    <p class="card-text">Enviar un correo electrónico a:</p>
                                    <p class="card-text">L17TE0262@teziutlan.tecnm.mx</p>
                                    <p class="card-text">L17TE0310@teziutlan.tecnm.mx</p>
                                    <p class="card-text">L16TE0342@teziutlan.tecnm.mx</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</center>
</body>
</html>
@endsection
