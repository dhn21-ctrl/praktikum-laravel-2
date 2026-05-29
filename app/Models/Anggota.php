<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Anggota extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nama',
        'email'
    ];

    public function kartuAnggota(): HasOne
    {
        return $this->hasOne(KartuAnggota::class, 'anggota_id');
    }
}