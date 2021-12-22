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
        "f_mood",
        "f_harga",
        "f_manis",
        "f_pedas",
    ];

    public function fharga()
    {
        return $this->hasOne(\App\Models\FuzzyHarga::class);
    }

    public function fmood()
    {
        return $this->hasOne(\App\Models\FuzzyMood::class);
    }
    public function fpedas()
    {
        return $this->hasOne(\App\Models\FuzzyRasaPedas::class);
    }
    public function fmanis()
    {
        return $this->hasOne(\App\Models\FuzzyRasaManis::class);
    }
}
