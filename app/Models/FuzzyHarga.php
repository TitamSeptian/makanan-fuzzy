<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FuzzyHarga extends Model
{
    use HasFactory;
    protected $fillable = [
        'makanan_id',
        'murah',
        'normal',
        'mahal',
        // 'f_harga',
    ];

    public function makanan()
    {
        return $this->belongsTo(\App\Models\Makanan::class);
    }
}
