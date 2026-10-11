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
        $profile = ProfileSekolah::first();

        return view('admin.profile.index', compact('profile'));
    }

    /**
     * Menampilkan form tambah profil sekolah.
     */
    public function create()
    {
        return view('admin.profile.create');
    }

    /**
     * Menyimpan profil sekolah baru.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama_sekolah'   => 'required|string|max:255',
            'kepala_sekolah' => 'nullable|string|max:255',
            'npsn'           => 'nullable|string|max:50',
            'tahun_berdiri'  => 'nullable|string|max:10',
            'alamat'         => 'nullable|string',
            'kontak'         => 'nullable|string|max:50',
            'deskripsi'      => 'nullable|string',
            'visi_misi'      => 'nullable|string',

            'logo' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'foto_gedung' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        // Upload logo sekolah.
        if ($request->hasFile('logo')) {
            $data['logo'] = $request->file('logo')
                ->store('profile_sekolah', 'public');
        }

        // Upload foto kepala sekolah.
        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')
                ->store('profile_sekolah', 'public');
        }

        // Upload foto gedung sekolah.
        if ($request->hasFile('foto_gedung')) {
            $data['foto_gedung'] = $request->file('foto_gedung')
                ->store('profile_sekolah', 'public');
        }

        ProfileSekolah::create($data);

        return redirect()
            ->route('admin.profile.index')
            ->with('success', 'Profil sekolah berhasil ditambahkan!');
    }

    /**
     * Menampilkan form edit profil sekolah.
     */
    public function edit($id)
    {
        $profile = ProfileSekolah::findOrFail($id);

        return view('admin.profile.edit', compact('profile'));
    }

    /**
     * Memperbarui profil sekolah.
     */
    public function update(Request $request, $id)
    {
        $profile = ProfileSekolah::findOrFail($id);

        $data = $request->validate([
            'nama_sekolah'   => 'required|string|max:255',
            'kepala_sekolah' => 'nullable|string|max:255',
            'npsn'           => 'nullable|string|max:50',
            'tahun_berdiri'  => 'nullable|string|max:10',
            'alamat'         => 'nullable|string',
            'kontak'         => 'nullable|string|max:50',
            'deskripsi'      => 'nullable|string',
            'visi_misi'      => 'nullable|string',

            'logo' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'foto_gedung' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        // Memperbarui logo sekolah.
        if ($request->hasFile('logo')) {
            if ($profile->logo) {
                Storage::disk('public')->delete($profile->logo);
            }

            $data['logo'] = $request->file('logo')
                ->store('profile_sekolah', 'public');
        }

        // Memperbarui foto kepala sekolah.
        if ($request->hasFile('foto')) {
            if ($profile->foto) {
                Storage::disk('public')->delete($profile->foto);
            }

            $data['foto'] = $request->file('foto')
                ->store('profile_sekolah', 'public');
        }

        // Memperbarui foto gedung sekolah.
        if ($request->hasFile('foto_gedung')) {
            if ($profile->foto_gedung) {
                Storage::disk('public')->delete(
                    $profile->foto_gedung
                );
            }

            $data['foto_gedung'] = $request->file('foto_gedung')
                ->store('profile_sekolah', 'public');
        }

        // Simpan perubahan ke database.
        $profile->update($data);

        return redirect()
            ->route('admin.profile.index')
            ->with('success', 'Profil sekolah berhasil diperbarui!');
    }
}

