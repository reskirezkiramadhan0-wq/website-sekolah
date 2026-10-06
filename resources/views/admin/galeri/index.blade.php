
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
                Galeri Sekolah
            </h5>

            <a href="{{ route('admin.galeri.create') }}"
               class="btn btn-primary btn-sm">
                <i class="fas fa-plus me-1"></i>
                Tambah Foto
            </a>
        </div>

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-bordered table-hover align-middle">

                    <thead class="table-light">
                        <tr>
                            <th width="60">No</th>
                            <th width="150">Foto</th>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                            <th width="150">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse($galeris as $galeri)

                            <tr>
                                <td>{{ $loop->iteration }}</td>

                                <td>
                                    <img src="{{ asset('storage/' . $galeri->foto) }}"
                                         width="120"
                                         height="80"
                                         class="rounded"
                                         style="object-fit: cover;">
                                </td>

                                <td>
                                    {{ $galeri->judul }}
                                </td>

                                <td>
                                    {{ $galeri->deskripsi ?? '-' }}
                                </td>

                                <td>

                                    <a href="{{ route('admin.galeri.edit', $galeri->id) }}"
                                       class="btn btn-warning btn-sm">
                                        <i class="fas fa-edit"></i>
                                    </a>

                                    <form action="{{ route('admin.galeri.destroy', $galeri->id) }}"
                                          method="POST"
                                          class="d-inline">

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"
                                                class="btn btn-danger btn-sm"
                                                onclick="return confirm('Yakin ingin menghapus foto ini?')">
                                            <i class="fas fa-trash"></i>
                                        </button>

                                    </form>

                                </td>
                            </tr>

                        @empty

                            <tr>
                                <td colspan="5"
                                    class="text-center text-muted py-4">
                                    Belum ada foto galeri.
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