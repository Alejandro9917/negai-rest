<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clients')->insert([
            'name' => 'Erick',
            'last_name' => 'Arevalo',
            'phone' => '12345678',
            'address' => 'En una casa por la montaña',
            'email' => 'erick@gmail.com',
            'password' => Hash::make('password'),
        ]);
    }
}
