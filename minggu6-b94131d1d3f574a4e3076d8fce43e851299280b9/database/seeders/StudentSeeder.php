<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 
class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'nim' => '2031710062',
            'name' => 'Rachma Novita Anggreani',
            'class' => 'MI-2F',
            'department' => 'JTI',
            'phone_number' => '085706469814',
        ]);
        DB::table('students')->insert([
            'nim' => '2031710081',
            'name' => 'Rafika Nurhayati',
            'class' => 'MI-2F',
            'department' => 'JTI',
            'phone_number' => '081998440034',
        ]);
        DB::table('students')->insert([
            'nim' => '2031710042',
            'name' => 'Sarindah Karina BR Sitepu',
            'class' => 'MI-2F',
            'department' => 'JTI',
            'phone_number' => '082267550842',
        ]);
    }
}
