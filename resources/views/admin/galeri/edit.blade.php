
@extends('template')

@section('content')

<div class="container px-4 py-4">

    @if($errors->any())
        <div class="alert alert-danger">
            <strong>Terjadi kesalahan:</strong>

            <ul class="mb-0 mt-2">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card shadow-sm border-0">

        <div class="card-header bg-white py-3">
            <h5 class="m-0 font-weight-bold text-primary">
                Edit Foto Galeri
            </h5>
        </div>

        <div class="card-body">

            <form action="{{ route('admin.galeri.update', $galeri->id) }}"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">
                        Judul
                    </label>

                    <input type="text"
                           name="judul"
                           class="form-control"
                           value="{{ old('judul', $galeri->judul) }}"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Deskripsi
                    </label>

                    <textarea name="deskripsi"
                              rows="4"
                              class="form-control">{{ old('deskripsi', $galeri->deskripsi) }}</textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Foto Saat Ini
                    </label>

                    <div class="mt-2">
                        <img src="{{ asset('storage/' . $galeri->foto) }}"
                             width="200"
                             height="130"
                             class="rounded"
                             style="object-fit: cover;">
                    </div>
                </div>

                <div class="mb-4">
                    <label class="form-label">
                        Ganti Foto
                    </label>

                    <input type="file"
                           name="foto"
                           class="form-control"
                           accept=".jpg,.jpeg,.png">

                    <small class="text-muted">
                        Kosongkan jika tidak ingin mengganti foto.
                        Maksimal 2 MB.
                    </small>
                </div>

                <div class="d-flex gap-2">

                    <a href="{{ route('admin.galeri.index') }}"
                       class="btn btn-secondary">
                        Kembali
                    </a>

                    <button type="submit"
                            class="btn btn-primary">
                        Update
                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection
