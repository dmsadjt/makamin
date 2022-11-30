<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RekeningMakam extends Model
{
    use HasFactory;

    public function makam()
    {
        return $this->belongsTo(Makam::class);
    }
}
