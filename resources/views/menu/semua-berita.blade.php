
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Semua Berita - SMK YPC CINTAWA</title>

    <link rel="stylesheet" href="{{ asset('assets/libs/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        :root {
            --primary: #087f8c;
            --dark: #075b65;
            --bg: #f5f9fa;
            --text: #183b40;
        }

        body {
            font-family: Arial, sans-serif;
            background: var(--bg);
            color: var(--text);
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

        .news-section {
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

        .news-card {
            height: 100%;
            background: white;
            border-radius: 16px;
            overflow: hidden;
            border: 1px solid #edf1f2;
            box-shadow: 0 5px 20px #143c410d;
            transition: .25s;
        }

        .news-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 30px #143c411f;
        }

        .news-image {
            width: 100%;
            height: 230px;
            object-fit: cover;
            display: block;
        }

        .news-placeholder {
            width: 100%;
            height: 230px;
            background: #e7f3f4;
            color: var(--primary);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .news-placeholder i {
            font-size: 55px;
        }

        .news-body {
            padding: 24px;
        }

        .news-date {
            color: #7b8c90;
            font-size: 13px;
            margin-bottom: 14px;
        }

        .news-title {
            font-size: 19px;
            font-weight: 800;
            line-height: 1.5;
            margin-bottom: 12px;
            overflow-wrap: anywhere;
        }

        .news-description {
            font-size: 14px;
            line-height: 1.8;
            color: #718186;
            margin-bottom: 18px;
            overflow-wrap: anywhere;
        }

        .btn-detail {
            color: var(--primary);
            border-color: var(--primary);
            font-weight: 600;
        }

        .btn-detail:hover {
            background: var(--primary);
            color: white;
        }

        .detail-image {
            width: 100%;
            max-height: 400px;
            object-fit: contain;
            background: #f1f5f6;
        }

        .detail-content {
            white-space: pre-line;
            overflow-wrap: anywhere;
            line-height: 1.9;
            color: #52676b;
        }

        .empty-state {
            background: white;
            padding: 55px 20px;
            border-radius: 16px;
            text-align: center;
            border: 1px solid #edf1f2;
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

        @media (max-width: 768px) {
            .page-hero {
                padding: 60px 0;
            }

            .news-section {
                padding: 45px 0 60px;
            }

            .news-image,
            .news-placeholder {
                height: 210px;
            }
        }
    </style>
</head>

<body>

{{-- NAVBAR --}}
<nav class="navbar navbar-expand-lg sticky-top">
    <div class="container">

        <a class="navbar-brand" href="{{ url('/') }}">
            <img
                src="{{ asset('images/logo.png') }}"
                alt="Logo Sekolah"
                onerror="this.style.display='none'">

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

        <h1>Berita Sekolah</h1>

        <p>
            Temukan informasi, kegiatan, prestasi, dan berita terbaru
            dari SMA SIRAHCAI.
        </p>

    </div>
</section>


{{-- DAFTAR BERITA --}}
<section class="news-section">
    <div class="container">

        <div class="text-center mb-5">
            <div class="section-label">
                <i class="bi bi-newspaper me-1"></i>
                Informasi Sekolah
            </div>

            <h2 class="section-title">Semua Berita Terbaru</h2>

            <p class="section-description mt-3">
                Ikuti berbagai informasi dan aktivitas terbaru
                dari lingkungan sekolah kami.
            </p>
        </div>

        <div class="row g-4">

            @forelse ($beritas as $berita)

                @php
                    $isiBerita = $berita->isi
                        ?? $berita->konten
                        ?? $berita->deskripsi
                        ?? '';
                @endphp

                <div class="col-xl-4 col-md-6 col-12">

                    <article class="news-card">

                        {{-- FOTO BERITA --}}
                        @if ($berita->gambar)
                            <img
                                src="{{ asset('storage/' . $berita->gambar) }}"
                                alt="{{ $berita->judul }}"
                                class="news-image"
                                loading="lazy">
                        @else
                            <div class="news-placeholder">
                                <i class="bi bi-newspaper"></i>
                            </div>
                        @endif

                        {{-- RINGKASAN BERITA --}}
                        <div class="news-body">

                            <div class="news-date">
                                <i class="bi bi-calendar3 me-1"></i>

                                @if ($berita->tanggal)
                                    {{ \Carbon\Carbon::parse($berita->tanggal)->format('d M Y') }}
                                @else
                                    Tanggal belum tersedia
                                @endif
                            </div>

                            <h3 class="news-title">
                                {{ $berita->judul }}
                            </h3>

                            <p class="news-description">
                                {{ \Illuminate\Support\Str::limit(strip_tags($isiBerita), 130) ?: 'Belum ada isi berita.' }}
                            </p>

                            {{-- TOMBOL LIHAT DETAIL --}}
                            <button
                                type="button"
                                class="btn btn-detail btn-sm rounded-pill px-3"
                                data-bs-toggle="modal"
                                data-bs-target="#beritaModal{{ $berita->id }}">
                                <i class="bi bi-eye me-1"></i>
                                Lihat Detail
                            </button>

                        </div>

                    </article>

                </div>

                {{-- MODAL DETAIL BERITA --}}
                <div
                    class="modal fade"
                    id="beritaModal{{ $berita->id }}"
                    tabindex="-1"
                    aria-labelledby="beritaModalLabel{{ $berita->id }}"
                    aria-hidden="true">

                    <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
                        <div class="modal-content border-0 rounded-4 overflow-hidden">

                            @if ($berita->gambar)
                                <img
                                    src="{{ asset('storage/' . $berita->gambar) }}"
                                    alt="{{ $berita->judul }}"
                                    class="detail-image">
                            @endif

                            <div class="modal-header">
                                <h5
                                    class="modal-title fw-bold"
                                    id="beritaModalLabel{{ $berita->id }}">
                                    <i class="bi bi-newspaper text-primary me-2"></i>
                                    Detail Berita
                                </h5>

                                <button
                                    type="button"
                                    class="btn-close"
                                    data-bs-dismiss="modal"
                                    aria-label="Tutup">
                                </button>
                            </div>

                            <div class="modal-body p-4">

                                <div class="text-secondary small mb-3">
                                    <i class="bi bi-calendar3 me-1"></i>

                                    @if ($berita->tanggal)
                                        {{ \Carbon\Carbon::parse($berita->tanggal)->format('d M Y') }}
                                    @else
                                        Tanggal belum tersedia
                                    @endif
                                </div>

                                <h3 class="fw-bold mb-4">
                                    {{ $berita->judul }}
                                </h3>

                                <div class="detail-content">
                                    {{ trim(strip_tags($isiBerita)) ?: 'Belum ada isi berita.' }}
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

                        <i class="bi bi-newspaper"></i>

                        <h4 class="fw-bold mt-3">
                            Belum Ada Berita
                        </h4>

                        <p class="text-secondary mb-0">
                            Berita sekolah akan ditampilkan di sini setelah tersedia.
                        </p>

                    </div>
                </div>

            @endforelse

        </div>

        {{-- KEMBALI KE BERANDA --}}
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