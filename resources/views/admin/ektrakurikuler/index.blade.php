@extends('template')

@section('content')
<div class="container px-4 py-4">
    <div class="card shadow-sm border-0">
        <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
            <h5 class="m-0 font-weight-bold text-primary">Daftar Ekstrakurikuler</h5>
            <a href="{{ route('admin.ekstrakurikuler.create') }}" class="btn btn-primary btn-sm px-3">
                <i class="fas fa-plus me-1"></i> Tambah Ekstrakurikuler
            </a>
        </div>
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle">
                    <thead class="table-light">
                        <tr>
                            <th width="5%" class="text-center">No</th>
                            <th>Gambar</th>
                            <th>Nama Ekstrakurikuler</th>
                            <th>Pembina</th>
                            <th>Jadwal Latihan</th>
                            <th>Deskripsi</th>
                            <th width="15%" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($ekstrakurikulers as $item)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td class="text-center">
                                    @if($item->gambar)
                                        <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->nama_eskul }}" width="80" class="img-thumbnail">
                                    @else
                                        <span class="badge bg-secondary">Tidak ada gambar</span>
                                    @endif
                                </td>
                                <td>{{ $item->nama_eskul }}</td>
                                <td>{{ $item->pembina }}</td>
                                <td>{{ $item->jadwal_latihan }}</td>
                                <td>{{ $item->deskripsi }}</td>
                                <td class="text-center">
                                    <a href="{{ route('admin.ekstrakurikuler.edit', $item->id) }}" class="btn btn-warning btn-sm">
                                        Edit
                                    </a>
                                    <form action="{{ route('admin.ekstrakurikuler.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center text-muted py-4">Belum ada data ekstrakurikuler.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection