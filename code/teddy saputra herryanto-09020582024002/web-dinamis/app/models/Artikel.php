<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Artikel extends Model
{
    use HasFactory;
    protected $fillable = [
        'judul', 'isi', 'gambar'
    ];
    
}
