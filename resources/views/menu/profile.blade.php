

<section id="sambutan" class="section py-5 bg-white">

    <div class="container">

        <div class="row align-items-center g-4">

            {{-- FOTO KEPALA SEKOLAH --}}
            <div class="col-lg-4 col-md-5 text-center">

                <div class="card border-0 shadow-sm rounded-4 overflow-hidden bg-light p-2"
                     style="max-width: 320px; margin: 0 auto;">

                    @if(isset($profil) && !empty($profil->foto))

                        <img
                            src="{{ asset('storage/' . $profil->foto) }}"
                            alt="Foto Kepala Sekolah"
                            class="w-100 rounded-3"
                            style="height: 380px; object-fit: cover;"
                            onerror="this.onerror=null; this.src='{{ asset('images/default-profile.jpg') }}';"
                        >

                    @else

                        <div class="w-100 rounded-3 bg-light d-flex align-items-center justify-content-center"
                             style="height: 380px;">

                            <div class="text-center text-muted">

                                <i class="bi bi-person-bounding-box"
                                   style="font-size: 80px;"></i>

                                <p class="mt-2 mb-0">
                                    Foto Kepala Sekolah
                                </p>

                            </div>

                        </div>

                    @endif

                    {{-- NAMA KEPALA SEKOLAH --}}
                    <div class="p-3 text-center bg-white rounded-bottom-3 mt-2 border-top">

                        <h5 class="fw-bold text-dark mb-1">
                            {{ $profil->kepala_sekolah ?? 'Kepala Sekolah' }}
                        </h5>

                        <span class="badge bg-primary bg-opacity-10 text-primary fw-semibold rounded-pill px-3 py-2">
                            Kepala Sekolah
                        </span>

                    </div>

                </div>

            </div>


            {{-- TEKS SAMBUTAN --}}
            <div class="col-lg-8 col-md-7">

                <div class="ps-lg-3">

                    <span class="text-warning fw-bold text-uppercase small d-block mb-1">
                        Komitmen Kami Untuk Pendidikan
                    </span>

                    <h2 class="fw-bold text-primary mb-4 pb-2 border-bottom border-2 border-warning d-inline-block">
                        Sambutan Kepala Sekolah
                    </h2>

                    <div class="text-muted fs-6" style="line-height: 1.9;">

                        <p class="mb-3">
                            Puji syukur ke hadirat Tuhan Yang Maha Esa
                            atas segala rahmat dan karunia-Nya.

                            Selamat datang di website resmi
                            <strong>
                                {{ $profil->nama_sekolah ?? 'SMA SIRAHCAI' }}
                            </strong>.
                        </p>

                        <p class="mb-3">
                            Website ini kami hadirkan sebagai sarana
                            informasi dan komunikasi antara sekolah
                            dengan orang tua, peserta didik, alumni,
                            serta masyarakat luas.
                        </p>

                        <p class="mb-0">
                            Melalui media ini, kami berharap seluruh
                            informasi mengenai kegiatan sekolah,
                            program pendidikan, prestasi siswa, guru,
                            ekstrakurikuler, berita, dan berbagai
                            kegiatan lainnya dapat tersampaikan
                            secara transparan, cepat, dan akurat.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- ========================================================= --}}
{{-- SECTION PROFIL SEKOLAH --}}
{{-- ========================================================= --}}

