<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use PhpParser\Node\Stmt\Return_;

class pasien extends Model
{
    protected $fillable = [
        'nama','tanggal_lahir','alamat','no_hp'
    ];

    public function janjiTemu() : HasMany
    {
        return $this->hasMany(janji_temu::class);
    }
    
    public function RekamPasien(): HasMany
    {
        return $this->hasMany(Rekam_Medis_Pasien::class);
    }

    public function RuangPasien(): BelongsTo
    {
        return $this->belongsTo(pasien_ruangan::class);
    }
}
