<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class pasien_ruangan extends Model
{
    protected $fillable =[
        'id_pasien',
        'id_ruangan'
    ];

    public function Pasien(): BelongsTo
    {
        return $this->belongsTo(pasien::class);
    }

    public function Ruangan():BelongsTo
    {
        return $this->belongsTo(ruangan::class);
    }
}
