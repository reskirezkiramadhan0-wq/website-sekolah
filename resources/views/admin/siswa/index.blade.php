@extends('template')

@section('title', 'Data Siswa')

@section('content')

<div class="container">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h3 class="fw-bold mb-1">Data Siswa</h3>
            <p class="text-muted mb-0">Kelola data siswa sekolah</p>
        </div>

        <a href="{{ route('admin.siswa.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-lg"></i>
            Tambah Siswa
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

                <table class="table table-hover align-middle">

                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIS</th>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Jenis Kelamin</th>
                            <th>No. HP</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>

                    @forelse($siswas as $siswa)

                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $siswa->nis }}</td>
                            <td>{{ $siswa->nama }}</td>
                            <td>{{ $siswa->kelas }}</td>
                            <td>{{ $siswa->jenis_kelamin }}</td>
                            <td>{{ $siswa->no_hp ?? '-' }}</td>

                            <td>
                                <a href="{{ route('admin.siswa.edit', $siswa->id) }}"
                                   class="btn btn-sm btn-warning">
                                    Edit
                                </a>

                                <form action="{{ route('admin.siswa.destroy', $siswa->id) }}"
                                      method="POST"
                                      class="d-inline">

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"
                                            class="btn btn-sm btn-danger"
                                            onclick="return confirm('Yakin ingin menghapus data ini?')">
                                        Hapus
                                    </button>

                                </form>
                            </td>
                        </tr>

                    @empty

                        <tr>
                            <td colspan="7" class="text-center py-4">
                                Belum ada data siswa.
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