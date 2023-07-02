<?php

namespace App\Http\Controllers;
use App\Models\ruang;

use Illuminate\Http\Request;

class RuangController extends Controller
{
    public function index()
    {
        return view('input_data/ruang');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_ruang' => "required",
            'nama_gedung' => 'required',
        ]);

        ruang::create($validatedData);
        return redirect('/ruang');
    }
    public function index2(){
        $datas = ruang::all();
        return view('input_data/ruang', compact(
            'datas'
        ));
    }
    public function destroy($id)
    {
        $web = ruang::where('id', $id)->firstorfail()->delete();
        return redirect('/ruang');
    }
    public function edit($id)
    {
        $ruang = ruang::find($id);
        return view('edit/editruang',compact(['ruang']));

        
    }

    public function update($id, Request $request)
    {
        $ruang = ruang::find($id); 
        $ruang -> update($request->except(['_token','submit']));
        return redirect('/ruang');
    }
}
