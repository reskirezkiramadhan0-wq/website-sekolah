<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Siswa;
use App\Models\Guru;
use App\Models\User;
use App\Models\Berita;
use App\Models\Ekstrakurikuler;
use App\Models\Galery;


class DashboardController extends Controller
{
    //
    public function index()
    {
         $totalGuru = Guru::count();
        $totalSiswa = Siswa::count();
        $totalBerita = Berita::count();
        $totalEskul = Ekstrakurikuler::count();

        // Tiga berita terbaru
        $beritaTerbaru = Berita::latest()
            ->take(3)
            ->get();

        // Tiga foto galeri terbaru
        $galeriTerbaru = Galery::latest()
            ->take(3)
            ->get();

        // Kirim seluruh data ke halaman dashboard
        return view('admin.dashboard.index', compact(
            'totalGuru',
            'totalSiswa',
            'totalBerita',
            'totalEskul',
            'beritaTerbaru',
            'galeriTerbaru'
        ));
    }
}
