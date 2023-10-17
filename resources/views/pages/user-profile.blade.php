@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Mi Perfil'])
    <div class="container-fluid py-8">
        <div class="card shadow-lg mx-4 card-profile">
            <div class="card-body p-3">
                <div class="row gx-4">
                    <div class="col-auto">
                        <!-- <div class="avatar avatar-xl position-relative">
                            <img src="/img/team-3.jpg" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
                        </div>
                        <div class="avatar avatar-xl position-relative">
                            <img src="{{ auth()->user()->profile_image ?? '/img/default_profile.jpg' }}" alt="profile_image" id="profile_image" class="w-100 border-radius-lg shadow-sm">
                            <input type="file" id="profile_image_upload" style="display: none;">
                            <label for="profile_image_upload" class="btn btn-primary btn-sm">Cambiar Foto</label>
                        </div> -->
                    </div>
                    <div class="col-auto my-auto">
                        <div class="h-100">
                            <h5 class="mb-1">
                                {{ auth()->user()->username ?? 'Firstname' }} <!-- {{ auth()->user()->lastname ?? 'Lastname' }} -->
                            </h5>
                            <p class="mb-0 font-weight-bold text-sm">
                                Administrador
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="alert">
            @include('components.alert')
        </div>
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <form role="form" method="POST" action={{ route('profile.update') }}
                            enctype="multipart/form-data">
                            @csrf
                            <div class="card-header pb-0">
                                <div class="d-flex align-items-center">
                                    <p class="mb-0">Editar perfil</p>
                                    <button type="submit" class="btn btn-primary btn-sm ms-auto">GUARDAR</br>
                                        <!-- <i class="fa fa-save"></i> -->
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="text-uppercase text-sm">Informacion de Usuario</p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Usuario</label>
                                            <input class="form-control" type="text" name="username"
                                                value="{{ old('username', auth()->user()->username) }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Correo Electronico</label>
                                            <input class="form-control" type="email" name="email"
                                                value="{{ old('email', auth()->user()->email) }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Nombre</label>
                                            <input class="form-control" type="text" name="firstname"
                                                value="{{ old('firstname', auth()->user()->firstname) }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Apellido</label>
                                            <input class="form-control" type="text" name="lastname"
                                                value="{{ old('lastname', auth()->user()->lastname) }}">
                                        </div>
                                    </div>
                                </div>
                                <hr class="horizontal dark">
                                <p class="text-uppercase text-sm">Informacion de Direccion</p>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Telefono</label>
                                            <input class="form-control" type="text" name="address"
                                                value="{{ old('address', auth()->user()->address) }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Dirección</label>
                                            <input class="form-control" type="text" name="city"
                                                value="{{ old('city', auth()->user()->city) }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Ciudad</label>
                                            <input class="form-control" type="text" name="country"
                                                value="{{ old('country', auth()->user()->country) }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Codigo postal</label>
                                            <input class="form-control" type="text" name="postal"
                                                value="{{ old('postal', auth()->user()->postal) }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-profile">
                        <img src="/img/au.png" alt="Image placeholder" class="card-img-top">
                        <div class="row justify-content-center">
                            <div class="col-4 col-lg-4 order-lg-2">
                                <div class="mt-n4 mt-lg-n6 mb-4 mb-lg-0">
                                    <a href="javascript:;">
                                        <img src="/img/icon-user.png"
                                            class="rounded-circle img-fluid border border-2 border-white">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-header text-center border-0 pt-0 pt-lg-2 pb-4 pb-lg-3">
                            <h6 class="mb-3 text-sm">{{ auth()->user()->username ?? 'Firstname' }}</h6>
                        </div>
                        <div class="card-body pt-0">
                            <!-- <div class="row">
                                <div class="col">
                                    <div class="d-flex justify-content-center">
                                        <div class="d-grid text-center">
                                            <span class="text-lg font-weight-bolder">20</span>
                                            <span class="text-sm opacity-8">Años</span>
                                        </div>
                                        <div class="d-grid text-center mx-4">
                                            <span class="text-lg font-weight-bolder">0</span>
                                            <span class="text-sm opacity-8">Fotos</span>
                                        </div>
                                        <div class="d-grid text-center">
                                            <span class="text-lg font-weight-bolder">10</span>
                                            <span class="text-sm opacity-8">Proyectos</span>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <div class="text-start mt-4">
                                <div class="d-flex flex-column">
                                    <span class="mb-4 text-xs">Nombres: <span
                                            class="text-dark font-weight-bold ms-sm-2">{{ auth()->user()->firstname ?? 'Firstname' }}</span></span>
                                    <span class="mb-4 text-xs">Apellidos: <span
                                            class="text-dark font-weight-bold ms-sm-2">{{ auth()->user()->lastname ?? 'Lastname' }}</span></span>
                                    <span class="mb-4 text-xs">Correo Electronico: <span
                                            class="text-dark ms-sm-2 font-weight-bold">{{ auth()->user()->email ?? 'Email' }}</span></span>
                                    <span class="mb-4 text-xs">Direccion: <span
                                            class="text-dark ms-sm-2 font-weight-bold">{{ auth()->user()->country ?? 'Country' }}</span></span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footers.auth.footer')
    </div>
@endsection
