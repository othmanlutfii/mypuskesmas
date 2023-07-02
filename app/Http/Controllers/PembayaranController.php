<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\pembayaran;

class PembayaranController extends Controller
{
    public function index()
    {
        return view('input_data/pembayaran');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => "required",
            'pasien_id' => 'required',
            'jumlah_harga' => 'required',
            'metode_pembayaran' => 'required'
        ]);

        pembayaran::create($validatedData);
        return redirect('/pembayaran');
    }

    public function index2(){
        $datas = pembayaran::all();
        return view('input_data/pembayaran', compact(
            'datas'
        ));
    }
    public function destroy($id)
    {
        $web = pembayaran::where('id', $id)->firstorfail()->delete();
        return redirect('/pembayaran');
    }
    public function edit($id)
    {
        $pembayaran = pembayaran::find($id);
        return view('edit/editpembayaran',compact(['pembayaran']));

        
    }

    public function update($id, Request $request)
    {
        $pembayaran = pembayaran::find($id); 
        $pembayaran -> update($request->except(['_token','submit']));
        return redirect('/pembayaran');
    }
}

