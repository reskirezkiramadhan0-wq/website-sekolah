@extends('template')

@section('content')

<div class="container px-4 py-4">

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <div class="card shadow-sm border-0">

        <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">

            <h5 class="m-0 font-weight-bold text-primary">
                Data Berita
            </h5>

            <a href="{{ route('admin.berita.create') }}"
               class="btn btn-primary btn-sm">
                <i class="bi bi-plus-lg"></i>
                Tambah Berita
            </a>

        </div>

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-bordered table-hover align-middle">

                    <thead class="table-light">
                        <tr>
                            <th width="60">No</th>
                            <th width="120">Gambar</th>
                            <th>Judul</th>
                            <th>Tanggal</th>
                            <th width="150">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse($beritas as $berita)

                            <tr>

                                <td>{{ $loop->iteration }}</td>

                                <td>
                                    @if($berita->gambar)
                                        <img src="{{ asset('storage/' . $berita->gambar) }}"
                                             width="100"
                                             height="70"
                                             style="object-fit: cover;"
                                             class="rounded">
                                    @else
                                        <span class="text-muted">
                                            Tidak ada
                                        </span>
                                    @endif
                                </td>

                                <td>
                                    {{ $berita->judul }}
                                </td>

                                <td>
                                    {{ \Carbon\Carbon::parse($berita->tanggal)->format('d-m-Y') }}
                                </td>

                                <td>

                                    <a href="{{ route('admin.berita.edit', $berita->id) }}"
                                       class="btn btn-warning btn-sm"
                                       title="Edit">
                                        <i class="bi bi-pencil"></i>
                                    </a>

                                    <form action="{{ route('admin.berita.destroy', $berita->id) }}"
                                          method="POST"
                                          class="d-inline">

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"
                                                class="btn btn-danger btn-sm"
                                                title="Hapus"
                                                onclick="return confirm('Yakin ingin menghapus berita ini?')">
                                            <i class="bi bi-trash"></i>
                                        </button>

                                    </form>

                                </td>

                            </tr>

                        @empty

                            <tr>
                                <td colspan="5"
                                    class="text-center text-muted py-4">
                                    Belum ada data berita.
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