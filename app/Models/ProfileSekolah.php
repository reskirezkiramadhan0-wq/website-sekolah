<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProfileSekolah extends Model
{
    protected $table = 'profile_sekolas';

    protected $fillable = [
        'nama_sekolah',
        'kepala_sekola',
        'foto',
        'npsn',
        'alamat',
        'kontak',
        'visi',
        'misi',
        'tahun_berdiri',
        'deskripsi',
        
    ];
}
