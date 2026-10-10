@extends('template')

@section('content')

<div class="container px-4 py-4">

<div class="card shadow-sm border-0">

    
    <div class="card-header bg-white py-3">
        <h5 class="m-0 fw-bold text-primary">
            <i class="fas fa-images me-2"></i>
            Tambah Foto Galeri
        </h5>
    </div>

    <div class="card-body">

        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show">
                <strong>Terjadi kesalahan!</strong>

                <ul class="mb-0 mt-2">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>

                <button type="button"
                        class="btn-close"
                        data-bs-dismiss="alert">
                </button>
            </div>
        @endif

        <form action="{{ route('admin.galeri.store') }}"
              method="POST"
              enctype="multipart/form-data">

            @csrf

          
            <div class="mb-3">
                <label for="judul" class="form-label fw-semibold">
                    Judul
                </label>

                <input type="text"
                       id="judul"
                       name="judul"
                       class="form-control @error('judul') is-invalid @enderror"
                       value="{{ old('judul') }}"
                       placeholder="Masukkan judul foto"
                       required>

                @error('judul')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="keterangan" class="form-label fw-semibold">
                    Keterangan
                </label>

                <textarea id="keterangan"
                          name="keterangan"
                          rows="4"
                          class="form-control @error('keterangan') is-invalid @enderror"
                          placeholder="Masukkan keterangan foto"
                          required>{{ old('keterangan') }}</textarea>

                @error('keterangan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="foto" class="form-label fw-semibold">
                    Foto
                </label>

                <input type="file"
                       id="foto"
                       name="foto"
                       class="form-control @error('foto') is-invalid @enderror"
                       accept=".jpg,.jpeg,.png"
                       required>

                <small class="text-muted">
                    Format JPG, JPEG, atau PNG. Maksimal 2 MB.
                </small>

                @error('foto')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="kategori" class="form-label fw-semibold">
                    Kategori
                </label>

                <select id="kategori"
                        name="kategori"
                        class="form-select @error('kategori') is-invalid @enderror"
                        required>

                    <option value="">-- Pilih Kategori --</option>

                    <option value="foto"
                        {{ old('kategori') == 'foto' ? 'selected' : '' }}>
                        Gambar
                    </option>

                </select>

                @error('kategori')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="tanggal" class="form-label fw-semibold">
                    Tanggal
                </label>

                <input type="date"
                       id="tanggal"
                       name="tanggal"
                       class="form-control @error('tanggal') is-invalid @enderror"
                       value="{{ old('tanggal', date('Y-m-d')) }}"
                       required>

                @error('tanggal')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="d-flex gap-2">

                <a href="{{ route('admin.galeri.index') }}"
                   class="btn btn-secondary">
                    <i class="fas fa-arrow-left me-1"></i>
                    Kembali
                </a>

                <button type="submit"
                        class="btn btn-primary">
                    <i class="fas fa-save me-1"></i>
                    Simpan
                </button>

            </div>

        </form>

    </div>

</div>

</div>

@endsection
