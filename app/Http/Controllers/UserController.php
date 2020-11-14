<?php

namespace App\Http\Controllers;

use App\Image;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // mengambil data dari table user
        $users = User::all();

        // mengirim data user ke view index
        return view('user.index', compact('users'));
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // mengambil data artikel berdasarkan id yang dipilih
        $user = User::find($id);
        // mengirim data artikel yang didapat ke view edit.blade.php
        return view('user.edit', compact('user'));
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
        
        // $extension = $request->file('avatar')->extension();
        // $imgname = date('dmyHis'). '.' . $extension;
        // $this->validate($request, [ 'avatar' => 'file|max:5000']);
        // $path = Storage::putFileAs('public/images', $request->file('avatar'), $imgname);
        // User::create([ 'avatar' => $imgname ]);
        
        // validasi agar form wajib diisi
        $request->validate([
            'name' => 'required',
            ]);
            
            // update data artikel
            $user = User::find($id);
            $user->name = $request->name;
            // $user->avatar = $request->avatar;
            $user->alamat = $request->alamat;
            $user->no_hp = $request->no_hp;
            $user->save();
            
            // alihkan ke halaman utama
            // return redirect()->back()->withSuccess("image sucess uploaded in " . $path);


        // return redirect('');
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
