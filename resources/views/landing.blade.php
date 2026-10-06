
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SMK YPC CINTAWA</title>

    <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}">

    <link rel="stylesheet" href="{{ asset('assets/libs/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/libs/bootstrap-icons/bootstrap-icons.css') }}">

    <style>
        body {
            font-family: Arial, sans-serif;
            color: #222;
        }

        .navbar {
            padding: 15px 0;
        }

        .navbar-brand img {
            width: 45px;
            height: 45px;
            object-fit: contain;
        }

        .hero {
            min-height: 600px;
            background: linear-gradient(rgba(121, 190, 181, 0.85), rgba(31, 113, 102, 0.85)),
                        url('{{ asset("images/sekolah.jpg") }}') center/cover;
            display: flex;
            align-items: center;
            color: white;
        }

        .hero h1 {
            font-size: 48px;
            font-weight: 700;
        }

        .hero p {
            font-size: 18px;
            max-width: 600px;
        }

        .btn-gold {
            background: #c89b3c;
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 8px;
        }

        .btn-gold:hover {
            background: #b38728;
            color: white;
        }

        .section {
            padding: 80px 0;
        }

        .section-title {
            font-weight: 700;
            color: #0d3b35;
            margin-bottom: 10px;
        }

        .section-subtitle {
            color: #777;
            margin-bottom: 45px;
        }

        .info-card {
            border: none;
            border-radius: 15px;
            padding: 30px;
            height: 100%;
            box-shadow: 0 5px 20px rgba(0,0,0,.08);
            transition: .3s;
        }

        .info-card:hover {
            transform: translateY(-5px);
        }

        .icon-box {
            width: 60px;
            height: 60px;
            background: #e8f1ef;
            color: #0d3b35;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
            margin-bottom: 20px;
        }

        .news-card {
            border: none;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0,0,0,.08);
            height: 100%;
        }

        .news-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .gallery img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            border-radius: 12px;
        }

        footer {
            background: #0d3b35;
            color: white;
            padding: 50px 0 20px;
        }

        footer a {
            color: #ddd;
            text-decoration: none;
        }

        @media(max-width: 768px) {
            .hero h1 {
                font-size: 36px;
            }
        }
    </style>
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg bg-white shadow-sm sticky-top">
    <div class="container">

        <a class="navbar-brand d-flex align-items-center gap-2" href="/">
            <img src="{{ asset('assets/images/logo.png') }}" alt="Logo">
            <div>
                <strong class="d-block">SMK YPC CINTAWA</strong>
                <small class="text-muted">Website Sekolah</small>
            </div>
        </a>

        <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarMenu">
            <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-3">

                <li class="nav-item">
                    <a class="nav-link" href="#beranda">Beranda</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#profil">Profil</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#guru">Guru</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#jurusan">Jurusan</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#ektrakurikuler">Ektrakurikuler</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#berita">Berita</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#galeri">Galeri</a>
                </li>

                <li class="nav-item">
                    <a href="/admin/login" class="btn btn-gold">
                        Login Admin
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>


<!-- HERO -->
<section class="hero" id="beranda">
    <div class="container">

        <div class="row">
            <div class="col-lg-8">

                <span class="badge bg-light text-dark px-3 py-2 mb-3">
                    Selamat Datang
                </span>

                <h1>
                    SMK YPC CINTAWA
                </h1>

                <p class="mt-3">
                    Membangun generasi muda yang berkarakter,
                    kompeten, kreatif, dan siap menghadapi dunia kerja
                    serta perkembangan teknologi.
                </p>

                <div class="mt-4">
                    <a href="#profil" class="btn btn-gold me-2">
                        Tentang Sekolah
                    </a>

                    <a href="#berita" class="btn btn-outline-light">
                        Lihat Berita
                    </a>
                </div>

            </div>
        </div>

    </div>
</section>


