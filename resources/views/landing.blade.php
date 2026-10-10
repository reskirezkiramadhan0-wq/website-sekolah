<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SMA SIRAHCAI</title>

    <link rel="icon" href="{{ asset('images/logo.png') }}">

    <link rel="stylesheet"
        href="{{ asset('assets/libs/bootstrap/css/bootstrap.min.css') }}">

    <link rel="stylesheet"
        href="{{ asset('assets/libs/bootstrap-icons/bootstrap-icons.css') }}">

    <style>
        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: #f7f8fa;
            color: #17202a;
        }

        /* NAVBAR */
        .navbar-custom {
            background: #2f4a66;
            padding: 14px 0;
        }

        .navbar-brand {
            color: rgb(245, 248, 249) !important;
            font-weight: 800;
            font-size: 19px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .navbar-brand img {
            width: 42px;
            height: 42px;
            object-fit: contain;
        }

        .navbar-custom .nav-link {
            color: #ffffff !important;
            font-size: 14px;
            font-weight: 600;
            margin-left: 18px;
            transition: .3s;
        }

        .navbar-custom .nav-link:hover {
            color: #0b7882 !important;
        }

        .btn-login {
            background: #22b1e1;
            color: #ffffff !important;
            border: none;
            border-radius: 8px;
            padding: 9px 17px;
            font-weight: 700;
        }

        .btn-login:hover {
            background: #3eb8e5;
            color: #101820 !important;
        }

        .navbar-toggler {
            border: 1px solid #ffffff;
        }

        .navbar-toggler-icon {
            filter: invert(1);
        }

        /* SECTION */
        .section {
            padding: 90px 0;
        }

        .section-label {
            color: #21c1fc;
            font-size: 13px;
            font-weight: 800;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 10px;
        }

        .section-title {
            font-size: 38px;
            font-weight: 800;
            margin-bottom: 15px;
            color: #101820;
        }

        .section-description {
            color: #7b8790;
            line-height: 1.8;
        }

        /* GURU */
        .guru-card {
            background: white;
            border: 1px solid #edf0f2;
            border-radius: 18px;
            overflow: hidden;
            height: 100%;
            transition: .3s;
        }

        .guru-card:hover {
            transform: translateY(-7px);
            box-shadow: 0 15px 35px rgba(0,0,0,.08);
        }

        .guru-photo {
            height: 280px;
            background: #101820;
        }

        .guru-photo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .guru-placeholder {
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #ff9f1c;
            font-size: 70px;
        }

        .guru-content {
            padding: 22px;
        }

        .guru-content h4 {
            font-size: 19px;
            font-weight: 800;
            margin-bottom: 6px;
        }

        .guru-content p {
            color: #ff9f1c;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .guru-content span {
            color: #89939b;
            font-size: 12px;
        }


       /* =========================
        EKSTRAKURIKULER
        ========================= */

        .ekstra-section {
            background: #f7f8fa;
            padding: 90px 0;
        }

        .ekstra-heading {
            margin-bottom: 50px;
        }

        .ekstra-heading .section-title {
            margin-bottom: 12px;
        }


        /* CARD */

        .ekstra-card {
            background: #ffffff;
            border: 1px solid #e5e8eb;
            border-radius: 18px;
            overflow: hidden;
            height: 100%;
            display: flex;
            flex-direction: column;
            transition: all .3s ease;
        }

        .ekstra-card:hover {
            transform: translateY(-7px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, .10);
        }


        /* FOTO */

        .ekstra-image {
            width: 100%;
            height: 230px;
            overflow: hidden;
            background: #e9ecef;
            flex-shrink: 0;
        }

        .ekstra-image img {
            width: 100%;
            height: 100%;
            display: block;
            object-fit: cover;
            transition: transform .4s ease;
        }

        .ekstra-card:hover .ekstra-image img {
            transform: scale(1.05);
        }


        /* FOTO KOSONG */

        .ekstra-no-image {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #e9ecef;
            color: #adb5bd;
            font-size: 55px;
        }

         /* PROFIL SEKOLAH */
        .profil-building {
            display: block;
            width: 100%;
            height: 290px;
            object-fit: cover;
            border-radius: 16px;
            box-shadow: 0 12px 30px rgba(23, 101, 202, .12);
        }

        .profil-building-placeholder {
            height: 290px;
            border-radius: 16px;
            background: linear-gradient(135deg, #dcecff, #f1f7ff);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 12px;
            color: #1765ca;
            font-size: 18px;
            font-weight: 700;
        }

        .profil-building-placeholder i {
            font-size: 65px;
        }


        /* CONTENT */

        .ekstra-content {
            padding: 22px;
            flex: 1;
            display: flex;
            flex-direction: column;
        }


        /* LABEL */

        .ekstra-label {
            color: #ff9f1c;
            font-size: 12px;
            font-weight: 800;
            letter-spacing: .3px;
            margin-bottom: 8px;
        }


        /* NAMA */

        .ekstra-content h3 {
            color: #101820;
            font-size: 23px;
            font-weight: 800;
            margin: 0 0 14px;
        }


        /* INFO */

        .ekstra-info {
            border-top: 1px solid #edf0f2;
            border-bottom: 1px solid #edf0f2;
            padding: 12px 0;
            margin-bottom: 15px;
        }

        .ekstra-info div {
            display: flex;
            align-items: flex-start;
            gap: 9px;
            color: #66727c;
            font-size: 14px;
            line-height: 1.5;
            margin-bottom: 8px;
        }

        .ekstra-info div:last-child {
            margin-bottom: 0;
        }

        .ekstra-info i {
            color: #ff9f1c;
            font-size: 15px;
            margin-top: 2px;
            flex-shrink: 0;
        }


        /* DESKRIPSI */

        .ekstra-description {
            color: #7b8790;
            font-size: 15px;
            line-height: 1.7;
            margin: 0;
        }


        /* RESPONSIVE */

        @media (max-width: 991px) {

            .ekstra-image {
                height: 240px;
            }

        }


        @media (max-width: 768px) {

            .ekstra-section {
                padding: 65px 0;
            }

            .ekstra-heading {
                margin-bottom: 35px;
            }

            .ekstra-image {
                height: 230px;
            }

        }

        .btn-ekstra-detail {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            margin-top: auto;
            padding-top: 18px;
            color: #ff9f1c;
            font-size: 14px;
            font-weight: 800;
            text-decoration: none;
            transition: .3s;
        }

        .btn-ekstra-detail:hover {
            color: #101820;
            gap: 12px;
        }

        .btn-lihat-semua {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 9px 16px;
            background: #1768b2;
            color: #fff;
            text-decoration: none;
            border-radius: 7px;
            font-size: 14px;
            font-weight: 600;
            transition: 0.2s;
        }

        .btn-lihat-semua:hover {
            background: #105493;
            color: #fff;
        }


        @media (max-width: 576px) {

            .ekstra-image {
                height: 220px;
            }

            .ekstra-content {
                padding: 20px;
            }

            .ekstra-content h3 {
                font-size: 21px;
            }

        }

        .profil-section {
        background: #f5f8fc;
        color: #102750;
        padding: 70px 0 !important;
    }

    .profil-section .container {
        max-width: 1400px;
    }

    .profil-label {
        display: inline-block;
        color: #0866e9;
        font-size: 14px;
        font-weight: 800;
        letter-spacing: 1.5px;
        margin-bottom: 10px;
    }

    .profil-title {
        font-size: clamp(32px, 4vw, 48px);
        font-weight: 800;
        margin-bottom: 10px;
    }

    .profil-subtitle {
        color: #64748b;
        font-size: 17px;
    }

    .profil-hero {
        background: #fff;
        border: 1px solid #e1ebfa;
        border-radius: 22px;
        padding: 35px;
        box-shadow: 0 10px 35px rgba(25, 65, 120, .06);
    }

    .profil-logo {
        width: 100px;
        height: 100px;
        object-fit: contain;
    }

    .profil-logo-placeholder {
        width: 100px;
        height: 100px;
        margin: auto;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #edf4ff;
        color: #0866e9;
        border-radius: 18px;
        font-size: 50px;
    }

    .profil-description {
        font-size: 15px;
        line-height: 1.9;
    }

    .profil-building {
        display: block;
        width: 100%;
        height: 290px;
        object-fit: cover;
        border-radius: 16px;
    }

    .profil-building-placeholder {
        height: 290px;
        border-radius: 16px;
        background: linear-gradient(135deg, #dcecff, #f1f7ff);
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        gap: 12px;
        color: #1765ca;
        font-size: 18px;
    }

    .profil-building-placeholder i {
        font-size: 65px;
    }

    .profil-info-card {
        min-height: 120px;
        display: flex;
        align-items: center;
        gap: 16px;
        padding: 22px;
        background: #fff;
        border: 1px solid #e3ecf8;
        border-radius: 17px;
        box-shadow: 0 5px 18px rgba(25, 65, 120, .04);
    }

    .profil-info-icon {
        width: 58px;
        height: 58px;
        min-width: 58px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #e7f1ff;
        color: #0866e9;
        border-radius: 50%;
        font-size: 25px;
    }

    .profil-info-card small {
        display: block;
        color: #64748b;
        margin-bottom: 7px;
    }

    .profil-info-card h6 {
        margin: 0;
        font-size: 15px;
        font-weight: 750;
        overflow-wrap: anywhere;
    }

    .profil-content-card {
        padding: 32px;
        border-radius: 20px;
        background: #fff;
        border: 1px solid #e0ebfa;
        box-shadow: 0 5px 20px rgba(25, 65, 120, .04);
    }

    .visi-card {
        background: linear-gradient(135deg, #fff, #edf5ff);
    }

    .misi-card {
        background: linear-gradient(135deg, #fff, #effbf5);
        border-color: #d8f0e3;
    }

    .profil-heading-icon {
        width: 65px;
        height: 65px;
        min-width: 65px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #0866e9;
        color: white;
        border-radius: 50%;
        font-size: 29px;
    }

    .green-icon {
        background: #07975b;
    }

    .profil-visi-text {
        color: #1765ca;
        font-size: 21px;
        font-weight: 600;
        font-style: italic;
        line-height: 1.8;
        margin: 0;
    }

    .profil-misi-text {
        color: #526783;
        font-size: 16px;
        line-height: 2;
        overflow-wrap: anywhere;
    }

    .profil-banner {
        display: flex;
        align-items: center;
        gap: 25px;
        padding: 28px 35px;
        border-radius: 18px;
        background: linear-gradient(110deg, #075bd7, #35b4f5);
        color: #fff;
        box-shadow: 0 8px 22px rgba(8, 102, 233, .15);
    }

    .profil-banner-icon {
        width: 65px;
        height: 65px;
        min-width: 65px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #fff;
        color: #0866e9;
        border-radius: 50%;
        font-size: 30px;
    }

    .profil-banner h4 {
        font-size: 21px;
        font-weight: 750;
        margin-bottom: 8px;
    }

    .profil-banner p {
        margin: 0;
        color: #eaf4ff;
    }

    .profil-banner-button {
        flex-shrink: 0;
        padding: 13px 22px;
        border-radius: 30px;
        background: #fff;
        color: #0866e9;
        font-weight: 650;
    }

    .profil-banner-button:hover {
        background: #eaf3ff;
        color: #064fb4;
    }

    @media (max-width: 991px) {
        .profil-hero {
            padding: 25px;
        }

        .profil-building {
            height: 260px;
        }

        .profil-banner {
            flex-wrap: wrap;
        }
    }

    @media (max-width: 576px) {
        .profil-section {
            padding: 45px 0 !important;
        }

        .profil-hero,
        .profil-content-card {
            padding: 22px;
        }

        .profil-building {
            height: 210px;
        }

        .profil-banner {
            padding: 24px;
            gap: 16px;
        }

        .profil-banner-button {
            width: 100%;
            text-align: center;
        }

        .profil-visi-text {
            font-size: 18px;
        }
    }


        /* BERITA */
        .news-card {
            background: white;
            border-radius: 18px;
            overflow: hidden;
            height: 100%;
            border: 1px solid #edf0f2;
        }

        .news-image {
            height: 210px;
        }

        .news-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .news-content {
            padding: 22px;
        }

        .news-date {
            color: #ff9f1c;
            font-size: 12px;
            font-weight: 700;
        }

        .news-content h4 {
            font-weight: 800;
            margin: 8px 0;
        }

        .news-content p {
            color: #7b8790;
            line-height: 1.7;
        }

        /* GALERI */
        .gallery-item {
            height: 250px;
            border-radius: 16px;
            overflow: hidden;
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: .4s;
        }

        .gallery-item:hover img {
            transform: scale(1.07);
        }

        /* FOOTER */
        footer {
            background: #0b1116;
            color: #9aa5ae;
            padding: 50px 0 20px;
        }

        footer h5 {
            color: white;
            font-weight: 700;
        }

        footer a {
            color: #9aa5ae;
            text-decoration: none;
        }

        footer a:hover {
            color: #ff9f1c;
        }

        .copyright {
            border-top: 1px solid #222c33;
            padding-top: 20px;
            margin-top: 30px;
            text-align: center;
            font-size: 13px;
        }

        @media (max-width: 768px) {
            .section {
                padding: 65px 0;
            }

            .section-title {
                font-size: 30px;
            }
        }
    </style>
</head>

<body>


    <nav class="navbar navbar-expand-lg navbar-custom sticky-top">

        <div class="container">

            <a class="navbar-brand" href="#beranda">

                <img
                    src="{{ asset('assets/images/logo.png') }}"
                    alt="Logo">

                <span>
                    SMA SIRAHCAI
                </span>

            </a>


            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarMenu">

                <span class="navbar-toggler-icon"></span>

            </button>


            <div
                class="collapse navbar-collapse"
                id="navbarMenu">

                <ul class="navbar-nav ms-auto align-items-lg-center">

                    <li class="nav-item">
                        <a class="nav-link" href="#beranda">
                            Beranda
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#profil">
                            Profil
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#guru">
                            Guru
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#ekstrakurikuler">
                            Ekstrakurikuler
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#berita">
                            Berita
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#galeri">
                            Galeri
                        </a>
                    </li>

                </ul>

            </div>

        </div>

    </nav>

    @include('menu.hero')

    @include('menu.profile')

    @include('menu.guru')

    @include('menu.ekstrakurikuler')

    @include('menu.berita')

    @include('menu.galeri')

    <footer>
        <div class="container">

            <div class="row g-4">

                <div class="col-lg-5">
                    <h4 class="text-white fw-bold">
                        SMA SIRAHCAI
                    </h4>

                    <p>
                        Membangun generasi yang kompeten,
                        kreatif, dan berkarakter.
                    </p>
                </div>

                <div class="col-lg-3">
                    <h5>Menu</h5>

                    <p><a href="#beranda">Beranda</a></p>
                    <p><a href="#guru">Guru</a></p>
                    <p><a href="#program">Program</a></p>
                </div>

                <div class="col-lg-4">
                    <h5>Kontak</h5>

                    <p>
                        <i class="bi bi-geo-alt me-2"></i>
                        SMA SIRAHCAI, Jl. Raya Cintawa No. 123,
                        Kecamatan Cintawa, Kabupaten Cintawa,
                    </p>

                    <p>
                        <i class="bi bi-telephone me-2"></i>
                        0845-3445-8990
                    </p>
                </div>

            </div>

            <div class="copyright">
                © {{ date('Y') }} SMA SIRAHCAI. All rights reserved.
            </div>

        </div>
    </footer>

    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>

</html>