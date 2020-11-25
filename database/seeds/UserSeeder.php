<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            'password' => Hash::make('password'),
            'alamat' => 'Purwokerto',
            'no_hp' => '085696560548',
        ]);

        DB::table('users')->insert([
            'name' => 'Admin',
            'role_id' => '2',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'alamat' => 'Purwokerto',
            'no_hp' => '085696560546',
        ]);
    }
}
