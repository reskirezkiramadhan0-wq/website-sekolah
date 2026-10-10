
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Semua Ekstrakurikuler - SMA SIRAHCAI</title>

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
            box-shadow: 0 3px 15px #0000000a;
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
            margin-left: 10px;
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

        .extra-section {
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

        .extra-card {
            height: 100%;
            background: white;
            border-radius: 16px;
            overflow: hidden;
            border: 1px solid #edf1f2;
            box-shadow: 0 5px 20px #143c410d;
            transition: .25s;
        }

        .extra-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 30px #143c411f;
        }

        .extra-image {
            width: 100%;
            height: 230px;
            object-fit: cover;
            display: block;
        }

        .extra-placeholder {
            width: 100%;
            height: 230px;
            background: #e7f3f4;
            color: var(--primary);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .extra-placeholder i {
            font-size: 60px;
        }

        .extra-body {
            padding: 24px;
        }

        .extra-category {
            display: inline-block;
            background: #e4f6f6;
            color: var(--dark);
            padding: 7px 12px;
            border-radius: 30px;
            font-size: 12px;
            font-weight: 700;
            margin-bottom: 13px;
        }

        .extra-title {
            font-size: 20px;
            font-weight: 800;
            margin-bottom: 15px;
        }

        .extra-info {
            color: #718186;
            font-size: 14px;
            line-height: 1.8;
            margin-bottom: 10px;
        }

        .extra-info i {
            color: var(--primary);
            margin-right: 7px;
        }

        /* TOMBOL LIHAT DETAIL */
        .btn-detail {
            display: inline-block;
            padding: 9px 18px;
            border: 1px solid var(--primary);
            border-radius: 30px;
            background: white;
            color: var(--primary);
            font-size: 14px;
            font-weight: 700;
            transition: .2s;
        }

        .btn-detail:hover {
            background: var(--primary);
            color: white;
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

        .footer {
            background: #073e45;
            color: white;
            padding: 28px 0;
        }

        .footer p {
            margin: 0;
            color: #ffffffcc;
            font-size: 14px;
        }

        .modal-header {
            background: var(--dark);
        }

        .modal-detail-image {
            width: 100%;
            height: 280px;
            object-fit: cover;
            border-radius: 12px;
        }

        @media(max-width: 768px) {
            .page-hero {
                padding: 60px 0;
            }

            .extra-section {
                padding: 45px 0 60px;
            }
        }
    </style>
</head>

<body>

{{-- NAVBAR --}}
<nav class="navbar navbar-expand-lg sticky-top">
    <div class="container">

        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('images/logo.png') }}"
                 alt="Logo Sekolah"
                 onerror="this.style.display='none'">

            <span>
                SMA SIRAHCAI
            </span>
        </a>

        <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse" data-bs-target="#navbarMenu"
                aria-controls="navbarMenu" aria-expanded="false"
                aria-label="Buka navigasi">
            <span class="navbar-toggler-icon"></span>
        </button>

    </div>
</nav>

{{-- HERO --}}
<section class="page-hero">
    <div class="container text-center">

        <h1>Ekstrakurikuler Sekolah</h1>

        <p>
            Kembangkan bakat, minat, kreativitas, dan kemampuan bekerja
            sama melalui berbagai kegiatan ekstrakurikuler di sekolah.
        </p>

    </div>
</section>

