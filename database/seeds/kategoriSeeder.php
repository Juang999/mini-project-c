<?php

use Illuminate\Database\Seeder;

class kategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kategoris')->insert([[
            'kategori' => 'Novel'
        ],[
            'kategori' => 'Story'
        ],[
            'kategori' => 'Pelajaran'
        ],[
            'kategori' => 'Komik'
        ],]);
    }
}
