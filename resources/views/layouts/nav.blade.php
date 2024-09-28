<nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{asset('assets/img/logo.png')}}" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="{{route('index')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pelatihan & Seminar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Penelitian</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Kerjasama</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pengmas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Tentang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('staff')}}">Staf</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
