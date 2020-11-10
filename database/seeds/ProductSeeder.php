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
            'nama' => 'Baju Mickeymouse2',
            'harga' => '50000',
            'deskripsi' => 'baju yang terbuat dari bahan katun',
            'stok' => 15,
            'berat' => 0.25,
            'gambar' => 'photo6140775993523153818.jpg',
            'kategori_id' => 1,
            'user_id' => 1
        ], [
            'nama' => 'Baju Mickeymouse merah',
            'harga' => '60000',
            'deskripsi' => 'baju yang terbuat dari bahan yang halus dan bermutu',
            'stok' => 15,
            'berat' => 0.25,
            'gambar' => 'photo6140775993523153823.jpg',
            'kategori_id' => 1,
            'user_id' => 1
        ], [
            'nama' => 'Baju Minimouse',
            'harga' => '50000',
            'deskripsi' => 'baju yang terbuat dari bahan kain',
            'stok' => 15,
            'berat' => 0.25,
            'gambar' => 'photo6140775993523153824.jpg',
            'kategori_id' => 1,
            'user_id' => 1
        ], [
            'nama' => 'Baju mickeymouse putih',
            'harga' => '50000',
            'deskripsi' => 'baju yang terbuat dari bahan campuran katun dan sutra',
            'stok' => 15,
            'berat' => 0.25,
            'gambar' => 'photo6140775993523153826.jpg',
            'kategori_id' => 1,
            'user_id' => 1
        ], [
            'nama' => 'Baju mickeymouse kuning',
            'harga' => '50000',
            'deskripsi' => 'baju yang terbuat dari bahan campuran katun dan sutra',
            'stok' => 15,
            'berat' => 0.25,
            'gambar' => 'photo6140775993523153827.jpg',
            'kategori_id' => 1,
            'user_id' => 1
        ], [
            'nama' => 'Baju mickeymouse family',
            'harga' => '50000',
            'deskripsi' => 'baju yang terbuat dari bahan campuran katun dan sutra',
            'stok' => 15,
            'berat' => 0.25,
            'gambar' => 'photo6140775993523153828.jpg',
            'kategori_id' => 1,
            'user_id' => 1
        ], [
            'nama' => 'Baju mickeymouse berdasi',
            'harga' => '50000',
            'deskripsi' => 'baju yang terbuat dari bahan campuran katun dan sutra',
            'stok' => 15,
            'berat' => 0.25,
            'gambar' => 'photo6140775993523153829.jpg',
            'kategori_id' => 1,
            'user_id' => 1
        ], [
            'nama' => 'Baju mickeymouse hitam bercorak',
            'harga' => '50000',
            'deskripsi' => 'baju yang terbuat dari bahan campuran katun dan sutra',
            'stok' => 15,
            'berat' => 0.25,
            'gambar' => 'photo6140775993523153830.jpg',
            'kategori_id' => 1,
            'user_id' => 1
        ], [
            'nama' => 'Baju winnie the pooh',
            'harga' => '50000',
            'deskripsi' => 'baju yang terbuat dari bahan campuran katun dan sutra',
            'stok' => 15,
            'berat' => 0.25,
            'gambar' => 'photo6140775993523153831.jpg',
            'kategori_id' => 1,
            'user_id' => 1
        ], [
            'nama' => 'Baju tengkorak hitam',
            'harga' => '50000',
            'deskripsi' => 'baju yang terbuat dari bahan campuran katun dan sutra',
            'stok' => 15,
            'berat' => 0.25,
            'gambar' => 'photo6140775993523153832.jpg',
            'kategori_id' => 1,
            'user_id' => 1
        ], [
            'nama' => 'Baju hitam bercorak daun',
            'harga' => '50000',
            'deskripsi' => 'baju yang terbuat dari bahan campuran katun dan sutra',
            'stok' => 15,
            'berat' => 0.25,
            'gambar' => 'photo6140775993523153833.jpg',
            'kategori_id' => 1,
            'user_id' => 1
        ], [
            'nama' => 'Baju putih burung hantu',
            'harga' => '50000',
            'deskripsi' => 'baju yang terbuat dari bahan campuran katun dan sutra',
            'stok' => 15,
            'berat' => 0.25,
            'gambar' => 'photo6140775993523153834.jpg',
            'kategori_id' => 1,
            'user_id' => 1
        ], [
            'nama' => 'Baju Nobita',
            'harga' => '50000',
            'deskripsi' => 'baju yang terbuat dari bahan campuran katun dan sutra',
            'stok' => 15,
            'berat' => 0.25,
            'gambar' => 'photo6140775993523153835.jpg',
            'kategori_id' => 1,
            'user_id' => 1
        ], [
            'nama' => 'Baju Gambar Naruto',
            'harga' => '50000',
            'deskripsi' => 'baju yang terbuat dari bahan campuran katun dan sutra',
            'stok' => 15,
            'berat' => 10.5,
            'gambar' => 'photo6140775993523153836.jpg',
            'kategori_id' => 1,
            'user_id' => 1
        ], [
            'nama' => 'Baju Bomboogie',
            'harga' => '50000',
            'deskripsi' => 'baju yang terbuat dari bahan campuran katun dan sutra',
            'stok' => 15,
            'berat' => 0.25,
            'gambar' => 'photo6140775993523153837.jpg',
            'kategori_id' => 1,
            'user_id' => 1
        ], [
            'nama' => 'Baju bomboogie biru tua',
            'harga' => '50000',
            'deskripsi' => 'baju yang terbuat dari bahan campuran katun dan sutra',
            'stok' => 15,
            'berat' => 0.25,
            'gambar' => 'photo6140775993523153838.jpg',
            'kategori_id' => 1,
            'user_id' => 1
        ], [
            'nama' => 'Baju pull & bear',
            'harga' => '50000',
            'deskripsi' => 'baju yang terbuat dari bahan campuran katun dan sutra',
            'stok' => 15,
            'berat' => 0.25,
            'gambar' => 'photo6140775993523153839.jpg',
            'kategori_id' => 1,
            'user_id' => 1
        ], [
            'nama' => 'Baju Corak harimau',
            'harga' => '50000',
            'deskripsi' => 'baju yang terbuat dari bahan campuran katun dan sutra',
            'stok' => 15,
            'berat' => 0.25,
            'gambar' => 'photo6140775993523153840.jpg',
            'kategori_id' => 1,
            'user_id' => 1
        ], [
            'nama' => 'Baju Mario bross',
            'harga' => '50000',
            'deskripsi' => 'baju yang terbuat dari bahan campuran katun dan sutra',
            'stok' => 15,
            'berat' => 0.25,
            'gambar' => 'photo6140775993523153841.jpg',
            'kategori_id' => 1,
            'user_id' => 1
        ]]);
    }
}
