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
                Edit Ekstrakurikuler
            </h5>
        </div>

        <div class="card-body">

            <form action="{{ route('admin.ekstrakurikuler.update', $ekstrakurikuler->id) }}"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Nama Ekstrakurikuler</label>
                    <input type="text"
                           name="nama_eskul"
                           class="form-control"
                           value="{{ old('nama_eskul', $ekstrakurikuler->nama_eskul) }}"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Pembina</label>
                    <input type="text"
                           name="pembina"
                           class="form-control"
                           value="{{ old('pembina', $ekstrakurikuler->pembina) }}"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Jadwal Latihan</label>
                    <input type="text"
                           name="jadwal_latihan"
                           class="form-control"
                           value="{{ old('jadwal_latihan', $ekstrakurikuler->jadwal_latihan) }}"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Deskripsi</label>
                    <textarea name="deskripsi"
                              rows="4"
                              class="form-control"
                              required>{{ old('deskripsi', $ekstrakurikuler->deskripsi) }}</textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Gambar Saat Ini</label>
                    <br>

                    @if($ekstrakurikuler->gambar)
                        <img src="{{ asset('storage/' . $ekstrakurikuler->gambar) }}"
                             width="150"
                             height="100"
                             style="object-fit: cover;"
                             class="rounded mb-2">
                    @else
                        <p class="text-muted">Tidak ada gambar.</p>
                    @endif
                </div>

                <div class="mb-4">
                    <label class="form-label">Ganti Gambar</label>
                    <input type="file"
                           name="gambar"
                           class="form-control"
                           accept=".jpg,.jpeg,.png">

                    <small class="text-muted">
                        Kosongkan jika tidak ingin mengganti gambar.
                    </small>
                </div>

                <a href="{{ route('admin.ekstrakurikuler.index') }}"
                   class="btn btn-secondary">
                    Kembali
                </a>

                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-save"></i>
                    Simpan Perubahan
                </button>

            </form>

        </div>

    </div>

</div>

@endsection