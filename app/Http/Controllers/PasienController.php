<?php

namespace App\Http\Controllers;
use App\Models\pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{

    public function index()
    {
        return view('input_data/pasien');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_pasien' => "required",
            'alamat_pasien' => 'required',
            'dokter_id' => 'required',
            'keluhan' => 'required'
        ]);

        pasien::create($validatedData);
        return redirect('/pasien');
    }

    public function index2(){
        $datas = pasien::all();
        return view('input_data/pasien', compact(
            'datas'
        ));
    }
    public function destroy($id)
    {
        $web = pasien::where('id', $id)->firstorfail()->delete();
        return redirect('/pasien');
    }
    public function edit($id)
    {
        $pasien = pasien::find($id);
        return view('edit/editpasien',compact(['pasien']));  
    }

    public function update($id, Request $request)
    {
        $pasien = pasien::find($id); 
        $pasien -> update($request->except(['_token','submit']));
        return redirect('/pasien');
    }
}
