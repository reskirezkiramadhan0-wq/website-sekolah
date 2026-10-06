@extends('template')

@section('content')

<div class="container px-4 py-4">

    <div class="card shadow-sm border-0">

        <div class="card-header bg-white py-3">
            <h5 class="m-0 font-weight-bold text-primary">
                Tambah Berita
            </h5>
        </div>

        <div class="card-body">

            <form action="{{ route('admin.berita.store') }}"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf

                <div class="mb-3">
                    <label class="form-label">
                        Judul Berita
                    </label>

                    <input type="text"
                           name="judul"
                           class="form-control"
                           value="{{ old('judul') }}"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Tanggal
                    </label>

                    <input type="date"
                           name="tanggal"
                           class="form-control"
                           value="{{ old('tanggal') }}"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Isi Berita
                    </label>

                    <textarea name="isi"
                              rows="7"
                              class="form-control"
                              required>{{ old('isi') }}</textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Gambar
                    </label>

                    <input type="file"
                           name="gambar"
                           class="form-control"
                           accept=".jpg,.jpeg,.png">
                </div>

                <div class="d-flex gap-2">

                    <a href="{{ route('admin.berita.index') }}"
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