<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RiwayatDiagnosa extends Model
{
    protected $fillable = ['hasil_gangguan', 'skor_persen', 'data_gejala'];

    protected $casts = [
        'data_gejala' => 'array',
    ];
}
