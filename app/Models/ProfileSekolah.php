<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProfileSekolah extends Model
{
   
    protected $table = 'profile_sekolas';

    protected $fillable = [
        'nama_sekolah',
        'kepala_sekolah',
        'npsn',
        'kontak',
        'tahun_berdiri',
        'alamat',
        'deskripsi',
        'visi_misi',
        'logo',
        'foto',
        'foto_gedung',
        
    ];
}