<!-- PROFIL -->
<section class="section" id="profil">
    <div class="container">

        <div class="text-center">
            <h2 class="section-title">Profil Sekolah</h2>
            <p class="section-subtitle">
                Mengenal lebih dekat SMK YPC CINTAWA
            </p>
        </div>

        <div class="row align-items-center">

            <div class="col-lg-6 mb-4">
                <img src="{{ asset('assets/images/sirahcai.png') }}"
                     class="img-fluid rounded-4 shadow"
                     alt="Sekolah">
            </div>

            <div class="col-lg-6">

                <h3 class="fw-bold mb-3">
                    SMK YPC CINTAWA
                </h3>

                <p class="text-muted">
                    SMK YPC CINTAWA merupakan sekolah yang berkomitmen
                    memberikan pendidikan berkualitas dengan mengembangkan
                    potensi akademik maupun non-akademik peserta didik.
                </p>

                <p class="text-muted">
                    Melalui pembelajaran yang relevan dengan kebutuhan dunia
                    kerja, siswa dibekali keterampilan, karakter, kreativitas,
                    dan kemampuan untuk terus berkembang.
                </p>

                <a href="#jurusan" class="btn btn-gold">
                    Lihat Jurusan
                </a>

            </div>

        </div>
    </div>
</section>


<!-- JURUSAN -->
<section class="section bg-light" id="jurusan">
    <div class="container">

        <div class="text-center">
            <h2 class="section-title">Program Keahlian</h2>
            <p class="section-subtitle">
                Pilihan program keahlian di SMK YPC CINTAWA
            </p>
        </div>

        <div class="row g-4">

            <div class="col-md-4">
                <div class="info-card bg-white">
                    <div class="icon-box">
                        <i class="bi bi-pc-display"></i>
                    </div>

                    <h5 class="fw-bold">Rekayasa Perangkat Lunak</h5>

                    <p class="text-muted">
                        Mempelajari pemrograman, pembuatan aplikasi,
                        website, database, dan teknologi perangkat lunak.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="info-card bg-white">
                    <div class="icon-box">
                        <i class="bi bi-gear-wide-connected"></i>
                    </div>

                    <h5 class="fw-bold">Teknik Mesin</h5>

                    <p class="text-muted">
                        Membekali siswa dengan keterampilan teknik,
                        permesinan, dan kompetensi yang dibutuhkan dunia industri.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="info-card bg-white">
                    <div class="icon-box">
                        <i class="bi bi-lightning-charge"></i>
                    </div>

                    <h5 class="fw-bold">Teknik Ketenagalistrikan</h5>

                    <p class="text-muted">
                        Mempelajari instalasi listrik, perawatan,
                        serta dasar-dasar sistem kelistrikan.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- BERITA -->
<section class="section" id="berita">
    <div class="container">

        <div class="text-center">
            <h2 class="section-title">Berita Terbaru</h2>
            <p class="section-subtitle">
                Informasi dan kegiatan terbaru sekolah
            </p>
        </div>

        <div class="row g-4">

            <div class="col-md-4">
                <div class="news-card bg-white">

                    <img src="{{ asset('images/sekolah.jpg') }}"
                         alt="Berita">

                    <div class="p-4">

                        <small class="text-muted">
                            06 Oktober 2026
                        </small>

                        <h5 class="fw-bold mt-2">
                            Kegiatan Sekolah
                        </h5>

                        <p class="text-muted">
                            Informasi mengenai kegiatan terbaru
                            SMK YPC CINTAWA.
                        </p>

                        <a href="#" class="text-decoration-none">
                            Selengkapnya →
                        </a>

                    </div>
                </div>
            </div>


            <div class="col-md-4">
                <div class="news-card bg-white">

                    <img src="{{ asset('images/sekolah.jpg') }}"
                         alt="Berita">

                    <div class="p-4">

                        <small class="text-muted">
                            05 Oktober 2026
                        </small>

                        <h5 class="fw-bold mt-2">
                            Prestasi Siswa
                        </h5>

                        <p class="text-muted">
                            Berbagai prestasi yang berhasil diraih
                            oleh siswa SMK YPC CINTAWA.
                        </p>

                        <a href="#" class="text-decoration-none">
                            Selengkapnya →
                        </a>

                    </div>
                </div>
            </div>


            <div class="col-md-4">
                <div class="news-card bg-white">

                    <img src="{{ asset('images/sekolah.jpg') }}"
                         alt="Berita">

                    <div class="p-4">

                        <small class="text-muted">
                            04 Oktober 2026
                        </small>

                        <h5 class="fw-bold mt-2">
                            Informasi Sekolah
                        </h5>

                        <p class="text-muted">
                            Informasi dan pengumuman terbaru
                            untuk siswa dan masyarakat.
                        </p>

                        <a href="#" class="text-decoration-none">
                            Selengkapnya →
                        </a>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- EKSTRAKURIKULER -->
