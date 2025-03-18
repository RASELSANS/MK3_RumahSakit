<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Hash;

class ruangan extends Model
{
  protected $fillable = [
    'nama_ruangan','jenis_ruangan'
  ];

  public function RuanganPasien(): HasMany
  {
    return $this->hasMany(pasien_ruangan::class);
  }
}
