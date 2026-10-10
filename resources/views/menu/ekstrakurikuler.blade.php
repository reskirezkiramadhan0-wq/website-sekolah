
<section id="ekstrakurikuler" class="section ekstra-section">
    <div class="container">

        {{-- JUDUL --}}
        <div class="text-center ekstra-heading">
            <div class="section-label">
                KEGIATAN SISWA
            </div>

            <h2 class="section-title">
                Ekstrakurikuler
            </h2>

            <p class="section-description">
                Kembangkan minat, bakat, kreativitas, dan kemampuan bekerja sama.
            </p>
        </div>

        {{-- DATA EKSTRAKURIKULER --}}
        <div class="row g-4">

            @forelse ($ekstrakurikulers as $ekstra)
                <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                    <div class="ekstra-card">

                        {{-- FOTO --}}
                        <div class="ekstra-image">
                            @if ($ekstra->gambar)
                                <img
                                    src="{{ asset('storage/' . $ekstra->gambar) }}"
                                    alt="{{ $ekstra->nama_eskul }}"
                                >
                            @else
                                <div class="ekstra-no-image">
                                    <i class="bi bi-image"></i>
                                </div>
                            @endif
                        </div>

                        {{-- KONTEN --}}
                        <div class="ekstra-content">

                            <div class="ekstra-label">
                                KEGIATAN SISWA
                            </div>

                            <h3>
                                {{ $ekstra->nama_eskul }}
                            </h3>

                            {{-- PEMBINA DAN JADWAL --}}
                            <div class="ekstra-info">
                                <div>
                                    <i class="bi bi-person-fill"></i>
                                    <span>
                                        Pembina: {{ $ekstra->pembina }}
                                    </span>
                                </div>

                                <div>
                                    <i class="bi bi-calendar-week-fill"></i>
                                    <span>
                                        Jadwal: {{ $ekstra->jadwal_latihan }}
                                    </span>
                                </div>
                            </div>

                            {{-- DESKRIPSI --}}
                            <p class="ekstra-description">
                                {{ $ekstra->deskripsi }}
                            </p>

                        </div>
                    </div>
                </div>

            @empty
                <div class="col-12">
                    <div class="text-center py-5">
                        <i class="bi bi-images fs-1 text-secondary"></i>

                        <p class="mt-3 text-secondary">
                            Belum ada data ekstrakurikuler.
                        </p>
                    </div>
                </div>
            @endforelse

        </div>

        {{-- TOMBOL LIHAT SEMUA --}}
        @if ($ekstrakurikulers->isNotEmpty())
            <div class="text-center mt-4">
                <a href="{{ url('/ekstrakurikuler') }}" class="btn-lihat-semua">
                    <i class="bi bi-chevron-right"></i>
                    Lihat Semua
                </a>
            </div>
        @endif

    </div>
</section>