<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengurus extends Model
{
    use HasFactory;

    protected $table = 'pengurus'; // Menentukan nama tabel secara eksplisit

    protected $fillable = [
        'name',
        'prodi',
        'position',
        'image_path',
        'organization_id'
    ];

    public function ukm()
    {
        return $this->belongsTo(ukm::class, 'organization_id');
    }
}
