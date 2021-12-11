<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'projects';
    public $timestamps = true;

    protected $casts = [
        'harga' => 'float'
    ];

    protected $fillable = [
        'nama_buku',
        'nama_penulis',
        'deskripsi',
        'created_at',
        'lokasi',
        'harga'
    ];
}
