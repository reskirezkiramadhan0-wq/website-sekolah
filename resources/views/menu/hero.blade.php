
<style>
    /* ==============================
       CAROUSEL BERANDA
    ============================== */

    #heroCarousel {
        position: relative;
        overflow: hidden;
    }

    #heroCarousel .carousel-item {
        position: relative;
    }

    #heroCarousel .hero-image {
        display: block;
        width: 100%;
        height: 650px;
        object-fit: cover;
        object-position: center;
    }

    /* Lapisan gelap pada gambar */
    #heroCarousel .hero-gelap {
        position: absolute;
        inset: 0;
        z-index: 1;
        background: linear-gradient(
            90deg,
            rgba(0, 0, 0, 0.78) 0%,
            rgba(0, 0, 0, 0.48) 55%,
            rgba(0, 0, 0, 0.08) 100%
        );
    }

    /* Konten sambutan */
    #heroCarousel .hero-sambutan {
        position: absolute;
        top: 50%;
        left: 8%;
        transform: translateY(-50%);
        width: 55%;
        max-width: 700px;
        color: white;
        text-align: left;
        z-index: 2;
    }

    #heroCarousel .hero-sambutan .label {
        display: inline-block;
        color: #f1fdff;
        font-size: 16px;
        font-weight: 800;
        letter-spacing: 2px;
        margin-bottom: 14px;
    }

    #heroCarousel .hero-sambutan h1 {
        color: white;
        font-size: clamp(32px, 4vw, 50px);
        font-weight: 800;
        line-height: 1.15;
        margin-bottom: 20px;
    }

    #heroCarousel .hero-sambutan .deskripsi-sambutan {
        color: rgba(255, 255, 255, 0.95);
        font-size: 16px;
        line-height: 1.8;
        margin-bottom: 25px;
        max-width: 620px;
    }

    /* Tombol sambutan */
    #heroCarousel .btn-sambutan {
        display: inline-block;
        background: #ed9900;
        color: white;
        padding: 13px 22px;
        border-radius: 7px;
        text-decoration: none;
        font-size: 13px;
        font-weight: 700;
        transition: 0.3s ease;
    }

    #heroCarousel .btn-sambutan:hover {
        background: #ce8200;
        color: white;
        transform: translateY(-2px);
    }

    /* Indikator carousel */
    #heroCarousel .carousel-indicators {
        z-index: 3;
        margin-bottom: 25px;
    }

    #heroCarousel .carousel-indicators button {
        width: 30px;
        height: 4px;
        border-radius: 5px;
        border: 0;
        margin: 0 5px;
    }

    /* Tombol panah */
    #heroCarousel .carousel-control-prev,
    #heroCarousel .carousel-control-next {
        z-index: 4;
        width: 7%;
    }

    /* ==============================
       STATISTIK
    ============================== */

    .stats-container {
        background: #ffffff;
        border-radius: 18px;
        margin-top: -5px;
        position: relative;
    }

    .stat-item {
        padding: 15px 10px;
        border-right: 1px solid #e9ecef;
    }

    .stat-item:last-child {
        border-right: none;
    }

    .stat-item h2 {
        color: #087f8c;
        font-size: 32px;
        font-weight: 800;
    }

    .stat-item p {
        color: #555555;
        font-size: 14px;
    }


    @media (max-width: 768px) {
        #heroCarousel .hero-image {
            height: 520px;
        }

        #heroCarousel .hero-gelap {
            background: linear-gradient(
                90deg,
                rgba(0, 0, 0, 0.78),
                rgba(0, 0, 0, 0.42)
            );
        }

        #heroCarousel .hero-sambutan {
            left: 8%;
            width: 82%;
            max-width: none;
        }

        #heroCarousel .hero-sambutan .label {
            font-size: 12px;
            letter-spacing: 1.5px;
            margin-bottom: 10px;
        }

        #heroCarousel .hero-sambutan h1 {
            font-size: 30px;
            line-height: 1.2;
            margin-bottom: 15px;
        }

        #heroCarousel .hero-sambutan .deskripsi-sambutan {
            font-size: 13px;
            line-height: 1.65;
            margin-bottom: 18px;
        }

        #heroCarousel .btn-sambutan {
            padding: 11px 15px;
            font-size: 11px;
        }

        #heroCarousel .carousel-control-prev,
        #heroCarousel .carousel-control-next {
            width: 8%;
        }

        .stats-container {
            margin-left: 5px;
            margin-right: 5px;
        }

        .stat-item {
            padding: 12px 4px;
        }

        .stat-item h2 {
            font-size: 23px;
        }

        .stat-item p {
            font-size: 11px;
        }
    }

    @media (max-width: 400px) {
        #heroCarousel .hero-image {
            height: 480px;
        }

        #heroCarousel .hero-sambutan h1 {
            font-size: 26px;
        }

        #heroCarousel .hero-sambutan .deskripsi-sambutan {
            font-size: 12px;
        }
    }
</style>


