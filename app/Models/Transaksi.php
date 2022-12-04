<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'makam_id',
        'tanggal_pemesanan',
        'jumlah_makam',
        'total_pembelian',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function makam()
    {
        return $this->belongsTo(Makam::class, 'makam_id');
    }
}
