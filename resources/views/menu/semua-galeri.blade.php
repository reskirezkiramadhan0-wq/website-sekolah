
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Galeri Sekolah - SMK YPC CINTAWA</title>

    <link rel="stylesheet" href="{{ asset('assets/libs/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        :root {
            --primary: #087f8c;
            --dark: #075b65;
            --bg: #f5f9fa;
        }

        body {
            font-family: Arial, sans-serif;
            background: var(--bg);
            color: #183b40;
        }

        .navbar {
            background: white;
            padding: 15px 0;
            box-shadow: 0 3px 15px rgba(0, 0, 0, .06);
        }

        .navbar-brand {
            color: var(--dark) !important;
            font-weight: 800;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .navbar-brand img {
            width: 45px;
            height: 45px;
            object-fit: contain;
        }

        .nav-link {
            font-weight: 600;
            color: #344b50;
        }

        .nav-link:hover {
            color: var(--primary);
        }

        .page-hero {
            background: linear-gradient(135deg, #075b65, #0b9aa5);
            color: white;
            padding: 80px 0;
        }

        .page-hero h1 {
            font-size: clamp(32px, 5vw, 48px);
            font-weight: 800;
        }

        .page-hero p {
            max-width: 650px;
            margin: 15px auto 0;
            line-height: 1.8;
            color: #e3f6f7;
        }

        .breadcrumb-custom {
            margin-bottom: 20px;
            font-size: 14px;
        }

        .breadcrumb-custom a {
            color: #d6f8fa;
            text-decoration: none;
        }

        .gallery-section {
            padding: 65px 0 80px;
        }

        .section-label {
            display: inline-block;
            background: #dff5f5;
            color: var(--dark);
            padding: 8px 16px;
            border-radius: 30px;
            font-size: 13px;
            font-weight: 700;
            margin-bottom: 15px;
        }

        .section-title {
            font-size: clamp(27px, 4vw, 36px);
            font-weight: 800;
        }

        .section-description {
            color: #73868a;
            line-height: 1.8;
        }

        .gallery-card {
            height: 100%;
            background: white;
            border-radius: 16px;
            overflow: hidden;
            border: 1px solid #edf1f2;
            box-shadow: 0 5px 20px rgba(20, 60, 65, .05);
            transition: .25s;
        }

        .gallery-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 30px rgba(20, 60, 65, .12);
        }

        .gallery-image-wrapper {
            position: relative;
            overflow: hidden;
            background: #e7f3f4;
        }

        .gallery-image {
            width: 100%;
            height: 240px;
            object-fit: cover;
            display: block;
            transition: transform .35s;
        }

        .gallery-card:hover .gallery-image {
            transform: scale(1.05);
        }

        .gallery-placeholder {
            width: 100%;
            height: 240px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: var(--primary);
        }

        .gallery-placeholder i {
            font-size: 60px;
        }

        .gallery-body {
            padding: 22px;
        }

        .gallery-category {
            display: inline-block;
            background: #e4f6f6;
            color: var(--dark);
            padding: 6px 12px;
            border-radius: 30px;
            font-size: 12px;
            font-weight: 700;
            margin-bottom: 12px;
        }

        .gallery-title {
            font-size: 19px;
            font-weight: 800;
            margin-bottom: 10px;
            overflow-wrap: anywhere;
        }

        .gallery-description {
            color: #718186;
            font-size: 14px;
            line-height: 1.8;
            margin-bottom: 0;
            overflow-wrap: anywhere;
        }

        .btn-detail {
            color: var(--primary);
            border-color: var(--primary);
            font-weight: 600;
            transition: .2s;
        }

        .btn-detail:hover {
            color: white;
            background: var(--primary);
            border-color: var(--primary);
        }

        .empty-state {
            background: white;
            padding: 55px 20px;
            border-radius: 16px;
            text-align: center;
        }

        .empty-state i {
            font-size: 55px;
            color: #a6cacc;
        }

        .detail-image {
            width: 100%;
            max-height: 400px;
            object-fit: contain;
            background: #f1f5f6;
        }

        .detail-label {
            color: #718186;
            font-size: 13px;
            margin-bottom: 4px;
        }

        .detail-value {
            color: #183b40;
            overflow-wrap: anywhere;
        }

        .footer {
            background: #073e45;
            color: white;
            padding: 28px 0;
        }

        .footer p {
            margin: 0;
            color: rgba(255, 255, 255, .8);
            font-size: 14px;
        }

        @media (max-width: 768px) {
            .page-hero {
                padding: 60px 0;
            }

            .gallery-section {
                padding: 45px 0 60px;
            }

            .gallery-image,
            .gallery-placeholder {
                height: 220px;
            }
        }
    </style>
</head>

<body>

{{-- NAVBAR --}}
<nav class="navbar navbar-expand-lg">
    <div class="container">

        <a class="navbar-brand" href="{{ url('/') }}">
            <img
                src="{{ asset('images/logo.png') }}"
                alt="Logo Sekolah"
                onerror="this.style.display='none'"
            >

            <span>
                SMA SIRAHCAI
            </span>
        </a>

        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarMenu"
            aria-controls="navbarMenu"
            aria-expanded="false"
            aria-label="Buka navigasi">
            <span class="navbar-toggler-icon"></span>
        </button>

    </div>
</nav>


{{-- HERO --}}
<section class="page-hero">
    <div class="container text-center">

        <h1>Galeri Sekolah</h1>

        <p>
            Lihat berbagai dokumentasi kegiatan, aktivitas siswa,
            prestasi, dan momen berharga di SMA SIRAHCAI.
        </p>

    </div>
</section>


{{-- DAFTAR GALERI --}}
<section class="gallery-section">
    <div class="container">

        <div class="text-center mb-5">
            <div class="section-label">
                <i class="bi bi-images me-1"></i>
                Dokumentasi Sekolah
            </div>

            <h2 class="section-title">Semua Galeri</h2>

            <p class="section-description mt-3">
                Kumpulan foto kegiatan dan kenangan dari lingkungan sekolah.
            </p>
        </div>

        <div class="row g-4">

            @forelse ($galeris as $galeri)

                <div class="col-xl-4 col-md-6 col-12">

                    <article class="gallery-card">

                        {{-- FOTO --}}
                        <div class="gallery-image-wrapper">

                            @if ($galeri->file)
                                <img
                                    src="{{ asset('storage/' . $galeri->file) }}"
                                    alt="{{ $galeri->judul }}"
                                    class="gallery-image"
                                    loading="lazy"
                                >
                            @else
                                <div class="gallery-placeholder">
                                    <i class="bi bi-image"></i>
                                </div>
                            @endif

                        </div>

                        {{-- INFORMASI GALERI --}}
                        <div class="gallery-body">

                            <div class="gallery-category">
                                <i class="bi bi-tag me-1"></i>
                                {{ $galeri->kategori ?: 'Dokumentasi Sekolah' }}
                            </div>

                            <h3 class="gallery-title">
                                {{ $galeri->judul }}
                            </h3>

                            <p class="gallery-description">
                                {{ \Illuminate\Support\Str::limit(strip_tags($galeri->keterangan ?? ''), 100) ?: 'Dokumentasi kegiatan SMK YPC CINTAWA.' }}
                            </p>

                            {{-- TOMBOL LIHAT DETAIL --}}
                            <button
                                type="button"
                                class="btn btn-detail btn-sm rounded-pill px-3 mt-3"
                                data-bs-toggle="modal"
                                data-bs-target="#detailModal{{ $galeri->id }}">
                                <i class="bi bi-eye me-1"></i>
                                Lihat Detail
                            </button>

                        </div>

                    </article>

                </div>

                {{-- MODAL DETAIL SETIAP GALERI --}}
                <div
                    class="modal fade"
                    id="detailModal{{ $galeri->id }}"
                    tabindex="-1"
                    aria-labelledby="detailModalLabel{{ $galeri->id }}"
                    aria-hidden="true">

                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content border-0 rounded-4 overflow-hidden">

                            @if ($galeri->file)
                                <img
                                    src="{{ asset('storage/' . $galeri->file) }}"
                                    class="detail-image"
                                    alt="{{ $galeri->judul }}">
                            @endif

                            <div class="modal-header">
                                <h5
                                    class="modal-title fw-bold"
                                    id="detailModalLabel{{ $galeri->id }}">
                                    <i class="bi bi-images me-2 text-primary"></i>
                                    {{ $galeri->judul }}
                                </h5>

                                <button
                                    type="button"
                                    class="btn-close"
                                    data-bs-dismiss="modal"
                                    aria-label="Tutup">
                                </button>
                            </div>

                            <div class="modal-body p-4">

                                <div class="row g-3">

                                    <div class="col-md-6">
                                        <p class="detail-label">
                                            <i class="bi bi-tag me-1"></i>
                                            Kategori
                                        </p>
                                        <p class="detail-value fw-semibold">
                                            {{ $galeri->kategori ?: 'Dokumentasi Sekolah' }}
                                        </p>
                                    </div>

                                    <div class="col-md-6">
                                        <p class="detail-label">
                                            <i class="bi bi-calendar-event me-1"></i>
                                            Tanggal
                                        </p>
                                        <p class="detail-value fw-semibold">
                                            {{ $galeri->tanggal ?: 'Tidak dicantumkan' }}
                                        </p>
                                    </div>

                                    <div class="col-12">
                                        <hr>
                                        <p class="detail-label">
                                            <i class="bi bi-card-text me-1"></i>
                                            Keterangan
                                        </p>
                                        <p class="detail-value mb-0" style="line-height: 1.8;">
                                            {{ $galeri->keterangan ?: 'Belum ada keterangan untuk foto ini.' }}
                                        </p>
                                    </div>

                                </div>

                            </div>

                            <div class="modal-footer">
                                <button
                                    type="button"
                                    class="btn btn-secondary rounded-pill px-4"
                                    data-bs-dismiss="modal">
                                    Tutup
                                </button>
                            </div>

                        </div>
                    </div>
                </div>

            @empty

                <div class="col-12">
                    <div class="empty-state">
                        <i class="bi bi-images"></i>

                        <h4 class="fw-bold mt-3">
                            Belum Ada Foto Galeri
                        </h4>

                        <p class="text-secondary mb-0">
                            Foto kegiatan sekolah akan ditampilkan di sini.
                        </p>
                    </div>
                </div>

            @endforelse

        </div>

        {{-- TOMBOL KEMBALI --}}
        <div class="text-center mt-5">
            <a
                href="{{ url('/') }}"
                class="btn btn-outline-secondary rounded-pill px-4 py-2">
                <i class="bi bi-arrow-left me-2"></i>
                Kembali ke Beranda
            </a>
        </div>

    </div>
</section>


{{-- FOOTER --}}
<footer class="footer">
    <div class="container text-center">
        <p>
            &copy; {{ date('Y') }} SMA SIRAHCAI.
            Semua Hak Dilindungi.
        </p>
    </div>
</footer>


<script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>