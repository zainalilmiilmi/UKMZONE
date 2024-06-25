<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ukm extends Model
{
    use HasFactory;

    protected $table = 'ukm'; // Pastikan tabel di database bernama 'ukms'
    protected $fillable = [
        'name',
        'description',
        'image_path',
        'visi',
        'misi',
        'kegiatan',
        'image_kegiatan'
    ];

    // Pastikan ini tidak mencegah pengisian properti yang diinginkan
    protected $guarded = [];
}
