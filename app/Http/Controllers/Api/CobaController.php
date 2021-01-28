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
    public function show($id)
    {
        $produk = produks::where('id', $id) -> first();

        return response()->json([
            'success' => true,
            'message' => 'Detail Data Pesanan',
            'data' => $produk
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
    
                'nama' => 'required|unique:produks|max:255',
                'no_tlp' => 'required|numeric',
                'alamat' => 'required',
                'harga' => 'required',
        ]);

        $produk = produks::find($id)->update([
            'nama' => $request->nama,
            'no_tlp' => $request->no_tlp,
            'alamat' => $request->alamat,
            'harga' => $request->harga,
        ]);

            return response()->json([
                'success' => true,
                'message' => 'Post updated',
                'data' => $produk
            ], 200);
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cek =  produks::find($id)->delete();

        return response()->json([
            'success' => true,
            'message' => 'Post Deleted',
            'data' => $cek
        ], 200);
    }
} 