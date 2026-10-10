
@extends('template')

@section('content')

<div class="container px-4 py-4">

    {{-- HEADER DASHBOARD --}}
    <div class="mb-4">
        <h2 class="fw-bold mb-1">Dashboard Admin</h2>
        <p class="text-muted mb-0">
            Selamat datang di halaman administrator SMA SIRAHCAI.
        </p>
    </div>

    {{-- BANNER SELAMAT DATANG --}}
    <div class="card border-0 shadow-sm mb-4 overflow-hidden"
         style="border-radius: 16px; background: linear-gradient(120deg, #087f8c, #075985);">

        <div class="card-body p-4 p-md-5 text-white">
            <div class="row align-items-center">

                <div class="col-md-8">
                    <span class="badge bg-light text-primary mb-3 px-3 py-2">
                        PANEL ADMINISTRATOR
                    </span>

                    <h3 class="fw-bold mb-2">
                        Selamat Datang, Admin!
                    </h3>

                    <p class="mb-0" style="opacity: .9;">
                        Kelola informasi, data guru, data siswa, berita,
                        dan kegiatan sekolah melalui panel administrasi.
                    </p>
                </div>

                <div class="col-md-4 text-md-end mt-4 mt-md-0">
                    <i class="bi bi-mortarboard-fill"
                       style="font-size: 90px; opacity: .8;"></i>
                </div>

            </div>
        </div>
    </div>

    {{-- STATISTIK --}}
    <div class="row g-3 mb-4">

        <div class="col-12 col-sm-6 col-xl-3">
            <div class="card border-0 shadow-sm h-100"
                 style="border-radius: 14px;">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div>
                            <p class="text-muted mb-1">Total Guru</p>
                            <h3 class="fw-bold mb-0">
                                {{ $totalGuru ?? 0 }}
                            </h3>
                        </div>
                        <div class="rounded-3 p-3"
                             style="background:#e0f2fe;color:#0284c7;">
                            <i class="bi bi-person-workspace fs-3"></i>
                        </div>
                    </div>

                    <a href="{{ url('/admin/guru') }}"
                       class="text-decoration-none small">
                        Kelola data guru <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-3">
            <div class="card border-0 shadow-sm h-100"
                 style="border-radius: 14px;">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div>
                            <p class="text-muted mb-1">Total Siswa</p>
                            <h3 class="fw-bold mb-0">
                                {{ $totalSiswa ?? 0 }}
                            </h3>
                        </div>
                        <div class="rounded-3 p-3"
                             style="background:#dcfce7;color:#16a34a;">
                            <i class="bi bi-people-fill fs-3"></i>
                        </div>
                    </div>

                    <a href="{{ url('/admin/siswa') }}"
                       class="text-decoration-none small">
                        Kelola data siswa <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-3">
            <div class="card border-0 shadow-sm h-100"
                 style="border-radius: 14px;">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div>
                            <p class="text-muted mb-1">Ekstrakurikuler</p>
                            <h3 class="fw-bold mb-0">
                                {{ $totalEkstrakurikuler ?? 0 }}
                            </h3>
                        </div>
                        <div class="rounded-3 p-3"
                             style="background:#fef3c7;color:#d97706;">
                            <i class="bi bi-trophy-fill fs-3"></i>
                        </div>
                    </div>

                    <a href="{{ url('/admin/ekstrakurikuler') }}"
                       class="text-decoration-none small">
                        Kelola ekstrakurikuler <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-3">
            <div class="card border-0 shadow-sm h-100"
                 style="border-radius: 14px;">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div>
                            <p class="text-muted mb-1">Total Berita</p>
                            <h3 class="fw-bold mb-0">
                                {{ $totalBerita ?? 0 }}
                            </h3>
                        </div>
                        <div class="rounded-3 p-3"
                             style="background:#f3e8ff;color:#9333ea;">
                            <i class="bi bi-newspaper fs-3"></i>
                        </div>
                    </div>

                    <a href="{{ url('/admin/berita') }}"
                       class="text-decoration-none small">
                        Kelola berita <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>

    </div>

    {{-- AKSES CEPAT --}}
    <div class="card border-0 shadow-sm mb-4"
         style="border-radius: 14px;">

        <div class="card-body p-4">

            <h5 class="fw-bold mb-1">Akses Cepat Pengelolaan</h5>
            <p class="text-muted small mb-4">
                Pilih menu untuk mengelola informasi sekolah.
            </p>

            <div class="row g-3">

                <div class="col-6 col-md-3">
                    <a href="{{ url('/admin/guru') }}"
                       class="btn btn-outline-primary w-100 py-3">
                        <i class="bi bi-person-workspace d-block fs-3 mb-2"></i>
                        Data Guru
                    </a>
                </div>

                <div class="col-6 col-md-3">
                    <a href="{{ url('/admin/siswa') }}"
                       class="btn btn-outline-success w-100 py-3">
                        <i class="bi bi-people d-block fs-3 mb-2"></i>
                        Data Siswa
                    </a>
                </div>

                <div class="col-6 col-md-3">
                    <a href="{{ url('/admin/ekstrakurikuler') }}"
                       class="btn btn-outline-warning w-100 py-3">
                        <i class="bi bi-trophy d-block fs-3 mb-2"></i>
                        Ekstrakurikuler
                    </a>
                </div>

                <div class="col-6 col-md-3">
                    <a href="{{ url('/admin/berita') }}"
                       class="btn btn-outline-info w-100 py-3">
                        <i class="bi bi-newspaper d-block fs-3 mb-2"></i>
                        Berita
                    </a>
                </div>

            </div>
        </div>
    </div>

    {{-- BERITA DAN GALERI --}}
    <div class="row g-4">

        {{-- BERITA TERBARU --}}
        <div class="col-12 col-xl-6">
            <div class="card border-0 shadow-sm h-100"
                 style="border-radius: 14px;">

                <div class="card-header bg-white border-0 p-4 pb-2">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="fw-bold mb-1">Berita Terbaru</h5>
                            <p class="text-muted small mb-0">
                                Informasi terbaru sekolah
                            </p>
                        </div>

                        <a href="{{ url('/admin/berita') }}"
                           class="btn btn-sm btn-light">
                            Lihat Semua
                        </a>
                    </div>
                </div>

                <div class="card-body px-4">
                    @forelse(($beritaTerbaru ?? collect()) as $berita)
                        <div class="d-flex gap-3 py-3 border-bottom">

                            @if(!empty($berita->gambar))
                                <img
                                    src="{{ asset('storage/' . $berita->gambar) }}"
                                    alt="Foto berita"
                                    style="width:80px;height:70px;object-fit:cover;border-radius:10px;"
                                >
                            @else
                                <div class="d-flex align-items-center justify-content-center rounded-3"
                                     style="width:80px;height:70px;min-width:80px;background:#e0f2fe;color:#0284c7;">
                                    <i class="bi bi-newspaper fs-3"></i>
                                </div>
                            @endif

                            <div class="flex-grow-1">
                                <h6 class="fw-semibold mb-1">
                                    {{ $berita->judul ?? 'Berita sekolah' }}
                                </h6>

                                <small class="text-muted">
                                    <i class="bi bi-calendar3 me-1"></i>
                                    {{ $berita->created_at
                                        ? $berita->created_at->format('d M Y')
                                        : '-' }}
                                </small>
                            </div>

                        </div>
                    @empty
                        <div class="text-center py-5">
                            <i class="bi bi-newspaper text-muted fs-1"></i>
                            <p class="text-muted mt-2 mb-0">
                                Belum ada berita yang ditambahkan.
                            </p>
                        </div>
                    @endforelse
                </div>

            </div>
        </div>

        {{-- GALERI TERBARU --}}
        <div class="col-12 col-xl-6">
            <div class="card border-0 shadow-sm h-100"
                 style="border-radius: 14px;">

                <div class="card-header bg-white border-0 p-4 pb-2">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="fw-bold mb-1">Galeri Terbaru</h5>
                            <p class="text-muted small mb-0">
                                Dokumentasi kegiatan sekolah
                            </p>
                        </div>

                        <a href="{{ url('/admin/galeri') }}"
                           class="btn btn-sm btn-light">
                            Lihat Semua
                        </a>
                    </div>
                </div>

                <div class="card-body px-4">
                    <div class="row g-3">

                        @forelse(($galeriTerbaru ?? collect()) as $galeri)
                            <div class="col-6">
                                <div class="border rounded-3 p-2 h-100">

                                    @if(!empty($galeri->file))
                                        <img
                                            src="{{ asset('storage/' . $galeri->file) }}"
                                            alt="{{ $galeri->judul ?? 'Foto galeri' }}"
                                            class="w-100"
                                            style="height:130px;object-fit:cover;border-radius:8px;"
                                        >
                                    @else
                                        <div class="d-flex align-items-center justify-content-center"
                                             style="height:130px;background:#f1f5f9;border-radius:8px;">
                                            <i class="bi bi-images fs-1 text-muted"></i>
                                        </div>
                                    @endif

                                    <h6 class="fw-semibold mt-2 mb-1">
                                        {{ $galeri->judul ?? 'Foto kegiatan' }}
                                    </h6>

                                    <small class="text-muted">
                                        {{ $galeri->created_at
                                            ? $galeri->created_at->format('d M Y')
                                            : '-' }}
                                    </small>

                                </div>
                            </div>
                        @empty
                            <div class="col-12">
                                <div class="text-center py-5">
                                    <i class="bi bi-images text-muted fs-1"></i>
                                    <p class="text-muted mt-2 mb-0">
                                        Belum ada foto galeri.
                                    </p>
                                </div>
                            </div>
                        @endforelse

                    </div>
                </div>

            </div>
        </div>

    </div>

</div>

@endsection