<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $table = 'dosen';  

    protected $fillable = [
        'nama',     // Kolom nama dosen
        'nidn',     // Kolom NIDN dosen
        'mata_kuliah',  // Kolom jurusan dosen
    ];

}

