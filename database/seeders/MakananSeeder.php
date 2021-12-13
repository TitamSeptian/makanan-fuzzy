<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Makanan;
use App\Http\Controllers\FuzzyController as Fuzzy;


class MakananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $harga = new Fuzzy(10000, 20000, 50000);
        $mood = new Fuzzy(3, 5, 7);
        $rasaPedas = new Fuzzy(3, 5, 7);
        $rasaManis = new Fuzzy(3, 5, 7);
        $food = [
            "nama" => "Sempol",
            "jenis" => "tidak kuah",
            "harga" => 1000,
            "mood" => 6,
            "rasa_pedas" => 8,
            "rasa_manis" => 0,
        ];

        $res = Makanan::create($food);
        $fharga = [
            "murah" => $harga->min($res->harga),
            "normal" => $harga->normal($res->harga),
            "mahal" => $harga->max($res->harga),
            "makanan_id" => $res->id,
        ];
        \App\Models\FuzzyHarga::create($fharga);
        $fmood = [
            "sedih" => $mood->min($res->mood),
            "normal" => $mood->normal($res->mood),
            "senang" => $mood->max($res->mood),
            "makanan_id" => $res->id,
        ];
        \App\Models\FuzzyMood::create($fmood);
        $fpedas = [
            "tidak" => $rasaPedas->min($res->rasa_pedas),
            "normal" => $rasaPedas->normal($res->rasa_pedas),
            "pedas" => $rasaPedas->max($res->rasa_pedas),
            "makanan_id" => $res->id,
        ];
        \App\Models\FuzzyRasaPedas::create($fpedas);
        $fmanis = [
            "tidak" => $rasaManis->min($res->rasa_manis),
            "normal" => $rasaManis->normal($res->rasa_manis),
            "manis" => $rasaManis->max($res->rasa_manis),
            "makanan_id" => $res->id,
        ];
        \App\Models\FuzzyRasaManis::create($fmanis);
    }
}
