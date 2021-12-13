<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Makanan extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'jenis',
        'harga',
        'mood',
        'rasa_pedas',
        'rasa_manis',
    ];

    public function fharga()
    {
        return $this->hasMany(\App\Models\FuzzyHarga::class);
    }

    public function fmood()
    {
        return $this->hasMany(\App\Models\FuzzyMood::class);
    }
    public function fpedas()
    {
        return $this->hasMany(\App\Models\FuzzyRasaPedas::class);
    }
    public function fmanis()
    {
        return $this->hasMany(\App\Models\FuzzyRasaManis::class);
    }
}
