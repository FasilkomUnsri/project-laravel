<?php

namespace App\models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class artikel extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul', 'isi', 'gambar'
    ];
    
}
