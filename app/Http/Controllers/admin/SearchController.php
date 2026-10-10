<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Guru;
use App\Models\Siswa;
use App\Models\Berita;
use App\Models\Ekstrakurikuler;
use App\Models\Galery;
use App\Models\ProfileSekolah;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->input('q');

        if (!$keyword) {
            return redirect()->back();
        }

        // Cari data berdasarkan kata kunci
        $guru = Guru::where('nama_guru', 'LIKE', "%{$keyword}%")->get();
        $siswa = Siswa::where('nama', 'LIKE', "%{$keyword}%")->get();
        $berita = Berita::where('judul', 'LIKE', "%{$keyword}%")->get();
        $eskul = Ekstrakurikuler::where('nama_eskul', 'LIKE', "%{$keyword}%")->get();
        
        $galeri  = Galery::where('judul', 'LIKE', "%{$keyword}%")
                    ->orWhere('keterangan', 'LIKE', "%{$keyword}%")
                    ->get();


        return view('admin.search.search-result', compact('keyword', 'guru', 'siswa', 'berita', 'eskul', 'galeri'));
    }
}
