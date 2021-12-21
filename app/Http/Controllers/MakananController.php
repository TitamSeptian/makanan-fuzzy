<?php

namespace App\Http\Controllers;

use App\Models\Makanan;
use App\Models\FuzzyHarga;
use App\Models\FuzzyMood;
use App\Models\FuzzyRasaManis;
use App\Models\FuzzyRasaPedas;
// use DateTime;
use Illuminate\Http\Request;
use DataTables;
use App\Http\Controllers\FuzzyController as Fuzzy;

class MakananController extends Controller
{
//     protected $harga = new Fuzzy(10000, 20000, 50000);
//     protected $mood = new Fuzzy(3, 5, 7);
//     protected $pedas = new Fuzzy(3, 5, 7);
//     protected $manis = new Fuzzy(3, 5, 7);

    public function __construct()
    {
        $this->harga = new Fuzzy(10000, 20000, 50000);
        $this->mood = new Fuzzy(3, 5, 7);
        $this->pedas = new Fuzzy(3, 5, 7);
        $this->manis = new Fuzzy(3, 5, 7);
    }

    public function index()
    {
        return view('dashboard.makanan.index');
    }

    public function create()
    {
        return view('dashboard.makanan.create');
        
    }

    public function getIndexFuzzy($f_element,$a = 0, $b = 0, $c = 0)
    {
        // * $f_element = dapetin index yang mana
        // * $a = min
        // * $b = normal
        // * $c = max
        $index = "";
        if($a >= $b && $a >= $c){
            if($f_element == "mood") $index =  "sedih";
            if($f_element == "harga") $index =  "murah";
            if($f_element == "manis") $index =  "tidak";
            if($f_element == "pedas") $index =  "tidak";
        }else if($b > $a && $c < $b){
             $index = "normal";
        }else if($b  <= $c){
            if($f_element == "mood") $index = "senang";
            if($f_element == "harga") $index =  "mahal";
            if($f_element == "manis") $index =  "manis";
            if($f_element == "pedas") $index =  "pedas";
        }

        return $index;
    }

    public function store(Request $request)
    {
        $makanan = Makanan::create([
            "nama" => $request->nama,
            "jenis" => $request->jenis,
            "harga"=> $request->harga,
            "mood"=> $request->mood,
            "rasa_pedas"=> $request->pedas,
            "rasa_manis"=> $request->manis,
            "f_mood" => $this->getIndexFuzzy("mood", 
                $this->mood->min($request->mood),
                $this->mood->normal($request->mood),
                $this->mood->max($request->mood)),
            "f_harga" => $this->getIndexFuzzy("harga", 
                $this->harga->min($request->harga),
                $this->harga->normal($request->harga),
                $this->harga->max($request->harga)),
            "f_manis" => $this->getIndexFuzzy("manis", 
                $this->manis->min($request->manis),
                $this->manis->normal($request->manis),
                $this->manis->max($request->manis)),
            "f_pedas" => $this->getIndexFuzzy("pedas", 
                $this->pedas->min($request->pedas),
                $this->pedas->normal($request->pedas),
                $this->pedas->max($request->pedas))
        ]);

        $f_mood = FuzzyMood::create([
            "makanan_id" => $makanan->id,
            "sedih" => $this->mood->min($request->mood),
            "normal" => $this->mood->normal($request->mood),
            "senang" => $this->mood->max($request->mood),
            // "f_mood" => $this->getIndexFuzzy("mood", 
            //     $this->mood->min($request->mood),
            //     $this->mood->normal($request->mood),
            //     $this->mood->max($request->mood))
        ]);
        
        $f_harga = FuzzyHarga::create([
            "makanan_id" => $makanan->id,
            "murah" => $this->harga->min($request->harga),
            "normal" => $this->harga->normal($request->harga),
            "mahal" => $this->harga->max($request->harga),
            // "f_harga" => $this->getIndexFuzzy("harga", 
            //     $this->harga->min($request->harga),
            //     $this->harga->normal($request->harga),
            //     $this->harga->max($request->harga))
        ]);

        $f_manis = FuzzyRasaManis::create([
            "makanan_id" => $makanan->id,
            "tidak" => $this->manis->min($request->manis),
            "normal" => $this->manis->normal($request->manis),
            "manis" => $this->manis->max($request->manis),
            // "f_manis" => $this->getIndexFuzzy("manis", 
            //     $this->manis->min($request->manis),
            //     $this->manis->normal($request->manis),
            //     $this->manis->max($request->manis))
        ]);

        $f_pedas = FuzzyRasaPedas::create([
            "makanan_id" => $makanan->id,
            "tidak" => $this->pedas->min($request->pedas),
            "normal" => $this->pedas->normal($request->pedas),
            "pedas" => $this->pedas->max($request->pedas),
            // "f_pedas" => $this->getIndexFuzzy("pedas", 
            //     $this->pedas->min($request->pedas),
            //     $this->pedas->normal($request->pedas),
            //     $this->pedas->max($request->pedas))
        ]);

        return response()->json(["msg" => "Berhasil Ditambahkan"],200);
    }

    public function show($id)
    {
        $data = Makanan::findOrFail($id);
        return view('dashboard.makanan.show', compact("data"));

    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function data()
    {
        $data = Makanan::query()->with(["fharga", "fmood", "fpedas", "fmanis"]);
        return DataTables::of($data)->toJson();
    }

    public function getRecommendation(Request $request)
    {
        $data = Makanan::where("f_mood", $request->mood)
            ->where("f_harga", $request->harga)
            ->where("f_manis", $request->manis)
            ->where("f_pedas", $request->pedas)
            ->get();
        // dd(count($data) >= 0);
        if(count($data) == 0){
            return response()->json(["msg" => "makanan tidak ditemukan"], 404);
        }else{
            return response()->json(["data" => $data], 200);
        }

    }
}
