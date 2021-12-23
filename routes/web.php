<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Http\Controllers\FuzzyController as Fuzzy;
use App\Http\Controllers\MakananController;

Route::get('/', function () {
    $harga = new Fuzzy(10000, 20000, 50000);
    $mood = new Fuzzy(3, 5, 7);
    $rasaPedas = new Fuzzy(3, 5, 7);
    $rasaManis = new Fuzzy(3, 5, 7);
    $makanan = [
        "nama" => "Sempol",
        "jenis" => "Tidak Kuah",
        "harga" => 1000,
        "mood" => 5,
        "rasa_pedas" => 8,
        "rasa_manis" => 0,
        "fuzzy_harga" => [
            "murah" => $harga->min(1000),
            "normal" => $harga->normal(1000),
            "mahal" => $harga->max(1000),
        ],
        "fuzzy_mood" => [
            "sedih" => $rasaPedas->min(5),
            "normal" => $rasaPedas->normal(5),
            "senang" => $rasaPedas->max(5),
        ],
        "fuzzy_rasa_pedas" => [
            "tidak" => $rasaPedas->min(8),
            "normal" => $rasaPedas->normal(8),
            "pedas" => $rasaPedas->max(8),
        ],
        "fuzzy_rasa_manis" => [
            "tidak" => $rasaManis->min(8),
            "normal" => $rasaManis->normal(8),
            "manis" => $rasaManis->max(8),
        ]
    ];
    return view('landing', compact('makanan'));
})->name('landing');

Route::get('/login', [AuthController::class, "login"])->middleware('guest')->name("login");
Route::post('/plogin', [AuthController::class, "postLogin"])->middleware('guest')->name("postLogin");
Route::post('/logout', [AuthController::class, "logout"])->middleware('auth')->name("logout");
Route::post('/rec', [MakananController::class, "getRecommendation"])->name("rec");

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard.dashboard');
    })->name('dashboard');

    Route::resource('/food', MakananController::class);
    Route::get('/foods', [MakananController::class, "data"])->name("food.data");
});

Route::get('/about', function (){
    return view("dashboard.about.index");
})->name('about');
