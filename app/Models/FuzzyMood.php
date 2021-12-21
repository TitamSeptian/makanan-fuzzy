<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FuzzyMood extends Model
{
    use HasFactory;
    protected $fillable = [
        'makanan_id',
        'sedih',
        'normal',
        'senang',
        // 'f_mood',
    ];

    public function makanan()
    {
        return $this->belongsTo(\App\Models\Makanan::class);
    }
}
