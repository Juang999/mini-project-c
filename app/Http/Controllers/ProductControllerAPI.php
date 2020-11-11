<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ProductControllerAPI extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::with(['toko', 'kategori'])->get();
        if (count($products) <= 0) {
            return Response()->json([
                "status" => "Failed",
                "message" => "Data Tidak Ditemukan",
            ], 400);
        }
        return Response()->json([
            "status" => "Success",
            "message" => "Data Berhasil Ditampilkan",
            "data" => $products,
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'nama' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',
            'stok' => 'required',
            'berat' => 'required',
            'gambar' => 'mimes:jpg,png,jpeg,svg',
            'kategori_id' => 'required',
        ]);

        if ($validation->fails()) {
            return Response()->json([
                "status" => "Required",
                "messege" => $validation->errors(),
            ], 400);
        }

        $toko_id = Auth::id();

        $product = new Product();
        $product->nama = $request->nama;
        $product->harga = $request->harga;
        $product->deskripsi = $request->deskripsi;
        $product->stok = $request->stok;
        $product->berat = $request->berat;
        $product->gambar = $request->gambar;
        $product->kategori_id = $request->kategori_id;
        $product->toko_id = $toko_id;

        $product->save();
        
        return response([
            "status" => "Success",
            "message" => "Data Berhasil Disimpan",
            "data" => $product
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::with(['toko', 'kategori'])->where('id', $id)->get();
        if (count($product) <= 0) {
            return Response()->json([
                "status" => "Failed",
                "message" => "Data Tidak Ditemukan",
            ], 400);
        }
        return Response()->json([
            "status" => "Success",
            "message" => "Data Berhasil Ditampilkan",
            "data" => $product,
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
        $product = Product::where('id', $id)->get();
        if (count($product) <= 0) {
            return Response()->json([
                "status" => "Failed",
                "message" => "Data Tidak Ditemukan",
            ], 400);
        }

        $validation = Validator::make($request->all(), [
            'nama' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',
            'stok' => 'required',
            'berat' => 'required',
            'gambar' => 'mimes:jpg,png,jpeg,svg',
            'kategori_id' => 'required',
        ]);

        if ($validation->fails()) {
            return Response()->json([
                "status" => "Required",
                "messege" => $validation->errors(),
            ], 400);
        }
        
        $toko_id = Auth::id();

        $product = Product::find($id);
        $product->nama = $request->nama;
        $product->harga = $request->harga;
        $product->deskripsi = $request->deskripsi;
        $product->stok = $request->stok;
        $product->berat = $request->berat;
        $product->gambar = $request->gambar;
        $product->kategori_id = $request->kategori_id;
        $product->toko_id = $toko_id;

        $product->save();
        return Response()->json([
            "status" => "Success",
            "message" => "Data Berhasil Dirubah",
            "data" => $product,
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
        $product = Product::find($id);
        if (!$product) {
            return Response()->json([
                "status" => "Not Found",
                "message" => "Data Tidak Ditemukan",
            ], 400);
        }

        $product->delete();

        return Response()->json([
            "status" => "Success",
            "message" => "Data Berhasil Dihapus",
        ], 200);
    }

    public function getByToko($id)
    {
        $product = Product::with(['toko', 'kategori'])->where('toko_id', $id)->get();
        if (count($product) <= 0) {
            return Response()->json([
                "status" => "Failed",
                "message" => "Data Tidak Ditemukan",
            ], 400);
        }
        return Response()->json([
            "status" => "Success",
            "message" => "Data Berhasil Ditampilkan",
            "data" => $product,
        ], 200);
    }
    
}
