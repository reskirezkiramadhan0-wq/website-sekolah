
@extends('template')

@section('content')

<div class="container px-4 py-4">

    <div class="card shadow-sm border-0">

        <div class="card-header bg-white py-3">
            <h5 class="m-0 font-weight-bold text-primary">
                Tambah Foto Galeri
            </h5>
        </div>

        <div class="card-body">

            <form action="{{ route('admin.galeri.store') }}"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf

                <div class="mb-3">
                    <label class="form-label">
                        Judul
                    </label>

                    <input type="text"
                           name="judul"
                           class="form-control"
                           value="{{ old('judul') }}"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Deskripsi
                    </label>

                    <textarea name="deskripsi"
                              rows="4"
                              class="form-control">{{ old('deskripsi') }}</textarea>
                </div>

                <div class="mb-4">
                    <label class="form-label">
                        Foto
                    </label>

                    <input type="file"
                           name="foto"
                           class="form-control"
                           accept=".jpg,.jpeg,.png"
                           required>

                    <small class="text-muted">
                        Format JPG, JPEG, PNG. Maksimal 2 MB.
                    </small>
                </div>

                <div class="d-flex gap-2">

                    <a href="{{ route('admin.galeri.index') }}"
                       class="btn btn-secondary">
                        Kembali
                    </a>

                    <button type="submit"
                            class="btn btn-primary">
                        Simpan
                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection
