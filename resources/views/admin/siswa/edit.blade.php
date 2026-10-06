@extends('template')

@section('title', 'Edit Siswa')

@section('content')

<div class="container">

    <h3 class="fw-bold mb-4">Edit Data Siswa</h3>

    <div class="card border-0 shadow-sm">
        <div class="card-body">

            <form action="{{ route('admin.siswa.update', $siswa->id) }}"
                  method="POST">

                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">NIS</label>
                    <input type="text"
                           name="nis"
                           class="form-control"
                           value="{{ old('nis', $siswa->nis) }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Nama Siswa</label>
                    <input type="text"
                           name="nama"
                           class="form-control"
                           value="{{ old('nama', $siswa->nama) }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Kelas</label>
                    <input type="text"
                           name="kelas"
                           class="form-control"
                           value="{{ old('kelas', $siswa->kelas) }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Jenis Kelamin</label>

                    <select name="jenis_kelamin" class="form-select">
                        <option value="Laki-laki"
                            {{ $siswa->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>
                            Laki-laki
                        </option>

                        <option value="Perempuan"
                            {{ $siswa->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>
                            Perempuan
                        </option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">No. HP</label>
                    <input type="text"
                           name="no_hp"
                           class="form-control"
                           value="{{ old('no_hp', $siswa->no_hp) }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Alamat</label>

                    <textarea name="alamat"
                              class="form-control"
                              rows="3">{{ old('alamat', $siswa->alamat) }}</textarea>
                </div>

                <a href="{{ route('admin.siswa.index') }}"
                   class="btn btn-secondary">
                    Kembali
                </a>

                <button type="submit" class="btn btn-primary">
                    Update
                </button>

            </form>

        </div>
    </div>

</div>

@endsection