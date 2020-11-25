@extends('layouts.app')

@section('content')

    @foreach ($products as $product)
        <div class="container">
            <ul class="list-group mt-3">
                <a href="/product/{{ $product->id }}">
                    <li class="list-group-item active">{{ $product->nama }}</li>
                </a>
                <li class="list-group-item"><img src="{{ $product->gambar }}" alt="" width="200px"></li>
                <li class="list-group-item">{{ $product->kategori->kategori }}</li>
                <li class="list-group-item">{{ $product->harga }}</li>
                <li class="list-group-item">{{ $product->deskripsi }}</li>
                <li class="list-group-item">{{ $product->stok }}</li>
                <li class="list-group-item">{{ $product->berat }}</li>
                <li class="list-group-item">{{ $product->toko->nama_toko }}</li>
            </ul>
        </div>
    @endforeach

@endsection
