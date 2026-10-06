<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $siswas = Siswa::latest()->get();

        return view('admin.siswa.index', compact('siswas'));
    }

    public function create()
    {
        return view('admin.siswa.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'kelas' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'nullable',
            'no_hp' => 'nullable',
        ]);

        Siswa::create([
            'nis' => $request->nis,
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
        ]);

        return redirect()
            ->route('admin.siswa.index')
            ->with('success', 'Data siswa berhasil ditambahkan.');
    }

    public function edit(Siswa $siswa)
    {
        return view('admin.siswa.edit', compact('siswa'));
    }

    public function update(Request $request, Siswa $siswa)
    {
        $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'kelas' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'nullable',
            'no_hp' => 'nullable',
        ]);

        $siswa->nis = $request->nis;
        $siswa->nama = $request->nama;
        $siswa->kelas = $request->kelas;
        $siswa->jenis_kelamin = $request->jenis_kelamin;
        $siswa->alamat = $request->alamat;
        $siswa->no_hp = $request->no_hp;

        $siswa->save();

        return redirect()
            ->route('admin.siswa.index')
            ->with('success', 'Data siswa berhasil diperbarui.');
    }

    public function destroy(Siswa $siswa)
    {
        $siswa->delete();

        return redirect()
            ->route('admin.siswa.index')
            ->with('success', 'Data siswa berhasil dihapus.');
    }
}