<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TokoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tokos')->insert([
            'nama_toko' => 'Prodota',
            'user_id' => '1',
            'logo' => 'logo1.png',
        ]);

        DB::table('tokos')->insert([
            'nama_toko' => 'Kizaru',
            'user_id' => '2',
            'logo' => 'logo2.png',
        ]);
    }
}
