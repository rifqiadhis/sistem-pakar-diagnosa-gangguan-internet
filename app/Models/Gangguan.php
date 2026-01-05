<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gangguan extends Model
{
    protected $table = 'gangguans';

    protected $fillable = [
        'kode',
        'nama',
        'definisi',
    ];
}
