<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Galery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    public function index()
    {
        $galeris = Galery::latest()->get();

        return view('admin.galeri.index', compact('galeris'));
    }

    public function create()
    {
        return view('admin.galeri.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'foto'       => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'judul'      => 'required|string|max:50',
            'keterangan' => 'required|string',
            'kategori'   => 'required|in:foto,video',
            'tanggal'    => 'required|date',
        ]);

        $filePath = $request->file('foto')->store('galeri', 'public');

        Galery::create([
            'judul'      => $request->judul,
            'keterangan' => $request->keterangan,
            'file'       => $filePath,
            'kategori'   => $request->kategori,
            'tanggal'    => $request->tanggal,
        ]);

        return redirect()
            ->route('admin.galeri.index')
            ->with('success', 'Data galeri berhasil ditambahkan.');
    }

    public function edit(Galery $galeri)
    {
        return view('admin.galeri.edit', compact('galeri'));
    }

    public function update(Request $request, Galery $galeri)
    {
        $request->validate([
            'judul'      => 'required|string|max:50',
            'keterangan' => 'required|string',
            'foto'       => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'kategori'   => 'required|in:foto,video',
            'tanggal'    => 'required|date',
        ]);

        $data = [
            'judul'      => $request->judul,
            'keterangan' => $request->keterangan,
            'kategori'   => $request->kategori,
            'tanggal'    => $request->tanggal,
        ];

        if ($request->hasFile('foto')) {
            if ($galeri->file) {
                Storage::disk('public')->delete($galeri->file);
            }

            $data['file'] = $request->file('foto')->store('galeri', 'public');
        }

        $galeri->update($data);

        return redirect()
            ->route('admin.galeri.index')
            ->with('success', 'Data galeri berhasil diperbarui.');
    }

    public function destroy(Galery $galeri)
    {
        if ($galeri->file) {
            Storage::disk('public')->delete($galeri->file);
        }

        $galeri->delete();

        return redirect()
            ->route('admin.galeri.index')
            ->with('success', 'Data galeri berhasil dihapus.');
    }
}