<section id="beranda">


    <div id="heroCarousel"
         class="carousel slide carousel-fade"
         data-bs-ride="carousel"
         data-bs-interval="4000">

        <div class="carousel-indicators">

            <button type="button"
                    data-bs-target="#heroCarousel"
                    data-bs-slide-to="0"
                    class="active"
                    aria-current="true"
                    aria-label="Slide 1">
            </button>

            <button type="button"
                    data-bs-target="#heroCarousel"
                    data-bs-slide-to="1"
                    aria-label="Slide 2">
            </button>

            <button type="button"
                    data-bs-target="#heroCarousel"
                    data-bs-slide-to="2"
                    aria-label="Slide 3">
            </button>

        </div>


        <div class="carousel-inner">

            <div class="carousel-item active">

                <img src="{{ asset('assets/images/sira.jpg') }}"
                     class="hero-image"
                     alt="Gedung SMK YPC CINTAWA">

                <div class="hero-gelap"></div>

                <div class="hero-sambutan">

                    <div class="label">
                        SELAMAT DATANG DI WEBSITE RESMI
                    </div>

                    <h1>
                        Sambutan Kepala Sekolah
                    </h1>

                    <p class="deskripsi-sambutan">
                        Assalamu’alaikum warahmatullahi wabarakatuh.
                        Selamat datang di website resmi
                        {{ $profile->nama_sekolah ?? 'SMA SIRAHCAI' }}.
                        Kami berkomitmen membangun generasi yang
                        berkarakter, kompeten, berprestasi, dan siap
                        menghadapi masa depan.
                    </p>

                    @if (!empty($profile?->kepala_sekolah))
                        <p class="mt-3 mb-0">
                            <small>
                                {{ $profile->kepala_sekolah }}
                                | Kepala Sekolah
                            </small>
                        </p>
                    @endif

                </div>

            </div>


    

            <div class="carousel-item">

                <img src="{{ asset('assets/images/lapangan.jpg') }}"
                     class="hero-image"
                     alt="Lapangan SMA SIRAHCAI">

                <div class="hero-gelap"></div>

                <div class="hero-sambutan">

                    <div class="label">
                        LINGKUNGAN SEKOLAH
                    </div>

                    <h1>
                        Belajar Nyaman,
                        Meraih Masa Depan
                    </h1>

                    <p class="deskripsi-sambutan">
                        Lingkungan sekolah yang nyaman menjadi
                        tempat terbaik bagi siswa untuk belajar,
                        mengembangkan potensi, membangun kedisiplinan,
                        dan meraih prestasi bersama.
                    </p>

                </div>

            </div>


         

            <div class="carousel-item">

                <img src="{{ asset('assets/images/cai.jpg') }}"
                     class="hero-image"
                     alt="Kegiatan SMK YPC CINTAWA">

                <div class="hero-gelap"></div>

                <div class="hero-sambutan">

                    <div class="label">
                        GENERASI BERPRESTASI
                    </div>

                    <h1>
                        Kembangkan Potensi,
                        Raih Prestasi
                    </h1>

                    <p class="deskripsi-sambutan">
                        Kami mendukung siswa untuk mengembangkan
                        keterampilan, kreativitas, karakter, dan
                        kemampuan sesuai minatnya agar siap menghadapi
                        dunia kerja maupun melanjutkan pendidikan.
                    </p>

                </div>

            </div>

        </div>


    
        <button class="carousel-control-prev"
                type="button"
                data-bs-target="#heroCarousel"
                data-bs-slide="prev"
                aria-label="Slide sebelumnya">

            <span class="carousel-control-prev-icon"
                  aria-hidden="true">
            </span>

        </button>


        <button class="carousel-control-next"
                type="button"
                data-bs-target="#heroCarousel"
                data-bs-slide="next"
                aria-label="Slide berikutnya">

            <span class="carousel-control-next-icon"
                  aria-hidden="true">
            </span>

        </button>

    </div>


    <div class="container my-5">

        <div class="row stats-container shadow-lg overflow-hidden text-center py-3">

            {{-- Total Siswa --}}
            <div class="col-4 stat-item">

                <h2 class="mb-1">
                    {{ $totalSiswa ?? 0 }}+
                </h2>

                <p class="mb-0">
                    <i class="bi bi-people-fill"></i>
                    Siswa
                </p>

            </div>


            {{-- Total Guru --}}
            <div class="col-4 stat-item">

                <h2 class="mb-1">
                    {{ $totalGuru ?? 0 }}+
                </h2>

                <p class="mb-0">
                    <i class="bi bi-person-workspace"></i>
                    Guru & Staf
                </p>

            </div>


            {{-- Total Ekstrakurikuler --}}
            <div class="col-4 stat-item">

                <h2 class="mb-1">
                    {{ $totalEskul ?? 0 }}+
                </h2>

                <p class="mb-0">
                    <i class="bi bi-trophy-fill"></i>
                    Ekstrakurikuler
                </p>

            </div>

        </div>

    </div>

</section>