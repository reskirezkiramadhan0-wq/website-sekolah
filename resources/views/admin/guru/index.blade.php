@extends('template')

@section('title', 'Data Guru')

@section('content')

<div class="container">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold mb-1">Data Guru</h2>
            <p class="text-muted mb-0">Kelola data guru sekolah</p>
        </div>

        <a href="{{ route('admin.guru.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-lg"></i> Tambah Guru
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card border-0 shadow-sm">
        <div class="card-body">

            <div class="table-responsive">
                <table class="table align-middle">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Foto</th>
                            <th>NIP</th>
                            <th>Nama Guru</th>
                            <th>Jenis Kelamin</th>
                            <th>Mata Pelajaran</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse($gurus as $guru)

                        <tr>
                            <td>{{ $loop->iteration }}</td>

                            <td>
                                @if($guru->foto)
                                    <img src="{{ asset('storage/' . $guru->foto) }}"
                                         width="60"
                                         height="60"
                                         style="object-fit: cover; border-radius: 8px;">
                                @else
                                    <span class="text-muted">Tidak ada</span>
                                @endif
                            </td>

                            <td>{{ $guru->nip }}</td>

                            <td>{{ $guru->nama_guru }}</td>

                            <td>
                                <span class="badge bg-info-subtle text-info">
                                    {{ $guru->jenis_kelamin }}
                                </span>
                            </td>

                            <td>
                                <span class="badge bg-primary-subtle text-primary">
                                    <i class="bi bi-book"></i>
                                    {{ $guru->mapel }}
                                </span>
                            </td>

                            <td>
                                <a href="{{ route('admin.guru.edit', $guru->id) }}"
                                   class="btn btn-warning btn-sm">
                                    <i class="bi bi-pencil"></i>
                                    Edit
                                </a>

                                <form action="{{ route('admin.guru.destroy', $guru->id) }}"
                                      method="POST"
                                      class="d-inline">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"
                                            class="btn btn-danger btn-sm"
                                            onclick="return confirm('Yakin ingin menghapus data guru ini?')">
                                        <i class="bi bi-trash"></i>
                                        Hapus
                                    </button>
                                </form>
                            </td>

                        </tr>

                        @empty

                        <tr>
                            <td colspan="7" class="text-center text-muted py-4">
                                Belum ada data guru.
                            </td>
                        </tr>

                        @endforelse

                    </tbody>
                </table>
            </div>

        </div>
    </div>

</div>

@endsection