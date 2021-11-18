<?php

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
Route::get('/', function () {
    $harga = new Fuzzy(10000,20000,50000);
    dd($harga->min(1000));
    return view('welcome');
});
