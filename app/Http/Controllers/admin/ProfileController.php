<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProfileSekolah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    // Menampilkan halaman profil
        public function index()
    {
        $profile = ProfileSekolah::first();

        return view('admin.profile.index', compact('profile'));
    }

    public function edit($id)
    {
        $profile = ProfileSekolah::findOrFail($id);

        return view('admin.profile.edit', compact('profile'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_sekolah'   => 'required|string|max:40',
            'kepala_sekolah' => 'nullable|string|max:40',
            'npsn'           => 'required|string|max:10',
            'kontak'         => 'nullable|string|max:15',
            'tahun_berdiri'  => 'nullable|numeric|between:1901,2155',
            'foto'           => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'logo'           => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $profile = ProfileSekolah::findOrFail($id);

        $data = $request->only([
            'nama_sekolah',
            'kepala_sekolah',
            'npsn',
            'kontak',
            'tahun_berdiri',
        ]);

        if ($request->hasFile('foto')) {

            if ($profile->foto) {
                Storage::disk('public')->delete($profile->foto);
            }

            $data['foto'] = $request->file('foto')
                ->store('profile', 'public');
        }

        if ($request->hasFile('logo')) {

            if ($profile->logo) {
                Storage::disk('public')->delete($profile->logo);
            }

            $data['logo'] = $request->file('logo')
                ->store('profile', 'public');
        }

        $profile->update($data);

        return redirect()
            ->route('admin.profile.index')
            ->with('success', 'Profil sekolah berhasil diperbarui!');
    }
}
