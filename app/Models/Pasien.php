<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    public function rekamMediks()
    {
        return $this->hasOne(RekamMedik::class, "id", "rekam_mediks_id");
    }
}
