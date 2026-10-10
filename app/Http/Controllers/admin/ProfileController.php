<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProfileSekolah; // Sesuaikan dengan nama model Anda
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    // Menampilkan halaman profil sekolah
    public function index()
    {
        $profile = ProfileSekolah::first(); // Mengambil data profil pertama
        return view('admin.profile.index', compact('profile'));
    }

    // Menampilkan halaman form tambah profil
    public function create()
    {
        return view('admin.profile.create');
    }

    // Menyimpan data profil baru ke database
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama_sekolah'   => 'required|string|max:255',
            'kepala_sekolah' => 'nullable|string|max:255',
            'npsn'           => 'nullable|string|max:50',
            'tahun_berdiri'  => 'nullable|string|max:10',
            'alamat'         => 'nullable|string',
            'kontak'         => 'nullable|string|max:50',
            'deskripsi'      => 'nullable|string',
            'visi_misi'      => 'nullable|string',
            'logo'           => 'nullable|image|mimes:jpeg,png,jpg,svg|max:2048',
            'foto'           => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $data = $request->except(['logo', 'foto']);

        // Upload Logo jika ada
        if ($request->hasFile('logo')) {
            $data['logo'] = $request->file('logo')->store('profile_sekolah', 'public');
        }

        // Upload Foto jika ada
        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('profile_sekolah', 'public');
        }

        // Simpan ke database
        ProfileSekolah::create($data);

        return redirect()->route('admin.profile.index')->with('success', 'Profil sekolah berhasil ditambahkan!');
    }

    // Menampilkan halaman edit profil
    public function edit($id)
    {
        $profile = ProfileSekolah::findOrFail($id);
        return view('admin.profile.edit', compact('profile'));
    }

    // Memperbarui profil sekolah
    public function update(Request $request, $id)
    {
        $profile = ProfileSekolah::findOrFail($id);
        
        $data = $request->except(['logo', 'foto']);

        if ($request->hasFile('logo')) {
            if ($profile->logo) {
                Storage::disk('public')->delete($profile->logo);
            }
            $data['logo'] = $request->file('logo')->store('profile_sekolah', 'public');
        }

        if ($request->hasFile('foto')) {
            if ($profile->foto) {
                Storage::disk('public')->delete($profile->foto);
            }
            $data['foto'] = $request->file('foto')->store('profile_sekolah', 'public');
        }

        $profile->update($data);

        return redirect()->route('admin.profile.index')->with('success', 'Profil sekolah berhasil diperbarui!');
    }
}