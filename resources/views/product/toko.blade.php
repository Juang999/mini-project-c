@extends('layouts.app')

@section('content')

    <div class="container">

        <ul class="list-group mt-3">
            {{ $toko->nama_toko }}
            @foreach ($products as $product)

                <li class="list-group-item active">{{ $product->nama }}</li>
                <li class="list-group-item">{{ $product->kategori->kategori }}</li>
                <li class="list-group-item">{{ $product->harga }}</li>
                <li class="list-group-item">{{ $product->deskripsi }}</li>
                <li class="list-group-item">{{ $product->stok }}</li>
                <li class="list-group-item">{{ $product->berat }}</li>
                <a href="/toko/{{ $product->toko->nama_toko }}">
                    <li class="list-group-item">{{ $product->toko->nama_toko }}</li>
                </a>
            @endforeach
        </ul>
    </div>

@endsection
