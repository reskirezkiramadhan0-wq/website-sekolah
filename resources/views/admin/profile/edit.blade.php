
@extends('template')


@section('content')
<div class="container px-4 py-4">

    <div class="card shadow-sm border-0 rounded-3">

        {{-- HEADER --}}
        <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
            <h5 class="m-0 fw-bold text-primary">
                Edit Profil Sekolah
            </h5>

            <a href="{{ route('admin.profile.index') }}"
               class="btn btn-secondary btn-sm">
                <i class="bi bi-arrow-left"></i> Kembali
            </a>
        </div>

        <div class="card-body p-4">

            {{-- NOTIFIKASI ERROR --}}
            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade show">
                    <strong>Periksa kembali data berikut:</strong>
                    <ul class="mb-0 mt-2">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button"
                            class="btn-close"
                            data-bs-dismiss="alert"></button>
                </div>
            @endif

            {{-- FORM EDIT --}}
            <form action="{{ route('admin.profile.update', $profile->id) }}"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf
                @method('PUT')

                <div class="row">

                    {{-- NAMA SEKOLAH --}}
                    <div class="col-12 mb-3">
                        <label class="form-label fw-bold">Nama Sekolah</label>
                        <input type="text"
                               name="nama_sekolah"
                               class="form-control @error('nama_sekolah') is-invalid @enderror"
                               value="{{ old('nama_sekolah', $profile->nama_sekolah ?? '') }}"
                               maxlength="40"
                               required
                               placeholder="Masukkan nama sekolah">
                        @error('nama_sekolah')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- KEPALA SEKOLAH --}}
                    <div class="col-12 mb-3">
                        <label class="form-label fw-bold">Nama Kepala Sekolah</label>
                        <input type="text"
                               name="kepala_sekolah"
                               class="form-control @error('kepala_sekolah') is-invalid @enderror"
                               value="{{ old('kepala_sekolah', $profile->kepala_sekolah ?? '') }}"
                               maxlength="100"
                               required
                               placeholder="Masukkan nama kepala sekolah">
                        @error('kepala_sekolah')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- NPSN --}}
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold">NPSN</label>
                        <input type="text"
                               name="npsn"
                               class="form-control @error('npsn') is-invalid @enderror"
                               value="{{ old('npsn', $profile->npsn ?? '') }}"
                               maxlength="10"
                               required
                               placeholder="Masukkan NPSN">
                        @error('npsn')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- TAHUN BERDIRI --}}
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold">Tahun Berdiri</label>
                        <input type="number"
                               name="tahun_berdiri"
                               class="form-control @error('tahun_berdiri') is-invalid @enderror"
                               value="{{ old('tahun_berdiri', $profile->tahun_berdiri ?? '') }}"
                               min="1900"
                               max="{{ date('Y') }}"
                               required
                               placeholder="Contoh: 2009">
                        @error('tahun_berdiri')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- KONTAK --}}
                    <div class="col-12 mb-3">
                        <label class="form-label fw-bold">Kontak / Nomor Telepon</label>
                        <input type="text"
                               name="kontak"
                               class="form-control @error('kontak') is-invalid @enderror"
                               value="{{ old('kontak', $profile->kontak ?? '') }}"
                               maxlength="15"
                               required
                               placeholder="Contoh: 08123456789">
                        @error('kontak')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- LOGO SEKOLAH --}}
                    <div class="col-12 mb-4">
                        <label class="form-label fw-bold">Logo Sekolah</label>

                        @if(!empty($profile->logo))
                            <div class="mb-3">
                                <img src="{{ asset('storage/' . $profile->logo) }}"
                                     alt="Logo Sekolah"
                                     class="img-thumbnail"
                                     style="width:120px;height:120px;object-fit:contain;"
                                     onerror="this.style.display='none'">
                            </div>
                        @endif

                        <input type="file"
                               name="logo"
                               class="form-control @error('logo') is-invalid @enderror"
                               accept=".jpg,.jpeg,.png,.webp">

                        <small class="text-muted d-block mt-1">
                            Kosongkan jika tidak ingin mengubah logo. Format JPG, PNG, WEBP. Maksimal 2 MB.
                        </small>

                        @error('logo')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- FOTO GEDUNG --}}
                    <div class="col-12 mb-4">
                        <label class="form-label fw-bold">Foto Gedung Sekolah</label>

                        @if(!empty($profile->foto_gedung))
                            <div class="mb-3">
                                <img src="{{ asset('storage/' . $profile->foto_gedung) }}"
                                     alt="Foto Gedung Sekolah"
                                     class="img-thumbnail"
                                     style="width:300px;height:180px;object-fit:cover;"
                                     onerror="this.style.display='none'">
                            </div>
                        @endif

                        <input type="file"
                               name="foto_gedung"
                               class="form-control @error('foto_gedung') is-invalid @enderror"
                               accept=".jpg,.jpeg,.png,.webp">

                        <small class="text-muted d-block mt-1">
                            Kosongkan jika tidak ingin mengubah foto gedung. Maksimal 2 MB.
                        </small>

                        @error('foto_gedung')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- FOTO KEPALA SEKOLAH --}}
                    <div class="col-12 mb-4">
                        <label class="form-label fw-bold">Foto Kepala Sekolah</label>

                        @if(!empty($profile->foto))
                            <div class="mb-3">
                                <img src="{{ asset('storage/' . $profile->foto) }}"
                                     alt="Foto Kepala Sekolah"
                                     class="img-thumbnail"
                                     style="width:150px;height:150px;object-fit:cover;"
                                     onerror="this.style.display='none'">
                            </div>
                        @endif

                        <input type="file"
                               name="foto"
                               class="form-control @error('foto') is-invalid @enderror"
                               accept=".jpg,.jpeg,.png,.webp">

                        <small class="text-muted d-block mt-1">
                            Kosongkan jika tidak ingin mengubah foto. Maksimal 2 MB.
                        </small>

                        @error('foto')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- ALAMAT --}}
                    <div class="col-12 mb-3">
                        <label class="form-label fw-bold">Alamat Sekolah</label>
                        <textarea name="alamat"
                                  class="form-control @error('alamat') is-invalid @enderror"
                                  rows="3"
                                  required
                                  placeholder="Masukkan alamat lengkap sekolah">{{ old('alamat', $profile->alamat ?? '') }}</textarea>
                        @error('alamat')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- DESKRIPSI --}}
                    <div class="col-12 mb-3">
                        <label class="form-label fw-bold">Deskripsi Sekolah</label>
                        <textarea name="deskripsi"
                                  class="form-control @error('deskripsi') is-invalid @enderror"
                                  rows="4"
                                  required
                                  placeholder="Masukkan deskripsi sekolah">{{ old('deskripsi', $profile->deskripsi ?? '') }}</textarea>
                        @error('deskripsi')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- VISI MISI --}}
                    <div class="col-12 mb-3">
                        <label class="form-label fw-bold">Visi & Misi</label>
                        <textarea name="visi_misi"
                                  class="form-control @error('visi_misi') is-invalid @enderror"
                                  rows="5"
                                  required
                                  placeholder="Masukkan visi dan misi sekolah">{{ old('visi_misi', $profile->visi_misi ?? '') }}</textarea>
                        @error('visi_misi')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                </div>

                {{-- TOMBOL --}}
                <div class="d-flex justify-content-end gap-2 mt-4">
                    <a href="{{ route('admin.profile.index') }}"
                       class="btn btn-light border">
                        Batal
                    </a>

                    <button type="submit" class="btn btn-primary px-4">
                        <i class="bi bi-save"></i> Simpan Profil
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection