<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ekstrakurikuler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EktrakurikulerController extends Controller
{
    //
    public function index()
    {
        $ekstrakurikulers = Ekstrakurikuler::latest()->get();

        return view('admin.ektrakurikuler.index', compact('ekstrakurikulers'));
    }

    public function create()
    {
        return view('admin.ektrakurikuler.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_eskul'     => 'required|string|max:40',
            'pembina'        => 'required|string|max:40',
            'jadwal_latihan' => 'required|string|max:40',
            'deskripsi'      => 'required',
            'gambar'         => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            $validated['gambar'] = $request->file('gambar')->store('ekstrakurikuler', 'public');
        }

        Ekstrakurikuler::create($validated);

        return redirect()
            ->route('admin.ekstrakurikuler.index')
            ->with('success', 'Data ekstrakurikuler berhasil ditambahkan.');
    }

    public function edit(Ekstrakurikuler $ekstrakurikuler)
    {
        // Perbaikan: variabel $ekstrakurikuler (tunggal)
        return view('admin.ektrakurikuler.edit', compact('ekstrakurikuler'));
    }

    public function update(Request $request, Ekstrakurikuler $ekstrakurikuler)
    {
        $validated = $request->validate([
            'nama_eskul'     => 'required|string|max:40',
            'pembina'        => 'required|string|max:40',
            'jadwal_latihan' => 'required|string|max:40',
            'deskripsi'      => 'required',
            'gambar'         => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            if ($ekstrakurikuler->gambar) {
                Storage::disk('public')->delete($ekstrakurikuler->gambar);
            }

            $validated['gambar'] = $request->file('gambar')->store('ekstrakurikuler', 'public');
        }

        // Perbaikan: update data mengacu ke $ekstrakurikuler
        $ekstrakurikuler->update($validated);

        return redirect()
            ->route('admin.ekstrakurikuler.index')
            ->with('success', 'Data ekstrakurikuler berhasil diperbarui.');
    }

    public function destroy(Ekstrakurikuler $ekstrakurikuler)
    {
        // Perbaikan: hapus gambar & data mengacu ke $ekstrakurikuler
        if ($ekstrakurikuler->gambar) {
            Storage::disk('public')->delete($ekstrakurikuler->gambar);
        }

        $ekstrakurikuler->delete();

        return redirect()
            ->route('admin.ekstrakurikuler.index')
            ->with('success', 'Data ekstrakurikuler berhasil dihapus.');
    }
}
