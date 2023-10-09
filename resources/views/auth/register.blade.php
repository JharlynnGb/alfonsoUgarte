@extends('layouts.app')

@section('content')
    <main class="main-content  mt-0"
        style="background-image: url(https://png.pngtree.com/background/20230401/original/pngtree-school-classroom-desk-background-picture-image_2252872.jpg)">
        <div class="page-header min-vh-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
                        <div class="card z-index-0">
                            <div class="card-header text-center pt-4">
                                <h5>Registrarse</h5>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('register.perform') }}">
                                    @csrf
                                    <div class="flex flex-col mb-3">
                                        <input type="text" name="username" class="form-control" placeholder="Username"
                                            aria-label="Name" value="{{ old('username') }}">
                                        @error('username')
                                            <p class='text-danger text-xs pt-1'> {{ $message }} </p>
                                        @enderror
                                    </div>
                                    <div class="flex flex-col mb-3">
                                        <input type="email" name="email" class="form-control" placeholder="Email"
                                            aria-label="Email" value="{{ old('email') }}">
                                        @error('email')
                                            <p class='text-danger text-xs pt-1'> {{ $message }} </p>
                                        @enderror
                                    </div>
                                    <div class="flex flex-col mb-3">
                                        <input type="password" name="password" class="form-control" placeholder="Password"
                                            aria-label="Password">
                                        @error('password')
                                            <p class='text-danger text-xs pt-1'> {{ $message }} </p>
                                        @enderror
                                    </div>
                                    <div class="form-check form-check-info text-start">
                                        <input class="form-check-input" type="checkbox" name="terms"
                                            id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Aceptar <a href="javascript:;" class="text-dark font-weight-bolder">Terminos y Condiciones</a>
                                        </label>
                                        @error('terms')
                                            <p class='text-danger text-xs'> {{ $message }} </p>
                                        @enderror
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Confirmar</button>
                                    </div>
                                    <p class="text-sm mt-3 mb-0">Ya tiene una cuenta? <a href="{{ route('login') }}"
                                            class="text-dark font-weight-bolder">Sign in</a></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @endsection
