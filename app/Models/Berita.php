<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Berita extends Model
{
   use HasFactory, HasUuids;

    protected $table = 'beritas';

    protected $primaryKey = 'id_berita';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'id_berita',
        'user_id',
        'judul',
        'isi',
        'tanggal',
        'gambar',
    ];

    public function uniqueIds(): array
    {
        return ['id_berita'];
    }
}
