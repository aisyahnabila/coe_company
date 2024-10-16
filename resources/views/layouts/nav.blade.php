<nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('assets/img/logo.png') }}" alt="Logo">
        </a>
        <button class="navbar-toggler navbar-hamburger" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('ss') ? 'active' : '' }}"
                            href="{{ route('index') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('tentang') ? 'active' : '' }}"
                            href="#tentang">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('seminar') ? 'active' : '' }}"
                            href="{{ url('/') }}#seminar">Pelatihan & Seminar</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('penelitian') ? 'active' : '' }}" href="#">Penelitian</a>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('kerjasama') ? 'active' : '' }}"
                            href="{{ url('/') }}#kerjasama">Kerja sama</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('pengmas') ? 'active' : '' }}"
                            href="{{ url('/') }}#pengabdian">Pengmas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('mitra') ? 'active' : '' }}"
                            href="{{ url('/') }}#mitra">Mitra</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('ss') ? 'active' : '' }}"
                            href="{{ route('staff') }}">Staf</a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</nav>

