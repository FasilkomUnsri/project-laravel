<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswi extends Model
{
    use HasFactory;

    protected $fillable = [
        'nim', 'prodi', 'gambar'
    ];
}
