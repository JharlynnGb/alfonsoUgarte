@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
@include('layouts.navbars.auth.topnav', ['title' => 'Nota'])
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <div class="d-flex align-items-center">
                        <h6>Usuarios</h6>
                        <button type="button" class="btn btn-primary btn-sm ms-auto" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            + OBSERVACIÓN
                        </button>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Curso</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        |</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        ||</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        |||</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        |V</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Observacion</th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <!-- <div>
                                                    <img src="/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user1">
                                                </div> -->
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">Curso</h6>
                                                <p class="text-xs text-secondary mb-0">Profesor</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">Nota |</p>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <span class="text-secondary text-xs font-weight-bold">Nota ||</span>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span class="text-secondary text-xs font-weight-bold">Nota |||</span>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span class="text-secondary text-xs font-weight-bold">Nota |V</span>
                                    </td>
                                    <td class="align-middle">
                                        <div class="d-flex px-1 py-1 justify-content-center align-items-center">
                                            <button type="button" class="btn btn-info btn-xs me-2" data-bs-toggle="modal" data-bs-target="#obsModal">
                                                <i class="	far fa-comment-dots"></i> <!-- Icono de edición -->
                                            </button>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <!-- <div>
                                                    <img src="/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user1">
                                                </div> -->
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">Curso</h6>
                                                <p class="text-xs text-secondary mb-0">Profesor</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">Nota |</p>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <span class="text-secondary text-xs font-weight-bold">Nota ||</span>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span class="text-secondary text-xs font-weight-bold">Nota |||</span>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span class="text-secondary text-xs font-weight-bold">Nota |V</span>
                                    </td>
                                    <td class="align-middle">
                                        <div class="d-flex px-1 py-1 justify-content-center align-items-center">
                                            <button type="button" class="btn btn-info btn-xs me-2">
                                                <i class="	far fa-comment-dots"></i> <!-- Icono de edición -->
                                            </button>
                                        </div>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footers.auth.footer')
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Nuevo Usuario</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('register.perform') }}">
                        @csrf
                        <div class="flex flex-col mb-3">
                            <label for="descripcion" class="form-control-label">Alumno</label>
                            <input type="text" name="username" class="form-control" placeholder="Estudiante"
                                aria-label="Name" value="{{ old('username') }}">
                            @error('firstname')
                                <p class='text-danger text-xs pt-1'> {{ $message }} </p>
                            @enderror
                        </div>
                        <div class="flex flex-col mb-3">
                            <label for="descripcion" class="form-control-label">Curso</label>
                            <input type="text" name="curso" class="form-control" placeholder="Materia"
                                aria-label="curso" value="{{ old('email') }}">
                        </div>
                        <div class="flex flex-col mb-3">
                            <label for="descripcion" class="form-control-label">Observación</label>
                            <input type="text" name="observacion" class="form-control" placeholder="Observación"
                                aria-label="observacion">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
                                <i class="fas fa-times"></i>
                            </button>
                            <button type="submit" class="btn btn-secondary">
                                <i class="fas fa-save"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL OBSERVACIONES -->
    <div class="modal fade" id="obsModal" tabindex="-1" role="dialog" aria-labelledby="obsModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="obsModalLabel">OBSERVACIÓN</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('register.perform') }}">
                        @csrf
                        <div class="flex flex-col mb-3">
                            <label for="descripcion" class="form-control-label">Observación</label>
                            <input type="text" name="observacion" class="form-control" placeholder="Estudiante"
                                aria-label="observacion" value="#">
                        </div>
                        <!-- <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
                                <i class="fas fa-times"></i>
                            </button>
                            <button type="submit" class="btn btn-secondary">
                                <i class="fas fa-save"></i>
                            </button>
                        </div> -->
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection