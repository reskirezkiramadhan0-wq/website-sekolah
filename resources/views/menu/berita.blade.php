<section id="berita" class="section bg-white py-5">
    <div class="container">

        <!-- Header Section -->
        <div class="text-center mb-5">
            <div class="section-label text-primary fw-bold text-uppercase mb-2">
                Informasi
            </div>
            <h2 class="section-title fw-bold">
                Berita Terbaru
            </h2>
            <p class="section-description mx-auto text-muted">
                Informasi dan kegiatan terbaru SMK SIRAHCAI.
            </p>
        </div>

        <!-- Grid Berita -->
        <div class="row g-4">
            @forelse($beritas as $berita)
                <div class="col-lg-4 col-md-6">
                    <div class="news-card border-0 shadow-sm rounded-4 overflow-hidden h-100 d-flex flex-column bg-white">
                        
                        <!-- Gambar Berita -->
                        <div class="news-image position-relative" style="height: 220px; overflow: hidden;">
                            @if(!empty($berita->gambar))
                                <img src="{{ asset('storage/' . $berita->gambar) }}" 
                                     alt="{{ $berita->judul }}" 
                                     class="w-100 h-100" 
                                     style="object-fit: cover;">
                            @else
                                <img src="{{ asset('assets/images/kegiatan.jpg') }}" 
                                     alt="{{ $berita->judul ?? 'Berita Sekolah' }}" 
                                     class="w-100 h-100" 
                                     style="object-fit: cover;">
                            @endif
                        </div>

                        <!-- Konten Berita -->
                        <div class="news-content p-4 d-flex flex-column flex-grow-1">
                            <div class="news-date text-warning fw-bold text-uppercase mb-2" style="font-size: 0.85rem; letter-spacing: 0.5px;">
                                {{ $berita->kategori ?? 'INFORMASI SEKOLAH' }} 
                                @if(isset($berita->tanggal))
                                    &bull; {{ \Carbon\Carbon::parse($berita->tanggal)->format('d M Y') }}
                                @endif
                            </div>

                            <h4 class="fw-bold text-dark mb-2" style="font-size: 1.25rem; line-height: 1.4;">
                                {{ $berita->judul }}
                            </h4>

                            <p class="text-muted small mb-0 flex-grow-1" style="line-height: 1.6;">
                                {{ Str::limit(strip_tags($berita->isi ?? $berita->deskripsi), 100) }}
                            </p>
                        </div>

                    </div>
                </div>
            @empty
                <!-- Fallback Statis Jika Belum Ada Data dari Database -->
                <div class="col-lg-4 col-md-6">
                    <div class="news-card border-0 shadow-sm rounded-4 overflow-hidden h-100 d-flex flex-column bg-white">
                        <div class="news-image" style="height: 220px; overflow: hidden;">
                            <img src="{{ asset('assets/images/kegiatan.jpg') }}" alt="Kegiatan sekolah" class="w-100 h-100" style="object-fit: cover;">
                        </div>
                        <div class="news-content p-4 d-flex flex-column flex-grow-1">
                            <div class="news-date text-warning fw-bold text-uppercase mb-2" style="font-size: 0.85rem;">
                                INFORMASI SEKOLAH
                            </div>
                            <h4 class="fw-bold text-dark mb-2" style="font-size: 1.25rem;">
                                Kegiatan Pembelajaran
                            </h4>
                            <p class="text-muted small mb-0 flex-grow-1">
                                Berbagai kegiatan pembelajaran siswa di lingkungan sekolah.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="news-card border-0 shadow-sm rounded-4 overflow-hidden h-100 d-flex flex-column bg-white">
                        <div class="news-image" style="height: 220px; overflow: hidden;">
                            <img src="{{ asset('assets/images/siswa.jpg') }}" alt="Prestasi siswa" class="w-100 h-100" style="object-fit: cover;">
                        </div>
                        <div class="news-content p-4 d-flex flex-column flex-grow-1">
                            <div class="news-date text-warning fw-bold text-uppercase mb-2" style="font-size: 0.85rem;">
                                PRESTASI
                            </div>
                            <h4 class="fw-bold text-dark mb-2" style="font-size: 1.25rem;">
                                Siswa Berprestasi
                            </h4>
                            <p class="text-muted small mb-0 flex-grow-1">
                                Apresiasi untuk siswa yang berhasil meraih prestasi.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="news-card border-0 shadow-sm rounded-4 overflow-hidden h-100 d-flex flex-column bg-white">
                        <div class="news-image" style="height: 220px; overflow: hidden;">
                            <img src="{{ asset('assets/images/aktivitas.jpg') }}" alt="Kegiatan siswa" class="w-100 h-100" style="object-fit: cover;">
                        </div>
                        <div class="news-content p-4 d-flex flex-column flex-grow-1">
                            <div class="news-date text-warning fw-bold text-uppercase mb-2" style="font-size: 0.85rem;">
                                KEGIATAN
                            </div>
                            <h4 class="fw-bold text-dark mb-2" style="font-size: 1.25rem;">
                                Aktivitas Siswa
                            </h4>
                            <p class="text-muted small mb-0 flex-grow-1">
                                Berbagai aktivitas siswa dalam kegiatan sekolah.
                            </p>
                        </div>
                    </div>
                </div>
            @endforelse
        </div>

        <div class="text-center mt-5">
            <a href="{{ route('berita.semua') }}" class="btn-lihat-semua">
                <i class="bi bi-chevron-right"></i>
                Lihat Semua Berita
            </a>
        </div>
        
    </div>
</section>

