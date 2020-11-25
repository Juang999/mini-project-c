@extends('layouts.master')

@section('title', 'Detail')

@section('nav', 'Detail')

@section('content')
<div class="container">
    <h1>Detail User</h1>
        <div class="card mb-5">
            <div class="card-body">
                <ul>
                    <li class="mt-3">Nama : {{ $user->name }}</li>
                    <li>Role id : {{ $user->role_id }}</li>
                    <li>Email : {{ $user->email }} <br>
                    <a href="/user" class="btn btn-outline-dark mt-4"><i class="fa fa-reply"> | Back</i></a>
                    </li>
                </ul>
            </div>
        </div>
</div>
<div class="flex-container">
<section class="content">
    <div class="container-fluid">
      <div class="row">
          @foreach($products as $item)
            <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Barang Dagangan</h3>
                    </div>
                    <div class="card-body">
                    <table class="table table-bordered">
                        <thead>                  
                        <tr>
                            <th>Kriteria</th>
                            <th>keterangan</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Nama Produk</td>
                            <td>{{ $item->nama }}</td>
                        </tr>
                        <tr>
                            <td>Harga</td>
                            <td>{{ $item->harga }}</td>
                        </tr>
                        <tr>
                            <td>Terjual</td>
                            <td>{{ $item->terjual }}</td>
                        </tr>
                        <tr>
                            <td>Halaman</td>
                            <td>{{ $item->halaman }}</td>
                        </tr>
                        <tr>
                            <td>Publisher</td>
                            <td>{{ $item->publisher }}</td>
                        </tr>
                        <tr>
                            <td>Stok</td>
                            <td>{{ $item->stok }}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
          @endforeach
      </div>
    </div>
</div>
  </section>
@endsection