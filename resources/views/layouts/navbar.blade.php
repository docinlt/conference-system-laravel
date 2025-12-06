<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                <i class="fas fa-bars"></i>
            </a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('home') }}" class="nav-link">Pradžia</a>
        </li>
    </ul>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item mr-3">
            {{-- Logout turi būti disabled pagal užduotį --}}
            <button class="btn btn-outline-secondary btn-sm" disabled>Logout</button>
        </li>
        <li class="nav-item">
            <span class="nav-link">
                {{-- Čia gali įdėti realų vartotoją, jeigu naudoji auth --}}
                Dmitrij Testuser
            </span>
        </li>
    </ul>
</nav>
