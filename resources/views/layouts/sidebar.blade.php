<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand logotipas -->
    <a href="{{ route('home') }}" class="brand-link">
        <span class="brand-text font-weight-light">Konferencijų sistema</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Naudotojo info -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                <a href="#" class="d-block">Dmitrij (demo naudotojas)</a>
            </div>
        </div>

        <!-- Meniu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">

                {{-- Kliento posistemis --}}
                <li class="nav-item">
                    <a href="{{ route('client.conferences.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>Kliento posistemis</p>
                    </a>
                </li>

                {{-- Darbuotojo posistemis --}}
                <li class="nav-item">
                    <a href="{{ route('employee.conferences.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-briefcase"></i>
                        <p>Darbuotojo posistemis</p>
                    </a>
                </li>

                {{-- Administratoriaus posistemis --}}
                <li class="nav-item has-treeview menu-open">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link">
                        <i class="nav-icon fas fa-user-shield"></i>
                        <p>
                            Administratoriaus posistemis
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.users.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Naudotojų valdymas</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.conferences.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Konferencijų valdymas</p>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav>
    </div>
</aside>
