@extends('template')

@section('title', 'Edit Guru')

@section('content')

<div class="container">

    <h3 class="fw-bold mb-4">Edit Data Guru</h3>

    <div class="card border-0 shadow-sm">
        <div class="card-body">

            @if ($errors->any())
                <div class="alert alert-danger mb-3">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.guru.update', $guru->id) }}"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf
                @method('PUT')

                @if($guru->foto)
                    <div class="mb-3">
                        <label class="form-label d-block">
                            Foto Saat Ini
                        </label>

                        <img src="{{ asset('storage/' . $guru->foto) }}"
                             width="100"
                             height="100"
                             style="object-fit:cover;border-radius:50%;">
                    </div>
                @endif

                <div class="mb-3">
                    <label class="form-label">Ganti Foto</label>

                    <input type="file"
                           name="foto"
                           class="form-control"
                           accept=".jpg,.jpeg,.png">

                    <small class="text-muted">
                        JPG, JPEG, PNG. Maksimal 2 MB.
                    </small>
                </div>

                <div class="mb-3">
                    <label class="form-label">NIP</label>

                    <input type="text"
                           name="nip"
                           class="form-control"
                           value="{{ old('nip', $guru->nip) }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Nama Guru</label>

                    <input type="text"
                           name="nama_guru"
                           class="form-control"
                           value="{{ old('nama_guru', $guru->nama_guru) }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Jenis Kelamin</label>

                    <select name="jenis_kelamin" class="form-select">

                        <option value="Laki-laki"
                            {{ old('jenis_kelamin', $guru->jenis_kelamin) == 'Laki-laki' ? 'selected' : '' }}>
                            Laki-laki
                        </option>

                        <option value="Perempuan"
                            {{ old('jenis_kelamin', $guru->jenis_kelamin) == 'Perempuan' ? 'selected' : '' }}>
                            Perempuan
                        </option>

                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Mata Pelajaran</label>

                    <input type="text"
                           name="mata_pelajaran"
                           class="form-control"
                           value="{{ old('mata_pelajaran', $guru->mata_pelajaran) }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">No. HP</label>

                    <input type="text"
                           name="no_hp"
                           class="form-control"
                           value="{{ old('no_hp', $guru->no_hp) }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Alamat</label>

                    <textarea name="alamat"
                              class="form-control"
                              rows="3">{{ old('alamat', $guru->alamat) }}</textarea>
                </div>

                <a href="{{ route('admin.guru.index') }}"
                   class="btn btn-secondary">
                    Kembali
                </a>

                <button type="submit"
                        class="btn btn-primary">
                    Update
                </button>

            </form>

        </div>
    </div>

</div>

@endsection