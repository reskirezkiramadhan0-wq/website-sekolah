<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProfileSekolah;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProfileSekolah::create([
            'nama_sekolah'   => 'SMK YPC Cinta Wa',
            'kepala_sekolah' => 'Drs. H. Ahmad Sanusi, M.Pd.',
            'foto'           => null,
            'logo'           => null,
            'npsn'           => '20271234',
            'alamat'         => 'Jl. Raya Singaparna No. 123, Tasikmalaya',
            'kontak'         => '081234567890',
            'visi_misi'      => "Visi:\nMenjadi sekolah kejuruan unggul dan berkarakter.\n\nMisi:\n1. Meningkatkan mutu pembelajaran.\n2. Membentuk siswa yang kompeten.",
            'tahun_berdiri'  => 2010,
            'deskripsi'      => 'SMK YPC Cinta Wa adalah sekolah kejuruan yang berfokus pada pengembangan keterampilan dan karakter peserta didik.',
        ]);
    }
}