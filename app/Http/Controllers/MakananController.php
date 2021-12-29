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
        $data = Makanan::where("id",$id)->with(["fharga", "fmood", "fpedas", "fmanis"])->first();
        // dd($data);
        return view('dashboard.makanan.show', compact("data"));

    }

    public function edit($id)
    {
        $data = Makanan::where("id",$id)->with(["fharga", "fmood", "fpedas", "fmanis"])->first();
        return view("dashboard.makanan.edit", compact("data"));
    }

    public function update(Request $request, $id)
    {
        $makanan = Makanan::findOrFail($id);
        $makanan->update([
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

        $makanan->fmood->update([
            "makanan_id" => $makanan->id,
            "sedih" => $this->mood->min($request->mood),
            "normal" => $this->mood->normal($request->mood),
            "senang" => $this->mood->max($request->mood),
            // "f_mood" => $this->getIndexFuzzy("mood", 
            //     $this->mood->min($request->mood),
            //     $this->mood->normal($request->mood),
            //     $this->mood->max($request->mood))
        ]);
        
        $makanan->fharga->update([
            "makanan_id" => $makanan->id,
            "murah" => $this->harga->min($request->harga),
            "normal" => $this->harga->normal($request->harga),
            "mahal" => $this->harga->max($request->harga),
            // "f_harga" => $this->getIndexFuzzy("harga", 
            //     $this->harga->min($request->harga),
            //     $this->harga->normal($request->harga),
            //     $this->harga->max($request->harga))
        ]);

        $makanan->fmanis->update([
            "makanan_id" => $makanan->id,
            "tidak" => $this->manis->min($request->manis),
            "normal" => $this->manis->normal($request->manis),
            "manis" => $this->manis->max($request->manis),
            // "f_manis" => $this->getIndexFuzzy("manis", 
            //     $this->manis->min($request->manis),
            //     $this->manis->normal($request->manis),
            //     $this->manis->max($request->manis))
        ]);

        $makanan->fpedas->update([
            "makanan_id" => $makanan->id,
            "tidak" => $this->pedas->min($request->pedas),
            "normal" => $this->pedas->normal($request->pedas),
            "pedas" => $this->pedas->max($request->pedas),
            // "f_pedas" => $this->getIndexFuzzy("pedas", 
            //     $this->pedas->min($request->pedas),
            //     $this->pedas->normal($request->pedas),
            //     $this->pedas->max($request->pedas))
        ]);

        return response()->json(["msg" => "Berhasil Diubah"],200);

    }

    public function destroy($id)
    {
        $makanan = Makanan::findOrFail($id);
        $makanan->fmood->delete();
        $makanan->fharga->delete();
        $makanan->fmanis->delete();
        $makanan->fpedas->delete();
        $makanan->delete();

        return response()->json(["msg" => "Berhasil Dihapus"],200);

    }

    public function data()
    {
        $data = Makanan::query()->with(["fharga", "fmood", "fpedas", "fmanis"]);
        return DataTables::of($data)
            ->addColumn('action', function($data){
                return view('dashboard.makanan.action', [
                    'data' => $data,
                ]);
            })->rawColumns(['action'])->addIndexColumn()->make(true);
    }

    public function getRecommendation(Request $request)
    {
        $data = Makanan::where("f_mood", $request->mood)
            ->where("jenis", $request->kuah)
            ->where("f_harga", $request->harga)
            ->where("f_manis", $request->manis)
            ->where("f_pedas", $request->pedas)
            ->get();
        $f = [];
        foreach ($data as $d){
            
            // array_push($f, array_values([
            //     \DB::table('makanans')
            //     ->join("fuzzy_moods", "makanans.id", "fuzzy_moods.makanan_id")
            //     ->join("fuzzy_hargas", "makanans.id", "fuzzy_hargas.makanan_id")
            //     ->join("fuzzy_rasa_manis", "makanans.id", "fuzzy_rasa_manis.makanan_id")
            //     ->join("fuzzy_rasa_pedas", "makanans.id", "fuzzy_rasa_pedas.makanan_id")
            //     ->select("fuzzy_moods.$request->mood","fuzzy_hargas.$request->harga","fuzzy_rasa_manis.$request->manis","fuzzy_rasa_pedas.$request->pedas")
            //     ->where("makanans.id", $d->id)->get()
            // // \DB::table('fuzzy_moods')->select($request->mood)->where('makanan_id', $d->id)->first(),
            // // \DB::table('fuzzy_hargas')->select($request->harga)->where('makanan_id', $d->id)->first(),
            // // \DB::table('fuzzy_rasa_manis')->select($request->manis)->where('makanan_id', $d->id)->first(),
            // // \DB::table('fuzzy_rasa_pedas')->select($request->pedas)->where('makanan_id', $d->id)->first(),
            // ]));
            $x = \DB::table('makanans')
                ->join("fuzzy_moods", "makanans.id", "fuzzy_moods.makanan_id")
                ->join("fuzzy_hargas", "makanans.id", "fuzzy_hargas.makanan_id")
                ->join("fuzzy_rasa_manis", "makanans.id", "fuzzy_rasa_manis.makanan_id")
                ->join("fuzzy_rasa_pedas", "makanans.id", "fuzzy_rasa_pedas.makanan_id")
                ->select("fuzzy_moods.$request->mood","fuzzy_hargas.$request->harga","fuzzy_rasa_manis.$request->manis","fuzzy_rasa_pedas.$request->pedas")
                ->where("makanans.id", $d->id)->get();
            // array_values($x);
            $x = json_decode(json_encode($x), true);
            array_push($f,array_values($x));
        }
        // $f = array_values($f[0][0]);
        // $f = array_values($f[1][0]);
        // $f = array_values($f[2][0]);
        // $f = array_values($f[3][0]);
        $fs= [];
        for($i = 0; $i < count($f) ; $i++){
            // $f[$i] = array_map('intval', $f[$i][0]);
            $f[$i] = array_values(array_map('intval',$f[$i][0]));
            array_push($fs,min($f[$i]));
        }
        // dd($fs);
        if(count($data) == 0){
            return response()->json(["msg" => "makanan tidak ditemukan"], 404);
        }else{
            return response()->json(["data" => $data, "fires" => $fs], 200);
        }

    }
}
