<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Galery extends Model
{
    //

    protected $table = 'galeries';

    protected $fillable = [
        'judul',
        'keterangan',
        'file',
        'kategori',
        'tanggal',
    ];
}