{{-- DAFTAR EKSTRAKURIKULER --}}
<section class="extra-section">
    <div class="container">

        <div class="text-center mb-5">
            <div class="section-label">
                <i class="bi bi-stars me-1"></i>
                Kegiatan Siswa
            </div>

            <h2 class="section-title">Semua Ekstrakurikuler</h2>

            <p class="section-description mt-3">
                Temukan kegiatan yang sesuai dengan minat dan bakatmu.
            </p>
        </div>

        <div class="row g-4">

            @forelse ($ekstrakurikulers as $ekstra)

                <div class="col-xl-4 col-md-6 col-12">

                    <article class="extra-card">

                        {{-- FOTO EKSTRAKURIKULER --}}
                        @if ($ekstra->gambar)
                            <img
                                src="{{ asset('storage/' . $ekstra->gambar) }}"
                                alt="{{ $ekstra->nama_eskul }}"
                                class="extra-image"
                                loading="lazy"
                            >
                        @else
                            <div class="extra-placeholder">
                                <i class="bi bi-stars"></i>
                            </div>
                        @endif

                        <div class="extra-body">

                            <div class="extra-category">
                                <i class="bi bi-award me-1"></i>
                                Kegiatan Ekstrakurikuler
                            </div>

                            <h3 class="extra-title">
                                {{ $ekstra->nama_eskul }}
                            </h3>

                            <p class="extra-info">
                                <i class="bi bi-person-badge"></i>
                                <strong>Pembina:</strong>
                                {{ $ekstra->pembina ?: 'Belum ditentukan' }}
                            </p>

                            <p class="extra-info">
                                <i class="bi bi-calendar-week"></i>
                                <strong>Jadwal:</strong>
                                {{ $ekstra->jadwal_latihan ?: 'Belum ditentukan' }}
                            </p>

                            {{-- DESKRIPSI SINGKAT --}}
                            @if ($ekstra->deskripsi)
                                <p class="extra-info mt-3 mb-3">
                                    {{ \Illuminate\Support\Str::limit(
                                        strip_tags($ekstra->deskripsi),
                                        150
                                    ) }}
                                </p>
                            @endif

                            {{-- TOMBOL LIHAT DETAIL --}}
                            <button type="button"
                                    class="btn-detail"
                                    data-bs-toggle="modal"
                                    data-bs-target="#detailEkstra{{ $ekstra->id }}">
                                <i class="bi bi-eye me-1"></i>
                                Lihat Detail
                            </button>

                        </div>

                    </article>

                </div>

                {{-- MODAL DETAIL EKSTRAKURIKULER --}}
                <div class="modal fade"
                     id="detailEkstra{{ $ekstra->id }}"
                     tabindex="-1"
                     aria-labelledby="judulEkstra{{ $ekstra->id }}"
                     aria-hidden="true">

                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content border-0 rounded-4 overflow-hidden">

                            <div class="modal-header text-white">

                                <h5 class="modal-title fw-bold"
                                    id="judulEkstra{{ $ekstra->id }}">
                                    <i class="bi bi-stars me-2"></i>
                                    Detail Ekstrakurikuler
                                </h5>

                                <button type="button"
                                        class="btn-close btn-close-white"
                                        data-bs-dismiss="modal"
                                        aria-label="Tutup"></button>
                            </div>

                            <div class="modal-body p-4">

                                {{-- FOTO DETAIL --}}
                                @if ($ekstra->gambar)
                                    <img
                                        src="{{ asset('storage/' . $ekstra->gambar) }}"
                                        alt="{{ $ekstra->nama_eskul }}"
                                        class="modal-detail-image mb-4"
                                    >
                                @else
                                    <div class="extra-placeholder rounded-3 mb-4">
                                        <i class="bi bi-stars"></i>
                                    </div>
                                @endif

                                {{-- NAMA EKSTRAKURIKULER --}}
                                <h4 class="fw-bold mb-3">
                                    {{ $ekstra->nama_eskul }}
                                </h4>

                                {{-- PEMBINA --}}
                                <p class="extra-info">
                                    <i class="bi bi-person-badge"></i>
                                    <strong>Pembina:</strong>
                                    {{ $ekstra->pembina ?: 'Belum ditentukan' }}
                                </p>

                                {{-- JADWAL --}}
                                <p class="extra-info">
                                    <i class="bi bi-calendar-week"></i>
                                    <strong>Jadwal:</strong>
                                    {{ $ekstra->jadwal_latihan ?: 'Belum ditentukan' }}
                                </p>

                                <hr>

                                {{-- DESKRIPSI LENGKAP --}}
                                <h6 class="fw-bold mb-2">
                                    <i class="bi bi-card-text me-2"
                                       style="color: var(--primary);"></i>
                                    Deskripsi Kegiatan
                                </h6>

                                <p class="text-secondary mb-0"
                                   style="white-space: pre-line; line-height: 1.8;">
                                    {{ $ekstra->deskripsi ?: 'Belum ada deskripsi kegiatan.' }}
                                </p>

                            </div>

                            <div class="modal-footer">
                                <button type="button"
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
                        <i class="bi bi-stars"></i>

                        <h4 class="fw-bold mt-3">
                            Belum Ada Ekstrakurikuler
                        </h4>

                        <p class="text-secondary mb-0">
                            Data kegiatan ekstrakurikuler akan ditampilkan di sini.
                        </p>
                    </div>
                </div>

            @endforelse

        </div>

        <div class="text-center mt-5">
            <a href="{{ url('/') }}"
               class="btn btn-outline-secondary rounded-pill px-4 py-2">
                <i class="bi bi-arrow-left me-2"></i>
                Kembali ke Beranda
            </a>
        </div>

    </div>
</section>

<footer class="footer">
    <div class="container text-center">
        <p>&copy; {{ date('Y') }} SMA SIRAHCAI. Semua Hak Dilindungi.</p>
    </div>
</footer>

<script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>
