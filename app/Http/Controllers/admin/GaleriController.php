<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Galery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    //
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
        $request->validate(['judul' => 'required|string|max:255', 'keterangan' => 'nullable|string', 'file' => 'required|image|mimes:jpg,jpeg,png|max:2048', 'kategori' => 'required|string|max:100', 'tanggal' => 'required|date',]);
        $file = $request->file('file')->store('galeri', 'public');
        Galery::create(['judul' => $request->judul, 'keterangan' => $request->keterangan, 'file' => $file, 'kategori' => $request->kategori, 'tanggal' => $request->tanggal,]);
        return redirect()->route('admin.galeri.index')->with('success', 'Data galeri berhasil ditambahkan.');
    }
    public function edit(Galery $galeri)
    {
        return view('admin.galeri.edit', compact('galeri'));
    }
    public function update(Request $request, Galery $galeri)
    {
        $request->validate(['judul' => 'required|string|max:255', 'keterangan' => 'nullable|string', 'file' => 'nullable|image|mimes:jpg,jpeg,png|max:2048', 'kategori' => 'required|string|max:100', 'tanggal' => 'required|date',]);
        $data = ['judul' => $request->judul, 'keterangan' => $request->keterangan, 'kategori' => $request->kategori, 'tanggal' => $request->tanggal,];
        if ($request->hasFile('file')) {
            if ($galeri->file) {
                Storage::disk('public')->delete($galeri->file);
            }
            $data['file'] = $request->file('file')->store('galeri', 'public');
        }
        $galeri->update($data);
        return redirect()->route('admin.galeri.index')->with('success', 'Data galeri berhasil diperbarui.');
    }
    public function destroy(Galery $galeri)
    {
        if ($galeri->file) {
            Storage::disk('public')->delete($galeri->file);
        }
        $galeri->delete();
        return redirect()->route('admin.galeri.index')->with('success', 'Data galeri berhasil dihapus.');
    }
}
