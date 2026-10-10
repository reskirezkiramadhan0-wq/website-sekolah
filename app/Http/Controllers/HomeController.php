<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Guru;
use App\Models\Ekstrakurikuler;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        // Hitung total data langsung dari database
        $totalSiswa = Siswa::count();
        $totalGuru = Guru::count();
        $totalEkskul = Ekstrakurikuler::count();

        // Kirim angka ke tampilan depan
        return view('landing', compact('totalSiswa', 'totalGuru', 'totalEkskul'));
    }
}
