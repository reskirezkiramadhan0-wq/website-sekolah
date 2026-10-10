<section id="galeri" class="section bg-light py-5">
    <div class="container">

        <!-- Header Section -->
        <div class="text-center mb-5">
            <div class="section-label text-primary fw-bold text-uppercase mb-2">
                Galeri
            </div>
            <h2 class="section-title fw-bold">
                Dokumentasi Kegiatan
            </h2>
            <p class="section-description mx-auto text-muted">
                Dokumentasi kegiatan SMK SIRAHCAI.
            </p>
        </div>

        <!-- Grid Galeri -->
        <div class="row g-4">
            @forelse($galeries ?? [] as $galeri)
                <div class="col-lg-6 col-md-6">
                    <div class="gallery-card border-0 shadow-sm rounded-4 overflow-hidden bg-white h-100 d-flex flex-column">
                        
                        <!-- Wrapper Gambar Galeri -->
                        <div class="gallery-image position-relative" style="height: 320px; overflow: hidden;">
                            @if(!empty($galeri->file))
                                <img src="{{ asset('storage/' . $galeri->file) }}" 
                                     alt="{{ $galeri->judul ?? 'Galeri Sekolah' }}" 
                                     class="w-100 h-100 img-fluid" 
                                     style="object-fit: cover; transition: transform 0.3s ease;"
                                     onerror="this.onerror=null; this.src='https://via.placeholder.com/600x400?text=Gambar+Tidak+Ditemukan';">
                            @else
                                <div class="bg-secondary bg-opacity-10 w-100 h-100 d-flex align-items-center justify-content-center text-muted">
                                    <i class="bi bi-image fs-1"></i>
                                </div>
                            @endif
                        </div>

                        <!-- Informasi Detail (Judul, Tanggal & Keterangan) -->
                        <div class="p-3 bg-white border-top flex-grow-1 d-flex flex-column justify-content-between">
                            <div>
                                <!-- Judul Galeri -->
                                @if(!empty($galeri->judul))
                                    <h5 class="fw-bold mb-2 text-dark">{{ $galeri->judul }}</h5>
                                @endif
                                
                                <!-- Keterangan Galeri -->
                                @if(!empty($galeri->keterangan))
                                    <p class="text-muted small mb-3">{{ $galeri->keterangan }}</p>
                                @endif
                            </div>

                            <!-- Tanggal Galeri -->
                            @if(!empty($galeri->tanggal))
                                <div class="text-muted small pt-2 border-top d-flex align-items-center">
                                    <i class="bi bi-calendar3 me-2 text-primary"></i>
                                    <span>{{ \Carbon\Carbon::parse($galeri->tanggal)->translatedFormat('d F Y') }}</span>
                                </div>
                            @endif
                        </div>

                    </div>
                </div>
            @empty
                <!-- Tampilan Pesan Kosong Jika Belum Ada Data di Admin -->
                <div class="col-12 text-center text-muted py-5">
                    <i class="bi bi-images fs-1 d-block mb-2"></i>
                    Belum ada foto galeri yang diunggah.
                </div>
            @endforelse
        </div>

         @if($galeries->isNotEmpty())
            <div class="text-center mt-4">
                <a href="{{ route('galeri.semua') }}" class="btn-lihat-semua">
                    <i class="bi bi-chevron-right"></i>
                    Lihat Semua Galeri
                </a>
            </div>
        @endif

    </div>
</section>