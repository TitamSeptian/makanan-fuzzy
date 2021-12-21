<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FuzzyRasaManis extends Model
{
    use HasFactory;
    protected $fillable = [
        'makanan_id',
        'tidak',
        'normal',
        'manis',
        // 'f_manis',
    ];

    public function makanan()
    {
        return $this->belongsTo(\App\Models\Makanan::class);
    }
}
