@extends('template')

@section('content')

<div class="container px-4 py-4">

    @php
        $dataProfil = $profile ?? $profil ?? null;
    @endphp

    {{-- HEADER --}}
    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h4 class="fw-bold mb-1">
                Profil Sekolah
            </h4>

            <p class="text-muted mb-0">
                Informasi lengkap mengenai sekolah
            </p>
        </div>

        @if($dataProfil)
            <a href="{{ route('admin.profile.edit', $dataProfil->id) }}"
               class="btn btn-primary btn-sm px-3">
                <i class="fas fa-edit me-1"></i>
                Edit Profil
            </a>
        @endif

    </div>


    @if($dataProfil)


        <div class="card border-0 shadow-sm mb-4">

            <div class="card-body p-4">

                <div class="row align-items-center">

                    {{-- LOGO DAN FOTO --}}
                    <div class="col-md-4 text-center mb-4 mb-md-0">

                        <div class="d-flex justify-content-center align-items-start gap-4 flex-wrap">

                            {{-- LOGO SEKOLAH --}}
                            <div class="text-center">

                                @if(!empty($dataProfil->logo))

                                    <img src="{{ asset('storage/' . $dataProfil->logo) }}"
                                         alt="Logo Sekolah"
                                         class="img-thumbnail"
                                         style="
                                            width: 120px;
                                            height: 120px;
                                            object-fit: contain;
                                         ">

                                @else

                                    <div class="bg-light rounded d-flex align-items-center justify-content-center"
                                         style="
                                            width: 120px;
                                            height: 120px;
                                         ">
                                        <i class="fas fa-school fa-3x text-muted"></i>
                                    </div>

                                @endif

                                <small class="d-block text-muted mt-2">
                                    logo Sekolah
                                </small>

                            </div>


                            {{-- FOTO KEPALA SEKOLAH / GEDUNG --}}
                            <div class="text-center">

                                @if(!empty($dataProfil->foto))

                                    <img src="{{ asset('storage/' . $dataProfil->foto) }}"
                                         alt="Foto Kepala Sekolah"
                                         class="img-thumbnail"
                                         style="
                                            width: 120px;
                                            height: 120px;
                                            object-fit: cover;
                                         ">

                                @else

                                    <div class="bg-light rounded d-flex align-items-center justify-content-center"
                                         style="
                                            width: 120px;
                                            height: 120px;
                                         ">
                                        <i class="fas fa-image fa-3x text-muted"></i>
                                    </div>

                                @endif

                                <small class="d-block text-muted mt-2">
                                    Kepala Sekolah
                                </small>

                            </div>

                        </div>

                    </div>


                    {{-- INFORMASI UTAMA --}}
                    <div class="col-md-8">

                        <span class="badge bg-primary mb-2">
                            PROFIL SEKOLAH
                        </span>

                        <h2 class="fw-bold mb-2">
                            {{ $dataProfil->nama_sekolah ?? '-' }}
                        </h2>

                        <div class="mb-2 text-muted">
                            <i class="fas fa-map-marker-alt text-primary me-2"></i>
                            {{ $dataProfil->alamat ?? '-' }}
                        </div>

                        @if(!empty($dataProfil->deskripsi))

                            <p class="text-muted mb-0 mt-3"
                               style="line-height: 1.7;">
                                {{ $dataProfil->deskripsi }}
                            </p>

                        @endif

                    </div>

                </div>

            </div>

        </div>

        <div class="row g-4 mb-4">

            {{-- DATA SEKOLAH --}}
            <div class="col-md-6">

                <div class="card border-0 shadow-sm h-100">

                    <div class="card-body p-4">

                        <h6 class="fw-bold mb-4">

                            <i class="fas fa-school text-primary me-2"></i>

                            Informasi Sekolah

                        </h6>


                        {{-- Nama --}}
                        <div class="mb-4">

                            <small class="text-muted d-block mb-1">
                                Nama Sekolah
                            </small>

                            <span class="fw-semibold">
                                {{ $dataProfil->nama_sekolah ?? '-' }}
                            </span>

                        </div>


                        {{-- Kepala Sekolah --}}
                        <div class="mb-4">

                            <small class="text-muted d-block mb-1">
                                Kepala Sekolah
                            </small>

                            <span class="fw-semibold">
                                {{ $dataProfil->kepala_sekolah ?? '-' }}
                            </span>

                        </div>


                        {{-- NPSN --}}
                        <div class="mb-4">

                            <small class="text-muted d-block mb-1">
                                NPSN
                            </small>

                            <span class="fw-semibold">
                                {{ $dataProfil->npsn ?? '-' }}
                            </span>

                        </div>


                        {{-- Tahun --}}
                        <div>

                            <small class="text-muted d-block mb-1">
                                Tahun Berdiri
                            </small>

                            <span class="fw-semibold">
                                {{ $dataProfil->tahun_berdiri ?? '-' }}
                            </span>

                        </div>

                    </div>

                </div>

            </div>


            {{-- KONTAK --}}
            <div class="col-md-6">

                <div class="card border-0 shadow-sm h-100">

                    <div class="card-body p-4">

                        <h6 class="fw-bold mb-4">

                            <i class="fas fa-address-book text-primary me-2"></i>

                            Kontak Sekolah

                        </h6>


                        {{-- Alamat --}}
                        <div class="mb-4">

                            <small class="text-muted d-block mb-1">
                                Alamat
                            </small>

                            <span class="fw-semibold">
                                {{ $dataProfil->alamat ?? '-' }}
                            </span>

                        </div>


                        {{-- Kontak --}}
                        <div>

                            <small class="text-muted d-block mb-1">
                                Nomor Kontak
                            </small>

                            <span class="fw-semibold">
                                {{ $dataProfil->kontak ?? '-' }}
                            </span>

                        </div>

                    </div>

                </div>

            </div>

        </div>


        <div class="card border-0 shadow-sm mb-4">

            <div class="card-body p-4">

                <h6 class="fw-bold mb-3">

                    <i class="fas fa-align-left text-primary me-2"></i>

                    Deskripsi Sekolah

                </h6>

                <p class="text-muted mb-0"
                   style="line-height: 1.8;">

                    {{ $dataProfil->deskripsi ?? 'Belum ada deskripsi sekolah.' }}

                </p>

            </div>

        </div>



        <div class="card border-0 shadow-sm mb-4">

            <div class="card-body p-4">

                <h6 class="fw-bold mb-4">

                    <i class="fas fa-bullseye text-primary me-2"></i>

                    Visi & Misi

                </h6>

                <div class="bg-light rounded p-4">

                    <p class="mb-0"
                       style="line-height: 1.8;">

                        {!! nl2br(e(
                            $dataProfil->visi_misi ??
                            'Belum ada visi dan misi.'
                        )) !!}

                    </p>

                </div>

            </div>

        </div>


    @else

    
        <div class="card border-0 shadow-sm">

            <div class="card-body text-center py-5">

                <div class="mb-3">

                    <i class="fas fa-school fa-3x text-muted"></i>

                </div>

                <h5 class="fw-bold">
                    Profil Sekolah Belum Tersedia
                </h5>

                <p class="text-muted mb-0">
                    Data profil sekolah belum ada di database.
                </p>

            </div>

        </div>

    @endif

</div>

@endsection