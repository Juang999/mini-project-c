<?php

namespace App\Http\Controllers;

use App\Toko;
use Illuminate\Http\Request;

class TokoControllerAPI extends Controller
{
    public function show($id)
    {
        $toko = Toko::with(['user'])->where('id', $id)->get();
        if (count($toko) <= 0) {
            return Response()->json([
                "status" => "Failed",
                "message" => "Data Tidak Ditemukan",
            ], 400);
        }
        return Response()->json([
            "status" => "Success",
            "message" => "Data Berhasil Ditampilkan",
            "data" => $toko,
        ], 200);
    }
}
