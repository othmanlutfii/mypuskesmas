<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\dokter;

class DokterController extends Controller
{

    public function index()
    {
        return view('input_data/dokter');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_dokter' => "required",
            'alamat_dokter' => 'required',
            'spealisasi_dokter' => 'required'
        ]);

        dokter::create($validatedData);
        return redirect('/dokter');
    }

    public function index2(){
        $datas = dokter::all();
        return view('input_data/dokter', compact(
            'datas'
        ));
    }
    public function destroy($id)
    {
        $web = dokter::where('id', $id)->firstorfail()->delete();
        return redirect('/dokter');
    }

    public function edit($id)
    {
        $dokter = dokter::find($id);
        return view('edit/editdokter',compact(['dokter']));

        
    }

    public function update($id, Request $request)
    {
        $dokter = dokter::find($id); 
        $dokter -> update($request->except(['_token','submit']));
        return redirect('/dokter');
    }

    


}
