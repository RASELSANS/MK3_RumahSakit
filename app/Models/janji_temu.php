<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class janji_temu extends Model
{
    protected $fillable = [
        'id_pasien',
        'id_dokter',
        'tanggal_janji',
        'status'
    ];

    public function dokter(): BelongsTo
    {
        return $this->belongsTo(dokter::class);
    }

    public function pasien(): BelongsTo
    {
        return $this->belongsTo(pasien::class);
    }
}
