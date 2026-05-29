<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class KartuAnggota extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomor_kartu',
        'tanggal_aktivasi',
        'anggota_id'
    ];

    public function anggota(): BelongsTo
    {
        return $this->belongsTo(Anggota::class, 'anggota_id');
    }
}