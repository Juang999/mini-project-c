<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Usman',
            'role_id' => '1',
            'email' => 'usman@gmail.com',
            'password' => 'password',
            'alamat' => 'Purwokerto',
            'no_hp' => '085696560548',
        ]);
    }
}
