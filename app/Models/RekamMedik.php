<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RekamMedik extends Model
{
    public function pasien()
    {
        return $this->belongsTo(Pasien::class);
    }
}
