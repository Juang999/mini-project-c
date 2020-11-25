<?php

namespace App\Http\Controllers;

use App\User;
use App\Toko;
use App\Product;
use Illuminate\Http\Request;

class SudoController extends Controller
{

    public function home()
    {
        return view('home');
    }

    public function index()
    {
        $user = User::all()->where('role_id',1);
        return view('super.user', ['user' => $user]);
    }
    
    public function show($user)
    {
        $toko_id = Toko::where('user_id', $user)->first();
        $toko_id = $toko_id->id;
        
        $user = User::where('id', $user)->first();

        $products = Product::where('toko_id', $toko_id)->get();

        return view('super.detail', compact('user', 'products'));
    }

    public function destroy($user)
    {
        $toko_id = Toko::where('user_id', '=', $user)->first();
        $toko_id = $toko_id->id;

        $product_id = Product::where('toko_id', $toko_id)->get();
        foreach($product_id as $item){
            Product::destroy($item->id);
        }

        Toko::destroy($toko_id);

        User::destroy($user);
        
        return redirect('/user')->with('status', 'user berhasil dihapus');
    }

    public function dashboard()
    {
        return view('layouts.master');
    }

}
