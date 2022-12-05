<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Makam extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'alamat',
        'agama',
        'harga',
        'tempat_tersedia',
    ];

    public function rekenings()
    {
        return $this->hasMany(RekeningMakam::class);
    }
}
