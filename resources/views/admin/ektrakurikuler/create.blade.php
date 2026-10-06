@extends('template')

@section('content')

<div class="container px-4 py-4">

    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card shadow-sm border-0">

        <div class="card-header bg-white py-3">
            <h5 class="m-0 font-weight-bold text-primary">
                Tambah Ekstrakurikuler
            </h5>
        </div>

        <div class="card-body">

            <form action="{{ route('admin.ekstrakurikuler.store') }}"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf

                <div class="mb-3">
                    <label class="form-label">Nama Ektrakurikuler</label>
                    <input type="text"
                           name="nama_eskul"
                           class="form-control"
                           value="{{ old('nama_eskul') }}"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Pembina</label>
                    <input type="text"
                           name="pembina"
                           class="form-control"
                           value="{{ old('pembina') }}"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Jadwal Latihan</label>
                    <input type="text"
                           name="jadwal_latihan"
                           class="form-control"
                           placeholder="Contoh: Senin, 15:00 - 17:00"
                           value="{{ old('jadwal_latihan') }}"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Deskripsi</label>
                    <textarea name="deskripsi"
                              rows="4"
                              class="form-control"
                              required>{{ old('deskripsi') }}</textarea>
                </div>

                <div class="mb-4">
                    <label class="form-label">Gambar</label>
                    <input type="file"
                           name="gambar"
                           class="form-control"
                           accept=".jpg,.jpeg,.png">

                    <small class="text-muted">
                        Format JPG, JPEG, PNG. Maksimal 2 MB.
                    </small>
                </div>

                <a href="{{ route('admin.ekstrakurikuler.index') }}"
                   class="btn btn-secondary">
                    Kembali
                </a>

                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-save"></i>
                    Simpan
                </button>

            </form>

        </div>

    </div>

</div>

@endsection