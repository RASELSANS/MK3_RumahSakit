<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class rekam_medis_obat extends Model
{
    protected $fillable = [
        'id_obat'
    ];

    public function obat(): BelongsTo
    {
        return $this->belongsTo(Obat::class);
    }

    public function rekamPasien(): BelongsTo
    {
        return $this->belongsTo(Rekam_Medis_Pasien::class);
    }
}
