<?php

namespace App\Http\Controllers\Api;

use App\Models\produks;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CobaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produks = produks::orderBy('id', 'desc')->paginate(3);

        return response()->json([
            'success' => true,
            'message' => 'Daftar Data pesanan',
            'data' => $produks
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|unique:produks|max:255',
            'gambar'=> 'required',
            'no_tlp' => 'required|numeric',
            'alamat' => 'required',
            'harga' => 'required',
        ]);

        $produks = produks::create([
            'nama' => $request->nama,
            'gambar' => $request->gambar,
            'no_tlp' => $request->no_tlp,
            'alamat' => $request->alamat,
            'harga' => $request->harga
        ]);
        if($produks)
        {
            return response()->json([
                'success' => true,
                'message' => 'pesanan Berhasil Ditambahkan',
                'data' => $produks
            ], 200);
        }else{
            return response()->json([
                'success' => false,
                'message' => 'pesanan Gagal Ditambahkan',
                'data' => $produks
            ], 409);
        }
    }  

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
