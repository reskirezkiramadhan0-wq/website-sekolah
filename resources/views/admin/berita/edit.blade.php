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
            Edit Berita
        </h5>
    </div>

    <div class="card-body">

        <form action="{{ route('admin.berita.update', $berita->id) }}"
              method="POST"
              enctype="multipart/form-data">

            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">
                    Judul Berita
                </label>

                <input type="text"
                       name="judul"
                       class="form-control"
                       value="{{ old('judul', $berita->judul) }}"
                       required>
            </div>

            <div class="mb-3">
                <label class="form-label">
                    Tanggal
                </label>

                <input type="date"
                       name="tanggal"
                       class="form-control"
                       value="{{ old('tanggal', $berita->tanggal) }}"
                       required>
            </div>

            <div class="mb-3">
                <label class="form-label">
                    Isi Berita
                </label>

                <textarea name="isi"
                          rows="8"
                          class="form-control"
                          required>{{ old('isi', $berita->isi) }}</textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">
                    Gambar Saat Ini
                </label>

                <div class="mb-2">
                    @if($berita->gambar)
                        <img src="{{ asset('storage/' . $berita->gambar) }}"
                             alt="Gambar Berita"
                             width="200"
                             height="130"
                             class="rounded"
                             style="object-fit: cover;">
                    @else
                        <p class="text-muted">
                            Belum ada gambar.
                        </p>
                    @endif
                </div>
            </div>

            <div class="mb-4">
                <label class="form-label">
                    Ganti Gambar
                </label>

                <input type="file"
                       name="gambar"
                       class="form-control"
                       accept=".jpg,.jpeg,.png">

                <small class="text-muted">
                    Kosongkan jika tidak ingin mengganti gambar.
                    Maksimal 2 MB.
                </small>
            </div>

            <div class="d-flex gap-2">

                <a href="{{ route('admin.berita.index') }}"
                   class="btn btn-secondary">
                    Kembali
                </a>

                <button type="submit"
                        class="btn btn-primary">
                    Update Berita
                </button>

            </div>

        </form>

    </div>

</div>
</div>

@endsection
