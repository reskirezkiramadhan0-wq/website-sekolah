@extends('template')

@section('content')

<div class="container py-4">

    <div class="mb-4">
        <h2 class="fw-bold mb-1">Dashboard</h2>
        <p class="text-muted mb-0">
            Selamat datang di halaman administrator SMK YPC CINTAWA.
        </p>
    </div>

    <div class="row g-4 mb-4">

        <div class="col-md-4">
            <div class="card border-0 shadow-sm rounded-4">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <p class="text-muted mb-2">Data User</p>
                            <h2 class="fw-bold mb-0">24</h2>
                        </div>

                        <i class="bi bi-people fs-1 text-primary"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-0 shadow-sm rounded-4">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <p class="text-muted mb-2">Data Guru</p>
                            <h2 class="fw-bold mb-0">18</h2>
                        </div>

                        <i class="bi bi-person-workspace fs-1 text-success"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-0 shadow-sm rounded-4">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <p class="text-muted mb-2">Berita</p>
                            <h2 class="fw-bold mb-0">12</h2>
                        </div>

                        <i class="bi bi-newspaper fs-1 text-warning"></i>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="card border-0 shadow-sm rounded-4">
        <div class="card-body p-4">

            <h5 class="fw-bold mb-4">Aktivitas Terbaru</h5>

            <div class="border-bottom py-3">
                <i class="bi bi-person-plus text-primary me-2"></i>
                User baru ditambahkan
            </div>

            <div class="border-bottom py-3">
                <i class="bi bi-newspaper text-success me-2"></i>
                Berita sekolah diperbarui
            </div>

            <div class="py-3">
                <i class="bi bi-images text-warning me-2"></i>
                Galeri sekolah diperbarui
            </div>

        </div>
    </div>

</div>

@endsection