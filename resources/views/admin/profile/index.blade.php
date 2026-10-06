@extends('template')

@section('content')
<div class="container px-4 py-4">
    <div class="card shadow-sm border-0">
        <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
            <h5 class="m-0 font-weight-bold text-primary">Profil Sekolah</h5>

            {{-- Ambil data dari variabel $profil atau $profile --}}
            @php 
                $dataProfil = $profil ?? $profile ?? null; 
            @endphp

            @if($dataProfil)
                <a href="{{ route('admin.profile.edit', $dataProfil->id) }}" class="btn btn-primary btn-sm px-3">
                    <i class="fas fa-edit me-1"></i> Edit Profil
                </a>
            @else
                {{-- Jika database masih kosong --}}
                <span class="badge bg-warning text-dark">Data Belum Diisi</span>
            @endif
        </div>

        <div class="card-body">
            @if($dataProfil)
                <div class="row">
                    <div class="col-12 mb-4 text-center">
                        <div class="d-flex justify-content-center align-items-center gap-4 flex-wrap">
                            @if($dataProfil->logo)
                                <div>
                                    <img src="{{ asset('storage/' . $dataProfil->logo) }}" alt="Logo" class="img-thumbnail" style="max-height: 120px;">
                                </div>
                            @endif
                            @if($dataProfil->foto)
                                <div>
                                    <img src="{{ asset('storage/' . $dataProfil->foto) }}" alt="Foto" class="img-thumbnail" style="max-height: 120px;">
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <strong>Nama Sekolah:</strong>
                        <p class="mb-0">{{ $dataProfil->nama_sekolah }}</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <strong>Kepala Sekolah:</strong>
                        <p class="mb-0">{{ $dataProfil->kepala_sekolah }}</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <strong>NPSN:</strong>
                        <p class="mb-0">{{ $dataProfil->npsn }}</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <strong>Tahun Berdiri:</strong>
                        <p class="mb-0">{{ $dataProfil->tahun_berdiri }}</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <strong>Kontak:</strong>
                        <p class="mb-0">{{ $dataProfil->kontak }}</p>
                    </div>
                    <div class="col-md-12 mb-3">
                        <strong>Alamat:</strong>
                        <p class="mb-0">{{ $dataProfil->alamat }}</p>
                    </div>
                    <div class="col-md-12 mb-3">
                        <strong>Deskripsi:</strong>
                        <p class="mb-0">{{ $dataProfil->deskripsi }}</p>
                    </div>
                    <div class="col-md-12 mb-3">
                        <strong>Visi & Misi:</strong>
                        <p class="mb-0">{!! nl2br(e($dataProfil->visi_misi)) !!}</p>
                    </div>
                </div>
            @else
                <div class="text-center py-4">
                    <p class="text-muted">Data profil sekolah belum ada di database.</p>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection