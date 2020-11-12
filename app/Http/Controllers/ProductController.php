<?php

namespace App\Http\Controllers;

use App\Product;
use App\Toko;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // mengambil data dari table product
        $products = Product::all();

        // mengirim data product ke view index
        return view('product.index', compact('products'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // cari artikel berdasarkan slug
        $product = Product::where('id', $id)->first();

        // jika artikel tidak ditemukan maka tampilkan error
        if ($product == null)
            abort(404);

        // alihkan ke halaman artikel tunggal
        return view('product.single', compact('product'));
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

    public function getByToko($id)
    {
        $products = Product::where('toko_id', $id)->get();
        $toko = Toko::where('id', $id)->first();
        $nama_toko = $toko->nama_toko;
        return view('product.toko', compact('products', 'toko'));
    }
}
