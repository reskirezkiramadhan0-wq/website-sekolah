@extends('template')

@section('title', 'Tambah Siswa')

@section('content')

<div class="container">

    <h3 class="fw-bold mb-4">Tambah Data Siswa</h3>

    <div class="card border-0 shadow-sm">
        <div class="card-body">

            <form action="{{ route('admin.siswa.store') }}" method="POST">

                @csrf

                <div class="mb-3">
                    <label class="form-label">NIS</label>
                    <input type="text"
                           name="nis"
                           class="form-control @error('nis') is-invalid @enderror"
                           value="{{ old('nis') }}">

                    @error('nis')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Nama Siswa</label>
                    <input type="text"
                           name="nama"
                           class="form-control @error('nama') is-invalid @enderror"
                           value="{{ old('nama') }}">

                    @error('nama')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Kelas</label>
                    <input type="text"
                           name="kelas"
                           class="form-control"
                           value="{{ old('kelas') }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Jenis Kelamin</label>

                    <select name="jenis_kelamin" class="form-select">
                        <option value="">-- Pilih --</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">No. HP</label>
                    <input type="text"
                           name="no_hp"
                           class="form-control"
                           value="{{ old('no_hp') }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Alamat</label>
                    <textarea name="alamat"
                              class="form-control"
                              rows="3">{{ old('alamat') }}</textarea>
                </div>

                <a href="{{ route('admin.siswa.index') }}"
                   class="btn btn-secondary">
                    Kembali
                </a>

                <button type="submit" class="btn btn-primary">
                    Simpan
                </button>

            </form>

        </div>
    </div>

</div>

@endsection