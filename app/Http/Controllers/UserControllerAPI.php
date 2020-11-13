<?php

namespace App\Http\Controllers;

use App\User;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class UserControllerAPI extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        try {
            if (! $token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'invalid_credentials'], 400);
            }
        } catch (JWTException $e) {
            return response()->json(['error' => 'could_not_create_token'], 500);
        }

        return response()->json(compact('token'));
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors()->toJson(), 400);
        }

        $user = User::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password')),
        ]);

        $token = JWTAuth::fromUser($user);

        return response()->json(compact('user','token'),201);
    }

    public function getAuthenticatedUser()
    {
        try {

            if (! $user = JWTAuth::parseToken()->authenticate()) {
                return response()->json(['user_not_found'], 404);
            }

        } catch (Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {

            return response()->json(['token_expired'], $e->getStatusCode());

        } catch (Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {

            return response()->json(['token_invalid'], $e->getStatusCode());

        } catch (Tymon\JWTAuth\Exceptions\JWTException $e) {

            return response()->json(['token_absent'], $e->getStatusCode());

        }

        return response()->json(compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::where('id', $id)->get();
        if (count($user) <= 0) {
            return Response()->json([
                "status" => "Failed",
                "message" => "Data Tidak Ditemukan",
            ], 400);
        }

        $validation = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'avatar' => 'mimes:jpg,png,jpeg,svg',
            
        ]);

        if ($validation->fails()) {
            return Response()->json([
                "status" => "Required",
                "messege" => $validation->errors(),
            ], 400);
        }

        $user = User::find($id);
        $client = new Client();
        
        $avatar = base64_encode(file_get_contents($request->file('avatar')));
        $user->name = $request->name;
        $user->alamat = $request->alamat;
        $user->no_hp = $request->no_hp;

        $response = $client->request('POST', 'https://freeimage.host/api/1/upload', [
            'form_params' => [
                'key' => '6d207e02198a847aa98d0a2a901485a5',
                'action' => 'upload',
                'source' => $avatar,
                'format' => 'json',
            ]
        ]);
        $body = $response->getBody();
        $response =  json_decode($body);

        $user->avatar = $response->image->display_url;

        $user->save();
        return Response()->json([
            "status" => "Success",
            "message" => "Data Berhasil Dirubah",
            "data" => $user,
        ], 200);
    }
}