<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\rawat_inap;

class RawatController extends Controller
{
    public function index()
    {
        return view('input_data/rawat_inap');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'ruang_id' => "required",
            'pasien_id' => 'required',
        ]);

        rawat_inap::create($validatedData);
        return redirect('/rawat-inap');
    } 
    public function index2(){
        $datas = rawat_inap::all();
        return view('input_data/rawat_inap', compact(
            'datas'
        ));
    }
    public function destroy($id)
    {
        $web = rawat_inap::where('id', $id)->firstorfail()->delete();
        return redirect('/rawat-inap');
    }
    public function edit($id)
    {
        $rawat_inap = rawat_inap::find($id);
        return view('edit/editrawat_inap',compact(['rawat_inap']));

        
    }

    public function update($id, Request $request)
    {
        $rawat_inap = rawat_inap::find($id); 
        $rawat_inap -> update($request->except(['_token','submit']));
        return redirect('/rawat-inap');
    }
}
