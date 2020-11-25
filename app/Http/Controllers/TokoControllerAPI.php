<?php

namespace App\Http\Controllers;

use App\Toko;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

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

    public function tokoSaya()
    {
        $id = Auth::id();

        $toko = Toko::with(['user'])->where('id', $id)->get();
        if (count($toko) <= 0) {
            return Response()->json([
                "status" => "Failed",
                "message" => "Belum membuat toko",
            ], 400);
        }
        return Response()->json([
            "status" => "Success",
            "message" => "Data Berhasil Ditampilkan",
            "data" => $toko,
        ], 200);
    }

    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'nama_toko' => 'required|unique:tokos',
            'logo' => 'mimes:jpg,png,jpeg,svg',
        ]);

        if ($validation->fails()) {
            return Response()->json([
                "status" => "Required",
                "messege" => $validation->errors(),
            ], 400);
        }

        $client = new Client();
        $user_id = Auth::id();

        $toko = new Toko();
        $toko->nama_toko = $request->nama_toko;
        $toko->user_id = $user_id;
        $logo = base64_encode(file_get_contents($request->file('logo')));
        $response = $client->request('POST', 'https://freeimage.host/api/1/upload', [
            'form_params' => [
                'key' => '6d207e02198a847aa98d0a2a901485a5',
                'action' => 'upload',
                'source' => $logo,
                'format' => 'json',
            ]
        ]);
        $body = $response->getBody();
        $response =  json_decode($body);
        $toko->logo = $response->image->display_url;
        $toko->save();
        
        return response([
            "status" => "Success",
            "message" => "Data Berhasil Disimpan",
            "data" => $toko
        ], 200);
    }
}
