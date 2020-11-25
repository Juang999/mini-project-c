<?php

namespace App\Http\Controllers;

use App\Product;
use App\Kategori;
use Illuminate\Http\Request;

class homeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $Product = Product::all();

        return view('home', compact('Product'));
    }

}
