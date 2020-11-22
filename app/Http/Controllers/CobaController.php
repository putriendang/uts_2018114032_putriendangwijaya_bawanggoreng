<?php

namespace App\Http\Controllers;

use App\Models\produks;
use Illuminate\Http\Request;

class CobaController extends Controller
{
    public function index ()
    {
        $produks = produks::orderBy('id', 'desc')->paginate(3);
        return view ('produks.index', compact('produks'));  
    }
    public function create ()
    {
    return view('produks.create');
    }
    public function store (Request $request)
    {
        // Validate the requst...
            $request->validate([
            'nama' => 'required|unique:produks|max:255',
            'no_tlp' => 'required|numeric',
            'alamat' => 'required',
            'harga' => 'required',
        ]);

        $produks = new produks;

        $produks->nama = $request->nama;
        $produks->no_tlp = $request->no_tlp;
        $produks->alamat = $request->alamat;
        $produks->harga = $request->harga;

        $produks->save();
        return redirect('/');
    }
    public function show($id)
    {
        $produk = produks::where('id',$id)->first();
        return view('produks.show', ['produk'=>$produk]);
    }
    public function edit($id)
    {
        $produk = produks::where('id', $id)->first();
        return view('produks.edit', ['produk'=>$produk]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|unique:produks|max:255',
            'no_tlp' => 'required|numeric',
            'alamat' => 'required',
            'harga' => 'required',
        ]);
        produks::find($id)->update([
            'nama' => $request->nama,
            'no_tlp' => $request->no_tlp,
            'alamat' => $request->alamat,
            'harga' => $request->harga,
        ]);

        return redirect('/');
    }
    public function destroy($id)
    {
        produks::find($id)->delete();
        return redirect('/');
    }
}

