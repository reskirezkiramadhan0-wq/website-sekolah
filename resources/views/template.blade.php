

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>WEB SMK YPC CINTAWA</title>

    <meta name="description" content="Website Admin SMK YPC CINTAWA">
    <meta name="author" content="SMK YPC CINTAWA">

    <!-- Favicon -->
    <link rel="icon" type="image/png"
          href="{{ asset('assets/images/favicon.ico') }}">

    <!-- Bootstrap -->
    <link rel="stylesheet"
          href="{{ asset('assets/libs/bootstrap/css/bootstrap.min.css') }}">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet"
          href="{{ asset('assets/libs/bootstrap-icons/bootstrap-icons.css') }}">

    <!-- ApexCharts -->
    <link rel="stylesheet"
          href="{{ asset('assets/libs/apexcharts/apexcharts.css') }}">

    <!-- Flatpickr -->
    <link rel="stylesheet"
          href="{{ asset('assets/libs/flatpickr/flatpickr.min.css') }}">

    <!-- Main CSS -->
    <link rel="stylesheet"
          href="{{ asset('assets/css/main.css') }}">
</head>

<body>

    <!-- =====================================================
         SIDEBAR
    ====================================================== -->

    <div class="sidebar-wrapper" id="sidebar">

        <!-- BRAND -->
        <a href="{{ url('/dashboard') }}" class="sidebar-brand">

            <img
                src="{{ asset('assets/images/logo.png') }}"
                alt="Logo SMK YPC CINTAWA"
                class="navbar-profile-img">

            <div class="sidebar-brand-text">
                <span>SMK YPC</span>
                <span>CINTAWA</span>
            </div>

        </a>


        <!-- MENU SIDEBAR -->
        <div class="flex-grow-1 overflow-y-auto">

            <!-- MENU UTAMA -->
            <div class="sidebar-menu-section">

                <div class="sidebar-menu-title">
                    Menu
                </div>

                <ul class="sidebar-menu-list">

                    <!-- DASHBOARD -->
                    <li class="sidebar-menu-item">

                        <a href="{{ url('/dashboard') }}"
                           class="sidebar-menu-link active"
                           id="menu-dashboard"
                           title="Dashboard">

                            <i class="bi bi-grid-fill"></i>

                            <span>
                                Dashboard
                            </span>

                        </a>

                    </li>

                </ul>

            </div>


            <!-- COMPONENTS -->
          

                <div class="sidebar-menu-title">
                    Components
                </div>

                <ul class="sidebar-menu-list">


                    <!-- DATA GURU -->
                    <li class="sidebar-menu-item">

                        <a href="{{ route('admin.guru.index') }}"
                           class="sidebar-menu-link"
                           id="menu-guru"
                           title="Data Guru">

                            <i class="bi bi-person-badge-fill"></i>

                            <span>
                                Data Guru
                            </span>

                        </a>

                    </li>


                       <li class="sidebar-menu-item">

                        <a href="{{ route('admin.siswa.index') }}"
                           class="sidebar-menu-link"
                           id="menu-siswa"
                           title="Data Siswa">

                            <i class="bi bi-person-vcard-fill"></i>

                            <span>
                                Data Siswa
                            </span>

                        </a>

                    </li>


                    <!-- DATA USER -->
                    <li class="sidebar-menu-item">

                        <a href="{{ route('admin.users.index') }}"
                           class="sidebar-menu-link"
                           id="menu-users"
                           title="Data User">

                            <i class="bi bi-people-fill"></i>

                            <span>
                                Data User
                            </span>

                        </a>

                    </li>


                    <!-- BERITA -->
                    <li class="sidebar-menu-item">

                        <a href="{{route('admin.berita.index')}}"
                           class="sidebar-menu-link"
                           id="menu-berita"
                           title="Berita">

                            <i class="bi bi-newspaper"></i>

                            <span>
                                Berita
                            </span>

                        </a>

                    </li>


                    <!-- EKSTRAKURIKULER -->
                    <li class="sidebar-menu-item">

                        <a href="{{route('admin.ekstrakurikuler.index')}}"
                           class="sidebar-menu-link"
                           id="menu-ekstrakurikuler"
                           title="Ekstrakurikuler">

                            <i class="bi bi-trophy-fill"></i>

                            <span>
                                Ekstrakurikuler
                            </span>

                        </a>

                    </li>


                    <!-- GALERI -->
                    <li class="sidebar-menu-item">

                        <a href="{{route('admin.galeri.index')}}"
                           class="sidebar-menu-link"
                           id="menu-galeri"
                           title="Galeri">

                            <i class="bi bi-images"></i>

                            <span>
                                Galeri
                            </span>

                        </a>

                    </li>


                    <!-- PROFILE SEKOLAH -->
                    <li class="sidebar-menu-item">

                        <a href="{{ route('admin.profile.index') }}"
                           class="sidebar-menu-link"
                           id="menu-profile-sekolah"
                           title="Profile Sekolah">

                            <i class="bi bi-building"></i>

                            <span>
                                Profile Sekolah
                            </span>

                        </a>

                    </li>

                    <li class="sidebar-menu-link"> 
                        <form action="{{ route('admin.logout') }}" method="POST">
                            @csrf
                            <button class="sidebar-menu-link logout-button" title="Logout">
                                <i class="bi bi-box-arrow-right"></i>
                            <span>Logout</span>

                            </button>
                        </form>
                    </li>
                </ul>

            </div>


            <!-- SPACER -->
            <div class="sidebar-menu-section">

                <div class="sidebar-menu-title">
                </div>

                <ul class="sidebar-menu-list">
                </ul>

            </div>

        </div>


        <!-- =====================================================
             SIDEBAR PROFILE
        ====================================================== -->

        <div class="sidebar-profile">

            <img
                src="{{ asset('assets/images/logo.png') }}"
                alt="Administrator"
                class="sidebar-profile-img">

            <div class="sidebar-profile-info">

                <div class="sidebar-profile-name">
                    Admin
                </div>

                <div class="sidebar-profile-email">
                    admin@email.com
                </div>

            </div>

        </div>

    </div>


    <!-- =====================================================
         MAIN CONTENT
    ====================================================== -->

    <header class="navbar-custom">


        <!-- BAGIAN KIRI -->
        <div class="navbar-left">


            <!-- TOGGLE DESKTOP -->
            <button
                class="btn-desktop-toggle d-none d-xl-flex align-items-center justify-content-center me-3"
                id="desktop-sidebar-toggle"
                aria-label="Minimize Sidebar">

                <i class="bi bi-chevron-bar-left"></i>

            </button>


            <!-- TOGGLE MOBILE -->
            <button
                class="sidebar-toggle-btn me-2"
                id="sidebar-toggle"
                aria-label="Toggle Navigation">

                <i class="bi bi-list"></i>

            </button>


            <!-- CREATE -->
            <button
                class="btn-quick-action"
                type="button">

                <i class="bi bi-plus-lg"></i>

                <span>
                    Create
                </span>

            </button>

        </div>



        <!-- =====================================================
             SEARCH
        ====================================================== -->

        <div class="navbar-search-wrapper">

            <input
                type="text"
                class="navbar-search-input"
                placeholder="Search anything in SMK YPC..."
                id="main-search">

            <button
                class="navbar-search-btn"
                aria-label="Search">

                <i class="bi bi-search"></i>

            </button>

        </div>



        <!-- =====================================================
             BAGIAN KANAN
        ====================================================== -->

        <div class="navbar-actions">


            <!-- FULLSCREEN -->
            <button
                class="navbar-action-btn me-1"
                aria-label="Toggle Fullscreen"
                id="btn-fullscreen">

                <i class="bi bi-arrows-fullscreen"></i>

            </button>


            <!-- NOTIFICATION -->
            <button
                class="navbar-action-btn"
                aria-label="Notifications"
                id="btn-notifications">

                <i class="bi bi-bell"></i>

                <span class="navbar-action-badge"></span>

            </button>



            <!-- =================================================
                 PROFILE ADMIN
            ================================================== -->

            <div class="dropdown ms-2">

                <button
                    class="navbar-profile-btn dropdown-toggle"
                    type="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false">


                    <img
                        src="{{ asset('assets/images/logo.png') }}"
                        alt="Administrator"
                        class="navbar-profile-img">


                    <span class="navbar-profile-name d-none d-md-inline">
                        Admin
                    </span>


                    <i class="bi bi-chevron-down navbar-profile-caret"></i>

                </button>



                <!-- DROPDOWN -->
                <ul class="dropdown-menu dropdown-menu-end">

                    <li>

                        <a class="dropdown-item"
                           href="#">

                            <i class="bi bi-person"></i>

                            Profile

                        </a>

                    </li>


                    <li>

                        <a class="dropdown-item"
                           href="#">

                            <i class="bi bi-gear"></i>

                            Settings

                        </a>

                    </li>


                    <li>

                        <hr class="dropdown-divider">

                    </li>
                </ul>

            </div>

        </div>

    </header>



    <!-- =====================================================
         CONTENT
    ====================================================== -->

    <main class="main-content">

        @yield('content')

    </main>



    <!-- =====================================================
         JAVASCRIPT
    ====================================================== -->

    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}">
    </script>

    <script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}">
    </script>

    <script src="{{ asset('assets/libs/flatpickr/flatpickr.min.js') }}">
    </script>

    <script src="{{ asset('assets/js/dashboard.js') }}">
    </script>

</body>

</html>