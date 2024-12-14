<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Matkul extends Model
{
    protected $table = 'makul';  

    protected $fillable = [
        'nama',  // Kolom nama mata kuliah
        'kode',  // Kolom kode mata kuliah
        'sks',   // Kolom SKS mata kuliah
    ];

}
