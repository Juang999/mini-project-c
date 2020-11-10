<?php

namespace App\Http\Controllers;

use App\Product;
use App\User;
use Illuminate\Http\Request;

class APIController extends Controller
{
    public function getDataByUser()
{
    // $producs = Product::orderBy('created_at', 'DESC')->get();
    $producs = Product::with(['user', 'kategori'])->get();
    return response()->json(['data' => $producs]);
}
}
