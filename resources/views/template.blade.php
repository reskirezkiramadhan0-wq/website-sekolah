<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>WEB SMA SIRAHCAI</title>

    <meta name="description" content="Website Admin SMA SIRAHCAI">
    <meta name="author" content="SMA SIRAHCAI">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon.ico') }}">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/libs/bootstrap/css/bootstrap.min.css') }}">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="{{ asset('assets/libs/bootstrap-icons/bootstrap-icons.css') }}">

    <!-- ApexCharts -->
    <link rel="stylesheet" href="{{ asset('assets/libs/apexcharts/apexcharts.css') }}">

    <!-- Flatpickr -->
    <link rel="stylesheet" href="{{ asset('assets/libs/flatpickr/flatpickr.min.css') }}">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
</head>

<body>

    <!-- SIDEBAR -->
    <div class="sidebar-wrapper" id="sidebar">

        <!-- BRAND -->
        <a href="{{ url('/dashboard') }}" class="sidebar-brand text-decoration-none p-3 d-flex align-items-center gap-2">
            <img src="{{ asset('assets/images/logo.png') }}" alt="Logo SMA SIRAHCAI" class="navbar-profile-img" style="width: 35px; height: 35px;">
            <div class="sidebar-brand-text">
                <span class="fw-bold text-white">SMA SIRAHCAI</span>
            </div>
        </a>

        <!-- MENU SIDEBAR -->
        <div class="flex-grow-1 overflow-y-auto px-2">

            <!-- MENU UTAMA -->
            <div class="sidebar-menu-section mb-3">

                <ul class="sidebar-menu-list list-unstyled m-0 p-0">
                    <!-- DASHBOARD -->
                    <li class="sidebar-menu-item mb-1">
                        <a href="{{ url('/dashboard') }}"
                           class="sidebar-menu-link {{ request()->is('dashboard') ? 'active' : '' }} d-flex align-items-center gap-2 px-3 py-2 rounded text-decoration-none"
                           id="menu-dashboard" title="Dashboard">
                            <i class="bi bi-grid-fill"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- COMPONENTS -->
            <div class="sidebar-menu-section">
                <div class="sidebar-menu-title">Components</div>

                <ul class="sidebar-menu-list list-unstyled m-0 p-0">
                    <!-- DATA GURU -->
                    <li class="sidebar-menu-item mb-1">
                        <a href="{{ route('admin.guru.index') }}"
                           class="sidebar-menu-link {{ request()->routeIs('admin.guru.*') ? 'active' : '' }} d-flex align-items-center gap-2 px-3 py-2 rounded text-decoration-none"
                           id="menu-guru" title="Data Guru">
                            <i class="bi bi-person-badge-fill"></i>
                            <span>Data Guru</span>
                        </a>
                    </li>

                    <!-- DATA SISWA -->
                    <li class="sidebar-menu-item mb-1">
                        <a href="{{ route('admin.siswa.index') }}"
                           class="sidebar-menu-link {{ request()->routeIs('admin.siswa.*') ? 'active' : '' }} d-flex align-items-center gap-2 px-3 py-2 rounded text-decoration-none"
                           id="menu-siswa" title="Data Siswa">
                            <i class="bi bi-person-vcard-fill"></i>
                            <span>Data Siswa</span>
                        </a>
                    </li>

                    <!-- DATA USER -->
                    <li class="sidebar-menu-item mb-1">
                        <a href="{{ route('admin.users.index') }}"
                           class="sidebar-menu-link {{ request()->routeIs('admin.users.*') ? 'active' : '' }} d-flex align-items-center gap-2 px-3 py-2 rounded text-decoration-none"
                           id="menu-users" title="Data User">
                            <i class="bi bi-people-fill"></i>
                            <span>Data User</span>
                        </a>
                    </li>

                    <!-- BERITA -->
                    <li class="sidebar-menu-item mb-1">
                        <a href="{{ route('admin.berita.index') }}"
                           class="sidebar-menu-link {{ request()->routeIs('admin.berita.*') ? 'active' : '' }} d-flex align-items-center gap-2 px-3 py-2 rounded text-decoration-none"
                           id="menu-berita" title="Berita">
                            <i class="bi bi-newspaper"></i>
                            <span>Berita</span>
                        </a>
                    </li>

                    <!-- EKSTRAKURIKULER -->
                    <li class="sidebar-menu-item mb-1">
                        <a href="{{ route('admin.ekstrakurikuler.index') }}"
                           class="sidebar-menu-link {{ request()->routeIs('admin.ekstrakurikuler.*') ? 'active' : '' }} d-flex align-items-center gap-2 px-3 py-2 rounded text-decoration-none"
                           id="menu-ekstrakurikuler" title="Ekstrakurikuler">
                            <i class="bi bi-trophy-fill"></i>
                            <span>Ekstrakurikuler</span>
                        </a>
                    </li>

                    <!-- GALERI -->
                    <li class="sidebar-menu-item mb-1">
                        <a href="{{ route('admin.galeri.index') }}"
                           class="sidebar-menu-link {{ request()->routeIs('admin.galeri.*') ? 'active' : '' }} d-flex align-items-center gap-2 px-3 py-2 rounded text-decoration-none"
                           id="menu-galeri" title="Galeri">
                            <i class="bi bi-images"></i>
                            <span>Galeri</span>
                        </a>
                    </li>

                    <!-- PROFILE SEKOLAH -->
                    <li class="sidebar-menu-item mb-1">
                        <a href="{{ route('admin.profile.index') }}"
                           class="sidebar-menu-link {{ request()->routeIs('admin.profile.*') ? 'active' : '' }} d-flex align-items-center gap-2 px-3 py-2 rounded text-decoration-none"
                           id="menu-profile-sekolah" title="Profile Sekolah">
                            <i class="bi bi-building"></i>
                            <span>Profile Sekolah</span>
                        </a>
                    </li>

                    <!-- LOGOUT -->
                    <li class="sidebar-logout mt-3">
                        <form action="{{ route('admin.logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn-logout w-100 d-flex align-items-center gap-2 px-3 py-2 border-0 bg-transparent text-danger">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Logout</span>
                            </button>
                        </form>
                    </li>
                </ul>
            </div>

        </div>

        <!-- SIDEBAR PROFILE -->
        <div class="sidebar-profile p-3 border-top d-flex align-items-center gap-2 mt-auto">
            <img src="{{ asset('assets/images/logo.png') }}" alt="Administrator" class="sidebar-profile-img" style="width: 35px; height: 35px;">
            <div class="sidebar-profile-info">
                <div class="sidebar-profile-name fw-bold text-white small">Admin</div>
                <div class="sidebar-profile-email text-muted small" style="font-size: 0.75rem;">admin@email.com</div>
            </div>
        </div>

    </div>

    <!-- NAVBAR HEADER -->
    <header class="navbar-custom">
        <div class="navbar-left d-flex align-items-center">
            <button class="btn-desktop-toggle d-none d-xl-flex align-items-center justify-content-center me-3 btn btn-light btn-sm"
                    id="desktop-sidebar-toggle" aria-label="Minimize Sidebar">
                <i class="bi bi-chevron-bar-left"></i>
            </button>

            <button class="sidebar-toggle-btn me-2 btn btn-light btn-sm d-xl-none" id="sidebar-toggle" aria-label="Toggle Navigation">
                <i class="bi bi-list"></i>
            </button>

            <button class="btn btn-primary btn-sm d-flex align-items-center gap-1" type="button">
                <i class="bi bi-plus-lg"></i>
                <span>Create</span>
            </button>
        </div>

        <form action="{{ route('admin.search') }}" method="GET" class="d-flex align-items-center ms-auto" style="max-width: 300px; width: 100%;">
            <div class="input-group position-relative">
                <input type="text" 
                       name="q" 
                       class="form-control rounded-pill px-3" 
                       placeholder="Search anything ..." 
                       value="{{ request('q') }}">
                <button type="submit" class="btn border-0 bg-transparent position-absolute end-0 me-2 z-3 top-50 translate-middle-y">
                    <i class="bi bi-search"></i>
                </button>
            </div>
        </form>
    </header>

    <!-- MAIN CONTENT -->
    <main class="main-content">
        @yield('content')
    </main>

    <!-- JAVASCRIPT -->
    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/libs/flatpickr/flatpickr.min.js') }}"></script>
    <script src="{{ asset('assets/js/dashboard.js') }}"></script>

</body>
</html>