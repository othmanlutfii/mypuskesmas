<?php

namespace App\Http\Controllers;
use App\Models\pegawaiz;
use Illuminate\Http\Request;


class PegawaizController extends Controller
{
    public function index()
    {
        return view('input_data/petugas');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_petugas' => "required",
            'alamat_petugas' => 'required',
            'jabatan' => "required",
            'jam_jaga' => 'required'
        ]);

        pegawaiz::create($validatedData);

        return redirect('/petugas');
    } 
    public function index2()
    {
        $datas = pegawaiz::all();
        return view('input_data/petugas', compact(
            'datas'
        ));
    }

    public function destroy($id)
    {
        $web = pegawaiz::where('id', $id)->firstorfail()->delete();
        return redirect('/petugas');
    }
    public function edit($id)
    {
        $petugas = pegawaiz::find($id);
        return view('edit/editpetugas',compact(['petugas']));

        
    }

    public function update($id, Request $request)
    {
        $petugas = pegawaiz::find($id); 
        $petugas -> update($request->except(['_token','submit']));
        return redirect('/petugas');
    }

}