<section id="profil" class="profil-section py-5">

    <div class="container">

        {{-- JUDUL --}}
        <div class="text-center mb-5">

            <span class="profil-label">
                MENGENAL SEKOLAH KAMI
            </span>

            <h2 class="profil-title">
                Profil Sekolah
            </h2>

            <p class="profil-subtitle">
                Informasi lengkap mengenai
                {{ $profil->nama_sekolah ?? 'SMA SIRAHCAI' }}
            </p>

        </div>


        {{-- IDENTITAS SEKOLAH --}}
        <div class="profil-hero mb-4">

            <div class="row align-items-center g-4">

                {{-- LOGO SEKOLAH --}}
                <div class="col-lg-2 col-md-3 text-center">

                    @if(isset($profil) && !empty($profil->logo))

                        <img
                            src="{{ asset('storage/' . $profil->logo) }}"
                            alt="Logo Sekolah"
                            class="profil-logo"
                        >

                    @else

                        <div class="profil-logo-placeholder">
                            <i class="bi bi-mortarboard-fill"></i>
                        </div>

                    @endif

                </div>


                {{-- NAMA SEKOLAH --}}
                <div class="col-lg-4 col-md-9">

                    <span class="badge bg-primary-subtle text-primary rounded-pill px-3 py-2">
                        PROFIL RESMI
                    </span>

                    <h2 class="fw-bold mt-3 mb-3">
                        {{ $profil->nama_sekolah ?? 'SMA SIRAHCAI' }}
                    </h2>

                </div>


                {{-- FOTO GEDUNG --}}
                <div class="col-lg-6">

                    @if(isset($profil) && !empty($profil->foto_gedung))

                        <img
                            src="{{ asset('storage/' . $profil->foto_gedung) }}"
                            alt="Gedung Sekolah"
                            class="profil-building"
                        >

                    @else

                        <div class="profil-building-placeholder">

                            <i class="bi bi-buildings"></i>

                            <span>
                                Foto Gedung Sekolah
                            </span>

                        </div>

                    @endif

                </div>

            </div>

        </div>


        {{-- ================================================= --}}
        {{-- INFORMASI SEKOLAH --}}
        {{-- ================================================= --}}

        <div class="row g-3 mb-4">

            {{-- NAMA SEKOLAH --}}
            <div class="col-lg-3 col-md-6">

                <div class="profil-info-card">

                    <div class="profil-info-icon">
                        <i class="bi bi-buildings"></i>
                    </div>

                    <div>
                        <small>Nama Sekolah</small>

                        <h6>
                            {{ $profil->nama_sekolah ?? 'SMA SIRAHCAI' }}
                        </h6>
                    </div>

                </div>

            </div>


            {{-- NPSN --}}
            <div class="col-lg-3 col-md-6">

                <div class="profil-info-card">

                    <div class="profil-info-icon">
                        <i class="bi bi-card-heading"></i>
                    </div>

                    <div>
                        <small>NPSN</small>

                        <h6>
                            {{ $profil->npsn ?? '-' }}
                        </h6>
                    </div>

                </div>

            </div>


            {{-- TAHUN BERDIRI --}}
            <div class="col-lg-3 col-md-6">

                <div class="profil-info-card">

                    <div class="profil-info-icon">
                        <i class="bi bi-calendar-event"></i>
                    </div>

                    <div>
                        <small>Tahun Berdiri</small>

                        <h6>
                            {{ $profil->tahun_berdiri ?? '-' }}
                        </h6>
                    </div>

                </div>

            </div>


            {{-- KONTAK --}}
            <div class="col-lg-3 col-md-6">

                <div class="profil-info-card">

                    <div class="profil-info-icon">
                        <i class="bi bi-telephone"></i>
                    </div>

                    <div>
                        <small>Kontak</small>

                        <h6>
                            {{ $profil->kontak ?? '-' }}
                        </h6>
                    </div>

                </div>

            </div>

        </div>


        {{-- ================================================= --}}
        {{-- VISI DAN MISI --}}
        {{-- ================================================= --}}

        <div class="row g-4 mb-4">

            {{-- VISI SEKOLAH --}}
            <div class="col-lg-6">

                <div class="profil-content-card visi-card h-100">

                    <div class="d-flex align-items-center gap-3 mb-4">

                        <div class="profil-heading-icon">
                            <i class="bi bi-eye-fill"></i>
                        </div>

                        <h3 class="fw-bold mb-0">
                            Visi Sekolah
                        </h3>

                    </div>

                    <div class="profil-visi-text">

                        @php
                            $visiSekolah = $profil->visi
                                ?? null;
                        @endphp

                        @if(!empty($visiSekolah))

                            {!! nl2br(e($visiSekolah)) !!}

                        @elseif(!empty($profil->visi_misi))

                            {!! nl2br(e($profil->visi_misi)) !!}

                        @else

                            <p class="text-muted mb-0">
                                Visi sekolah belum diisi.
                            </p>

                        @endif

                    </div>

                </div>

            </div>


            {{-- MISI SEKOLAH --}}
            <div class="col-lg-6">

                <div class="profil-content-card misi-card h-100">

                    <div class="d-flex align-items-center gap-3 mb-4">

                        <div class="profil-heading-icon green-icon">
                            <i class="bi bi-list-check"></i>
                        </div>

                        <h3 class="fw-bold mb-0">
                            Misi Sekolah
                        </h3>

                    </div>

                    <div class="profil-misi-text">

                        @php
                            $misiSekolah = $profil->misi ?? null;
                        @endphp

                        @if(!empty($misiSekolah))

                            {!! nl2br(e($misiSekolah)) !!}

                        @else

                            <p class="text-muted mb-0">
                                Misi sekolah belum diisi.
                            </p>

                        @endif

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>