
<section class="section bg-white" id="guru">

    <div class="container">

        {{-- JUDUL --}}
        <div class="text-center mb-5">

            <div class="section-label">
                Tenaga Pendidik
            </div>

            <h2 class="section-title">
                Guru Kami
            </h2>

            <p class="section-description mx-auto">
                Guru dan tenaga pendidik yang membantu
                siswa berkembang dan meraih prestasi.
            </p>

        </div>

        {{-- DATA GURU --}}
        <div class="row g-4">

            @forelse ($gurus as $guru)

                <div class="col-lg-3 col-md-6">

                    <div class="guru-card">

                        {{-- FOTO GURU --}}
                        <div class="guru-photo">

                            @if ($guru->foto)

                                <img
                                    src="{{ asset('storage/' . $guru->foto) }}"
                                    alt="{{ $guru->nama_guru }}"
                                >

                            @else

                                <div class="guru-placeholder">
                                    <i class="bi bi-person-fill"></i>
                                </div>

                            @endif

                        </div>

                        {{-- INFORMASI GURU --}}
                        <div class="guru-content">

                            <h4>
                                {{ $guru->nama_guru }}
                            </h4>

                            <p>
                                {{ $guru->mata_pelajaran }}
                            </p>

                            <span>
                                <i class="bi bi-person-badge me-1"></i>
                                NIP. {{ $guru->nip ?: '-' }}
                            </span>

                        </div>

                    </div>

                </div>

            @empty

                <div class="col-12 text-center">

                    <p class="text-muted">
                        Belum ada data guru.
                    </p>

                </div>

            @endforelse

        </div>

        @if($gurus->isNotEmpty())
            <div class="text-center mt-4">
                <a href="{{ route('guru.semua') }}" class="btn-lihat-semua">
                    <i class="bi bi-chevron-right"></i>
                    Lihat Semua Guru
                </a>
            </div>
        @endif

    </div>

</section>