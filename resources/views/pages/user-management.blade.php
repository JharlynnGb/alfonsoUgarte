@extends('layouts.app')

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Gestión de usuarios'])
    <div class="row mt-4 mx-4">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <div class="d-flex align-items-center">
                        <p class="mb-0">Usuarios</p>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary btn-sm ms-auto" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            NUEVO
                        </button>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nombre
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Apellido
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Correo Electronico
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Rol
                                    </th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Fecha reg</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Accion</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex px-3 py-1">
                                            <div>
                                                <img src="./img/team-3.jpg" class="avatar me-3" alt="image">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">{{ auth()->user()->firstname ?? 'Nombre' }}</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-middle justify-content-center text-sm">
                                        <p class="text-sm font-weight-bold mb-0">{{ auth()->user()->lastname ?? 'Lastname' }}</p>
                                    </td>
                                    <td class="align-middle justify-content-center text-sm">
                                        <p class="text-sm font-weight-bold mb-0">{{ auth()->user()->email ?? 'Email' }}</p>
                                    </td>
                                    <td class="text-sm">
                                        <span class="badge badge-sm bg-gradient-success">admin</span>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <p class="text-sm font-weight-bold mb-0">{{ auth()->user()->created_at ?? 'Created_at' }}</p>
                                    </td>
                                    <td class="align-middle text-end">
                                        <div class="d-flex px-1 py-1 justify-content-center align-items-center">
                                            <button type="button" class="btn btn-info btn-xs me-2">
                                                <i class="fas fa-edit"></i> <!-- Icono de edición -->
                                            </button>
                                            <button type="button" class="btn btn-danger btn-xs">
                                                <i class="fas fa-trash-alt"></i> <!-- Icono de eliminación -->
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                
                                <!-- <tr>
                                    <td>
                                        <div class="d-flex px-3 py-1">
                                            <div>
                                                <img src="./img/team-2.jpg" class="avatar me-3" alt="image">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">Jeimy</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-sm">
                                        <span class="badge badge-sm bg-gradient-success">admin</span>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <p class="text-sm font-weight-bold mb-0">22/03/2022</p>
                                    </td>
                                    <td class="align-middle text-end">
                                        <div class="d-flex px-1 py-1 justify-content-center align-items-center">
                                            <button type="button" class="btn btn-info btn-xs me-2">
                                                <i class="fas fa-edit"></i> 
                                            </button>
                                            <button type="button" class="btn btn-danger btn-xs">
                                                <i class="fas fa-trash-alt"></i> 
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex px-3 py-1">
                                            <div>
                                                <img src="./img/team-1.jpg" class="avatar me-3" alt="image">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">Geraldine</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-sm">
                                        <span class="badge badge-sm bg-gradient-success">admin</span>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <p class="text-sm font-weight-bold mb-0">22/03/2022</p>
                                    </td>
                                    <td class="align-middle text-end">
                                        <div class="d-flex px-1 py-1 justify-content-center align-items-center">
                                            <button type="button" class="btn btn-info btn-xs me-2">
                                                <i class="fas fa-edit"></i> 
                                            </button>
                                            <button type="button" class="btn btn-danger btn-xs">
                                                <i class="fas fa-trash-alt"></i> 
                                            </button>
                                        </div>
                                    </td>
                                </tr> -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
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
                            <label for="descripcion" class="form-control-label">Usuario</label>
                            <input type="text" name="username" class="form-control" placeholder="Username"
                                aria-label="Name" value="{{ old('username') }}">
                            @error('username')
                                <p class='text-danger text-xs pt-1'> {{ $message }} </p>
                            @enderror
                        </div>
                        <div class="flex flex-col mb-3">
                            <label for="descripcion" class="form-control-label">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="admin@gmail.com"
                                aria-label="Email" value="{{ old('email') }}">
                            @error('email')
                                <p class='text-danger text-xs pt-1'> {{ $message }} </p>
                            @enderror
                        </div>
                        <div class="flex flex-col mb-3">
                            <label for="descripcion" class="form-control-label">Contraseña</label>
                            <input type="password" name="password" class="form-control" placeholder="Password"
                                aria-label="Password">
                            @error('password')
                                <p class='text-danger text-xs pt-1'> {{ $message }} </p>
                            @enderror
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                <i class="fas fa-times"></i>
                            </button>
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection
