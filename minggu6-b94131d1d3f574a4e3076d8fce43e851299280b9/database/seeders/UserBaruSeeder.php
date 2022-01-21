<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserBaruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'Rachma Novita',
            'name' => 'Novita',
            'email' => 'novitarachma@gmail.com',
            'password' => Hash::make('vita18'),
        ]);
    }
}
