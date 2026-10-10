
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Semua Guru - SMA SIRAHCAI</title>

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

        .teacher-section {
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

        .teacher-card {
            height: 100%;
            background: white;
            border-radius: 16px;
            overflow: hidden;
            border: 1px solid #edf1f2;
            box-shadow: 0 5px 20px #143c410d;
            transition: .25s;
        }

        .teacher-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 30px #143c411f;
        }

        .teacher-photo {
            width: 100%;
            height: 270px;
            object-fit: cover;
            object-position: center;
            display: block;
        }

        .teacher-placeholder {
            height: 270px;
            background: #e7f3f4;
            color: var(--primary);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .teacher-placeholder i {
            font-size: 65px;
        }

        .teacher-body {
            padding: 24px;
            text-align: center;
        }

        .teacher-name {
            font-size: 19px;
            font-weight: 800;
            margin-bottom: 12px;
            overflow-wrap: anywhere;
        }

        .teacher-subject {
            display: inline-block;
            background: #e4f6f6;
            color: var(--dark);
            border-radius: 30px;
            padding: 7px 13px;
            font-size: 13px;
            font-weight: 700;
            margin-bottom: 15px;
        }

        .teacher-nip {
            color: #7b8c90;
            font-size: 13px;
            margin-bottom: 15px;
        }

        .btn-detail {
            color: var(--primary);
            border-color: var(--primary);
            font-weight: 600;
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

        .detail-photo {
            width: 100%;
            max-height: 350px;
            object-fit: contain;
            background: #e7f3f4;
        }

        .detail-label {
            color: #718186;
            font-size: 13px;
            margin-bottom: 5px;
        }

        .detail-value {
            color: #183b40;
            font-weight: 600;
            overflow-wrap: anywhere;
        }

        .detail-icon {
            width: 42px;
            height: 42px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            background: #e4f6f6;
            color: var(--primary);
            border-radius: 12px;
            font-size: 19px;
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

        @media(max-width: 768px) {
            .page-hero {
                padding: 60px 0;
            }

            .teacher-section {
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

        <h1>Tenaga Pendidik Kami</h1>

        <p>
            Kenali guru-guru SMA SIRAHCAI yang berdedikasi
            dalam membimbing dan mendidik generasi masa depan.
        </p>

    </div>
</section>


{{-- DAFTAR GURU --}}
<section class="teacher-section">
    <div class="container">

        <div class="text-center mb-5">
            <div class="section-label">
                <i class="bi bi-people me-1"></i>
                Tenaga Pendidik
            </div>

            <h2 class="section-title">Semua Guru</h2>

            <p class="section-description mt-3">
                Informasi guru dan mata pelajaran di sekolah kami.
            </p>
        </div>

        <div class="row g-4">

            @forelse ($gurus as $guru)

                <div class="col-xl-3 col-lg-4 col-md-6 col-12">

                    <article class="teacher-card">

                        {{-- FOTO GURU --}}
                        @if ($guru->foto)
                            <img
                                src="{{ asset('storage/' . $guru->foto) }}"
                                alt="{{ $guru->nama_guru }}"
                                class="teacher-photo"
                                loading="lazy">
                        @else
                            <div class="teacher-placeholder">
                                <i class="bi bi-person-badge"></i>
                            </div>
                        @endif

                        {{-- RINGKASAN BIODATA --}}
                        <div class="teacher-body">

                            <h3 class="teacher-name">
                                {{ $guru->nama_guru }}
                            </h3>

                            <div class="teacher-subject">
                                <i class="bi bi-book me-1"></i>
                                {{ $guru->mata_pelajaran ?: 'Mata pelajaran belum diisi' }}
                            </div>

                            <p class="teacher-nip">
                                <i class="bi bi-person-vcard me-1"></i>
                                NIP: {{ $guru->nip ?: '-' }}
                            </p>

                            {{-- TOMBOL DETAIL --}}
                            <button
                                type="button"
                                class="btn btn-detail btn-sm rounded-pill px-3"
                                data-bs-toggle="modal"
                                data-bs-target="#guruModal{{ $guru->id }}">
                                <i class="bi bi-eye me-1"></i>
                                Lihat Detail
                            </button>

                        </div>

                    </article>

                </div>

                {{-- MODAL BIODATA GURU --}}
                <div
                    class="modal fade"
                    id="guruModal{{ $guru->id }}"
                    tabindex="-1"
                    aria-labelledby="guruModalLabel{{ $guru->id }}"
                    aria-hidden="true">

                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content border-0 rounded-4 overflow-hidden">

                            {{-- FOTO DI MODAL --}}
                            @if ($guru->foto)
                                <img
                                    src="{{ asset('storage/' . $guru->foto) }}"
                                    alt="{{ $guru->nama_guru }}"
                                    class="detail-photo">
                            @else
                                <div class="teacher-placeholder">
                                    <i class="bi bi-person-badge"></i>
                                </div>
                            @endif

                            <div class="modal-header">
                                <h5
                                    class="modal-title fw-bold"
                                    id="guruModalLabel{{ $guru->id }}">
                                    <i class="bi bi-person-vcard text-primary me-2"></i>
                                    Biodata Guru
                                </h5>

                                <button
                                    type="button"
                                    class="btn-close"
                                    data-bs-dismiss="modal"
                                    aria-label="Tutup">
                                </button>
                            </div>

                            <div class="modal-body p-4">

                                <h4 class="fw-bold mb-1">
                                    {{ $guru->nama_guru }}
                                </h4>

                                <p class="text-secondary mb-4">
                                    {{ $guru->mata_pelajaran ?: 'Mata pelajaran belum diisi' }}
                                </p>

                                <div class="row g-4">

                                    {{-- NAMA --}}
                                    <div class="col-md-6">
                                        <div class="d-flex gap-3 align-items-start">
                                            <div class="detail-icon">
                                                <i class="bi bi-person"></i>
                                            </div>
                                            <div>
                                                <p class="detail-label">Nama Lengkap</p>
                                                <p class="detail-value mb-0">
                                                    {{ $guru->nama_guru ?: '-' }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- NIP --}}
                                    <div class="col-md-6">
                                        <div class="d-flex gap-3 align-items-start">
                                            <div class="detail-icon">
                                                <i class="bi bi-card-text"></i>
                                            </div>
                                            <div>
                                                <p class="detail-label">NIP</p>
                                                <p class="detail-value mb-0">
                                                    {{ $guru->nip ?: '-' }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- MATA PELAJARAN --}}
                                    <div class="col-md-6">
                                        <div class="d-flex gap-3 align-items-start">
                                            <div class="detail-icon">
                                                <i class="bi bi-book"></i>
                                            </div>
                                            <div>
                                                <p class="detail-label">Mata Pelajaran</p>
                                                <p class="detail-value mb-0">
                                                    {{ $guru->mata_pelajaran ?: '-' }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- JENIS KELAMIN --}}
                                    <div class="col-md-6">
                                        <div class="d-flex gap-3 align-items-start">
                                            <div class="detail-icon">
                                                <i class="bi bi-gender-ambiguous"></i>
                                            </div>
                                            <div>
                                                <p class="detail-label">Jenis Kelamin</p>
                                                <p class="detail-value mb-0">
                                                    {{ $guru->jenis_kelamin ?: '-' }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <hr class="my-4">

                                <p class="text-secondary small mb-0">
                                    <i class="bi bi-info-circle me-1"></i>
                                    Biodata ditampilkan berdasarkan data guru yang tersimpan di sekolah.
                                </p>

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

                        <i class="bi bi-people"></i>

                        <h4 class="fw-bold mt-3">
                            Belum Ada Data Guru
                        </h4>

                        <p class="text-secondary mb-0">
                            Data guru akan ditampilkan di halaman ini.
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
            &copy; {{ date('Y') }} SMA YPC CINTAWA.
            Semua Hak Dilindungi.
        </p>
    </div>
</footer>


<script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>