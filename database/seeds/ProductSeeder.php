<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([[
            'nama' => 'Dear Allah',
            'harga' => 50000, 
            'Deskripsi' => 'Novel',
            'stok' => 20,
            'terjual' => 0,
            'berat' => 100,
            'gambar' => 'https://iili.io/Fq54cX.jpg',
            'kategori_id' => 1,
            'toko_id' => 1
        ], [
            'nama' => 'Jika Kita Tidak Pernah Jatuh Cinta',
            'harga' => 35000, 
            'Deskripsi' => 'Novel',
            'stok' => 20,
            'terjual' => 0,
            'berat' => 100,
            'gambar' => 'https://iili.io/Fq5DV2.jpg',
            'kategori_id' => 1,
            'toko_id' => 1
        ], [
            'nama' => 'Janur Ireng',
            'harga' => 32000, 
            'Deskripsi' => 'Novel',
            'stok' => 20,
            'terjual' => 0,
            'berat' => 100,
            'gambar' => 'https://iili.io/Fq5sAG.jpg',
            'kategori_id' => 1,
            'toko_id' => 1
        ], [
            'nama' => 'Selena Nebula',
            'harga' => 65000, 
            'Deskripsi' => 'Novel',
            'stok' => 20,
            'terjual' => 0,
            'berat' => 100,
            'gambar' => 'https://iili.io/Fq5bPS.jpg',
            'kategori_id' => 1,
            'toko_id' => 1
        ], [
            'nama' => 'Senja & Pagi',
            'harga' => 40000, 
            'Deskripsi' => 'Novel',
            'stok' => 20,
            'terjual' => 0,
            'berat' => 100,
            'gambar' => 'https://iili.io/Fq5yl9.jpg',
            'kategori_id' => 1,
            'toko_id' => 1
        ], [
            'nama' => 'Rusak Saja Buku Ini',
            'harga' => 30000, 
            'Deskripsi' => 'Novel',
            'stok' => 20,
            'terjual' => 0,
            'berat' => 100,
            'gambar' => 'https://iili.io/Fq7JHu.jpg',
            'kategori_id' => 1,
            'toko_id' => 1
        ], [
            'nama' => 'Wanita Berkarir Surga',
            'harga' => 55000, 
            'Deskripsi' => 'Novel',
            'stok' => 20,
            'terjual' => 0,
            'berat' => 100,
            'gambar' => 'https://iili.io/Fq7IRa.jpg',
            'kategori_id' => 1,
            'toko_id' => 1
        ], [
            'nama' => 'Kisah Tanah Jawa',
            'harga' => 75000, 
            'Deskripsi' => 'Novel',
            'stok' => 20,
            'terjual' => 0,
            'berat' => 100,
            'gambar' => 'https://iili.io/Fq7RxR.jpg',
            'kategori_id' => 1,
            'toko_id' => 1
        ], [
            'nama' => 'My Lecturer My Husband',
            'harga' => 22000, 
            'Deskripsi' => 'Novel',
            'stok' => 20,
            'terjual' => 0,
            'berat' => 100,
            'gambar' => 'https://iili.io/Fq7clt.jpg',
            'kategori_id' => 1,
            'toko_id' => 1
        ], [
            'nama' => 'Mencintaimu Dalam Doa',
            'harga' => 60000, 
            'Deskripsi' => 'Novel',
            'stok' => 20,
            'terjual' => 0,
            'berat' => 100,
            'gambar' => 'https://iili.io/Fq7lUX.jpg',
            'kategori_id' => 1,
            'toko_id' => 1
        ], [
            'nama' => 'Galaksi',
            'harga' => 80000, 
            'Deskripsi' => 'Novel',
            'stok' => 20,
            'terjual' => 0,
            'berat' => 100,
            'gambar' => 'https://iili.io/Fq71Jn.jpg',
            'kategori_id' => 1,
            'toko_id' => 1
        ], [
            'nama' => 'Garis Waktu',
            'harga' => 30000, 
            'Deskripsi' => 'Novel',
            'stok' => 20,
            'terjual' => 0,
            'berat' => 100,
            'gambar' => 'https://iili.io/Fq7XWl.jpg',
            'kategori_id' => 1,
            'toko_id' => 1
        ], [
            'nama' => 'Inquiete',
            'harga' => 30000, 
            'Deskripsi' => 'Novel',
            'stok' => 20,
            'terjual' => 0,
            'berat' => 100,
            'gambar' => 'https://iili.io/Fq7Mbf.jpg',
            'kategori_id' => 1,
            'toko_id' => 1
        ], [
            'nama' => 'Secrets',
            'harga' => 30000, 
            'Deskripsi' => 'Novel',
            'stok' => 20,
            'terjual' => 0,
            'berat' => 100,
            'gambar' => 'https://iili.io/Fq7hs2.jpg',
            'kategori_id' => 1,
            'toko_id' => 1
        ], [
            'nama' => 'Teluk Alaska',
            'harga' => 25000, 
            'Deskripsi' => 'Novel',
            'stok' => 20,
            'terjual' => 0,
            'berat' => 100,
            'gambar' => 'https://iili.io/Fq7wfS.jpg',
            'kategori_id' => 1,
            'toko_id' => 1
        ], [
            'nama' => 'Kamu Terlalu Banyak Bercanda',
            'harga' => 33000, 
            'Deskripsi' => 'Novel',
            'stok' => 20,
            'terjual' => 0,
            'berat' => 100,
            'gambar' => 'https://iili.io/Fq7rWQ.jpg',
            'kategori_id' => 1,
            'toko_id' => 1
        ], [
            'nama' => 'Next',
            'harga' => 30000, 
            'Deskripsi' => 'Novel',
            'stok' => 20,
            'terjual' => 0,
            'berat' => 100,
            'gambar' => 'https://iili.io/Fq7PqB.jpg',
            'kategori_id' => 1,
            'toko_id' => 1
        ]]);
    }
}
