<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kategoris')->insert([
            'kategori' => 'Novel',
        ]);

        DB::table('kategoris')->insert([
            'kategori' => 'Komik',
        ]);

        DB::table('kategoris')->insert([
            'kategori' => 'Agama',
        ]);

        DB::table('kategoris')->insert([
            'kategori' => 'Pelajaran',
        ]);
    }
}
