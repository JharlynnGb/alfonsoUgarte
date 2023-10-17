<aside class="sidenav bg-light navbar navbar-vertical navbar-expand-xs fixed-start" id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none mr-2"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0 {{ Route::currentRouteName() == 'home' ? 'active' : '' }}"
        href="{{ route('home') }}">
            <img src="https://cdn-icons-png.flaticon.com/128/3655/3655598.png" class="navbar-brand-img h-100"
                alt="main_logo">
            <span class="font-weight-bold"> Alfonso Ugarte</span>
        </a>
    </div>
    <hr class="horizontal dark ">
    <div class="collapse navbar-collapse h-auto w-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item ">
                <a class="nav-link {{ Route::currentRouteName() == 'home' ? 'active' : '' }}"
                    href="{{ route('home') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Inicio</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'profile' ? 'active' : '' }}"
                    href="{{ route('profile') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Perfil</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ str_contains(request()->url(), 'user-management') == true ? 'active' : '' }}"
                    href="{{ route('page', ['page' => 'user-management']) }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="far fa-address-card text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Usuarios</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ str_contains(request()->url(), 'tables') == true ? 'active' : '' }}"
                    href="{{ route('page', ['page' => 'tables']) }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-user-graduate text-warning text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Estudiantes</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ str_contains(request()->url(), 'billing') == true ? 'active' : '' }}"
                    href="{{ route('page', ['page' => 'billing']) }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-book text-success text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Cursos</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'grade' ? 'active' : '' }}"
                    href="{{ route('grade') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-file-alt text-info text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Notas</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'reminder' ? 'active' : '' }}"
                    href="{{ route('reminder') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-thumbtack	 text-danger text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Recordatorio</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
