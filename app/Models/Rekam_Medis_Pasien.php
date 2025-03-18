<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Rekam_Medis_Pasien extends Model
{
    protected $fillable = [
        'id_pasien',
        'id_rekam_medis_obat',
        'diagnosa',
        'pengobatan',
        'tanggal'
    ];

    public function pasien(): BelongsTo
    {
        return $this->belongsTo(pasien::class);
    }

    public function RekamObat(): HasMany
    {
        return $this->hasMany(rekam_medis_obat::class);
    }
}

