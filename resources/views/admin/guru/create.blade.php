@extends('template')

@section('title', 'Tambah Data Guru')

@section('content')

<div class="container">

    <div class="card shadow-sm">
        <div class="card-header">
            <h5 class="mb-0">Tambah Data Guru</h5>
        </div>

        <div class="card-body">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.guru.store') }}"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf

                <div class="mb-3">
                    <label class="form-label">NIP</label>
                    <input type="text"
                           name="nip"
                           class="form-control"
                           value="{{ old('nip') }}"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Nama Guru</label>
                    <input type="text"
                           name="nama_guru"
                           class="form-control"
                           value="{{ old('nama_guru') }}"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Jenis Kelamin</label>

                    <select name="jenis_kelamin"
                            class="form-select"
                            required>

                        <option value="">-- Pilih Jenis Kelamin --</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>

                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Mata Pelajaran</label>

                    <input type="text"
                           name="mata_pelajaran"
                           class="form-control"
                           value="{{ old('mata_pelajaran') }}"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Foto Guru</label>

                    <input type="file"
                           name="foto"
                           class="form-control"
                           accept=".jpg,.jpeg,.png">
                </div>

                <div class="d-flex gap-2">

                    <button type="submit" class="btn btn-primary">
                        Simpan
                    </button>

                    <a href="{{ route('admin.guru.index') }}"
                       class="btn btn-secondary">
                        Kembali
                    </a>

                </div>

            </form>

        </div>
    </div>

</div>

@endsection