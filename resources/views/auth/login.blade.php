@extends('layouts.app')

@section('content')
    <main class="main-content  mt-0"
        style="background-image: url(https://png.pngtree.com/background/20230401/original/pngtree-school-classroom-desk-background-picture-image_2252872.jpg)">
        <section>
            <div class="page-header min-vh-100">
                <div class="container">
                    <div class="row justify-content-center ">
                        <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto ">
                            <div class="card card-plain bg-white">
                                <div class="card-header text-center pt-4">
                                    <h5>Iniciar Sesion</h5>
                                    <p class="mb-0">Ingrese su usuario y contraseña</p>
                                </div>

                                <div class="card-body">
                                    <form role="form" method="POST" action="{{ route('login.perform') }}">
                                        @csrf
                                        @method('post')
                                        <div class="flex flex-col mb-3">
                                            <input type="text" name="username" class="form-control"
                                                value="{{ old('username') ?? 'jharlynn' }}" aria-label="Username">
                                            @error('username')
                                                <p class="text-danger text-xs pt-1"> {{ $message }} </p>
                                            @enderror
                                        </div>
                                        <div class="flex flex-col mb-3">
                                            <input type="password" name="password" class="form-control"
                                                aria-label="Password" value="1234567">
                                            @error('password')
                                                <p class="text-danger text-xs pt-1"> {{ $message }} </p>
                                            @enderror
                                        </div>
                                        <div class="form-check form-info">
                                            <input class="form-check-input" type="checkbox" id="rememberMe">
                                            <label class="form-check-label" for="rememberMe">Recordar</label>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Ingresar</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                    <p class="mb-1 text-sm mx-auto">
                                        Olvido su contraseña? desea recuperarla
                                        <a href="{{ route('reset-password') }}"
                                            class="text-primary text-gradient font-weight-bold">here</a>
                                    </p>
                                </div>
                                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                    <p class="mb-4 text-sm mx-auto">
                                        Ahun no tiene una cuenta?
                                        <a href="{{ route('register') }}"
                                            class="text-primary text-gradient font-weight-bold">Sign up</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
