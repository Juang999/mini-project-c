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
            'nama_toko' => 'Alivoice',
            'user_id' => '1',
            'logo' => 'https://iili.io/FqYz1S.jpg',
        ]);

    }
}
