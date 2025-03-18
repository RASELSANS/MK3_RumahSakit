<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Hash;

class dokter extends Model
{
    protected $fillable = [
        'nama_dokter','spesialis_dokter','no_dokter'
    ];

    public function janjiTemu(): HasMany
    {
        return $this->hasMany(janji_temu::class);
    }
}
