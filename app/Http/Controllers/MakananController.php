<?php

namespace App\Http\Controllers;

use App\Models\Makanan;
// use DateTime;
use Illuminate\Http\Request;
use DataTables;

class MakananController extends Controller
{

    public function index()
    {
        return view('dashboard.makanan.index');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        // 
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
}
