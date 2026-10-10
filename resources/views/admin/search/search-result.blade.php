@extends('template')

@section('content')
<div class="container px-4 py-4">
    <h4 class="mb-4">Hasil Pencarian untuk: "<strong>{{ $keyword }}</strong>"</h4>

    <!-- Data Guru -->
    <div class="card shadow-sm border-0 mb-4">
        <div class="card-header bg-white font-weight-bold">Data Guru ({{ $guru->count() }})</div>
        <div class="card-body">
            @forelse($guru as $item)
                <div class="d-flex justify-content-between align-items-center border-bottom py-2">
                    <div>
                        <strong>{{ $item->nama_guru }}</strong>
                    </div>
                    @if(Route::has('admin.guru.edit'))
                        <a href="{{ route('admin.guru.edit', $item->id) }}" class="btn btn-sm btn-outline-primary">Lihat Detail</a>
                    @endif
                </div>
            @empty
                <p class="text-muted m-0">Tidak ada data guru yang cocok.</p>
            @endforelse
        </div>
    </div>

    <!-- Data Siswa -->
    <div class="card shadow-sm border-0 mb-4">
        <div class="card-header bg-white font-weight-bold">Data Siswa ({{ $siswa->count() }})</div>
        <div class="card-body">
            @forelse($siswa as $item)
                <div class="d-flex justify-content-between align-items-center border-bottom py-2">
                    <div>
                        <strong>{{ $item->nama }}</strong>
                    </div>
                    @if(Route::has('admin.siswa.edit'))
                        <a href="{{ route('admin.siswa.edit', $item->id) }}" class="btn btn-sm btn-outline-primary">Lihat Detail</a>
                    @endif
                </div>
            @empty
                <p class="text-muted m-0">Tidak ada data siswa yang cocok.</p>
            @endforelse
        </div>
    </div>

    <!-- Data Berita -->
    <div class="card shadow-sm border-0 mb-4">
        <div class="card-header bg-white font-weight-bold">Berita ({{ $berita->count() }})</div>
        <div class="card-body">
            @forelse($berita as $item)
                <div class="d-flex justify-content-between align-items-center border-bottom py-2">
                    <div>
                        <strong>{{ $item->judul }}</strong>
                    </div>
                    @if(Route::has('admin.berita.edit'))
                        <a href="{{ route('admin.berita.edit', $item->id) }}" class="btn btn-sm btn-outline-primary">Lihat Detail</a>
                    @endif
                </div>
            @empty
                <p class="text-muted m-0">Tidak ada berita yang cocok.</p>
            @endforelse
        </div>
    </div>

    <!-- Data Ekstrakurikuler -->
    <div class="card shadow-sm border-0 mb-4">
        <div class="card-header bg-white font-weight-bold">Ekstrakurikuler ({{ $eskul->count() }})</div>
        <div class="card-body">
            @forelse($eskul as $item)
                <div class="d-flex justify-content-between align-items-center border-bottom py-2">
                    <div>
                        <strong>
                            {{ $item->nama_ekstrakurikuler ?? $item->nama_ekstra ?? $item->nama_eskul ?? $item->nama ?? $item->judul }}
                        </strong>
                    </div>
                    @if(Route::has('admin.ekstrakurikuler.edit'))
                        <a href="{{ route('admin.ekstrakurikuler.edit', $item->id) }}" class="btn btn-sm btn-outline-primary">Lihat Detail</a>
                    @elseif(Route::has('admin.ekstra.edit'))
                        <a href="{{ route('admin.ekstra.edit', $item->id) }}" class="btn btn-sm btn-outline-primary">Lihat Detail</a>
                    @endif
                </div>
            @empty
                <p class="text-muted m-0">Tidak ada ekstrakurikuler yang cocok.</p>
            @endforelse
        </div>
    </div>

    <div class="card shadow-sm border-0 mb-4">
            <div class="card-header bg-white font-weight-bold">Galeri ({{ $galeri->count() }})</div>
            <div class="card-body">
                @forelse($galeri as $item)
                    <div class="d-flex justify-content-between align-items-center border-bottom py-2">
                        <div>
                            <strong>{{ $item->judul ?? $item->keterangan ?? 'Foto Galeri' }}</strong>
                        </div>
                        @if(Route::has('admin.galeri.index'))
                            <a href="{{ route('admin.galeri.index') }}" class="btn btn-sm btn-outline-primary">Lihat Detail</a>
                        @endif
                    </div>
                @empty
                    <p class="text-muted m-0">Tidak ada galeri yang cocok.</p>
                @endforelse
            </div>
        </div>
    </div>
</div>
@endsection