<section class="section bg-light">
    <div class="container">

        <div class="text-center">
            <h2 class="section-title">Ekstrakurikuler</h2>
            <p class="section-subtitle">
                Mengembangkan bakat dan minat siswa
            </p>
        </div>

        <div class="row g-4">

            <div class="col-md-3">
                <div class="info-card bg-white text-center">
                    <div class="icon-box mx-auto">
                        <i class="bi bi-flag"></i>
                    </div>
                    <h6 class="fw-bold">Pramuka</h6>
                </div>
            </div>

            <div class="col-md-3">
                <div class="info-card bg-white text-center">
                    <div class="icon-box mx-auto">
                        <i class="bi bi-dribbble"></i>
                    </div>
                    <h6 class="fw-bold">Olahraga</h6>
                </div>
            </div>

            <div class="col-md-3">
                <div class="info-card bg-white text-center">
                    <div class="icon-box mx-auto">
                        <i class="bi bi-music-note-beamed"></i>
                    </div>
                    <h6 class="fw-bold">Seni Musik</h6>
                </div>
            </div>

            <div class="col-md-3">
                <div class="info-card bg-white text-center">
                    <div class="icon-box mx-auto">
                        <i class="bi bi-laptop"></i>
                    </div>
                    <h6 class="fw-bold">Teknologi</h6>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- GALERI -->
<section class="section" id="galeri">
    <div class="container">

        <div class="text-center">
            <h2 class="section-title">Galeri Sekolah</h2>
            <p class="section-subtitle">
                Dokumentasi kegiatan SMK YPC CINTAWA
            </p>
        </div>

        <div class="row g-3 gallery">

            <div class="col-md-4">
                <img src="{{ asset('images/sekolah.jpg') }}"
                     alt="Galeri">
            </div>

            <div class="col-md-4">
                <img src="{{ asset('images/sekolah.jpg') }}"
                     alt="Galeri">
            </div>

            <div class="col-md-4">
                <img src="{{ asset('images/sekolah.jpg') }}"
                     alt="Galeri">
            </div>

        </div>

    </div>
</section>


<!-- FOOTER -->
<footer>
    <div class="container">

        <div class="row g-4">

            <div class="col-md-6">

                <div class="d-flex align-items-center gap-2 mb-3">
                    <img src="{{ asset('images/logo.png') }}"
                         width="50"
                         alt="Logo">

                    <h5 class="mb-0">
                        SMK YPC CINTAWA
                    </h5>
                </div>

                <p class="text-white-50">
                    Membangun generasi yang kompeten,
                    berkarakter, dan siap menghadapi masa depan.
                </p>

            </div>

            <div class="col-md-3">

                <h6 class="fw-bold mb-3">
                    Navigasi
                </h6>

                <p><a href="#beranda">Beranda</a></p>
                <p><a href="#profil">Profil</a></p>
                <p><a href="#jurusan">Jurusan</a></p>
                <p><a href="#berita">Berita</a></p>

            </div>

            <div class="col-md-3">

                <h6 class="fw-bold mb-3">
                    Kontak
                </h6>

                <p class="text-white-50">
                    <i class="bi bi-geo-alt me-2"></i>
                    SMK YPC CINTAWA
                </p>

                <p class="text-white-50">
                    <i class="bi bi-telephone me-2"></i>
                    Informasi Sekolah
                </p>

            </div>

        </div>

        <hr class="border-secondary">

        <div class="text-center text-white-50">
            © {{ date('Y') }} SMK YPC CINTAWA. All Rights Reserved.
        </div>

    </div>
</footer>


<script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>
