<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Obat extends Model
{
    protected $fillable = [
        'nama_obat',
        'dosis',
    ];

    public function RekamObat(): HasMany
    {
        return $this->hasMany(rekam_medis_obat::class);
    }


}
