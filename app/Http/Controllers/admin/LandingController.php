<?php
namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Guru;
use App\Models\Ekstrakurikuler; // sesuaikan nama model ekstrakurikuler kamu
use App\Models\Berita; // sesuaikan nama model berita kamu //
use App\Models\Galery;

class LandingController extends Controller
{
    public function index()
    {
        $totalSiswa = Siswa::count();
        $totalGuru = Guru::count();
        $totalEskul = Ekstrakurikuler::count();
        $totalBerita = Berita::count();
        $totalGaleri = Galery::count();

        $beritas = Berita::latest('tanggal')->take(3)->get();
        $galeries = Galery::latest()->get();

        return view('landing', compact('totalSiswa', 'totalGuru', 'totalEskul', 'totalBerita', 'totalGaleri', 'beritas', 'galeries'));
    }
}
