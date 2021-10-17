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
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('clients')->insert([
            'name' => 'Samuel',
            'last_name' => 'Lopez',
            'phone' => '22997755',
            'address' => 'En una casa por la montaña',
            'email' => 'samuel@gmail.com',
            'password' => Hash::make('password'),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('clients')->insert([
            'name' => 'Luis',
            'last_name' => 'Cañaz',
            'phone' => '14587236',
            'address' => 'En una casa por la montaña',
            'email' => 'luis@gmail.com',
            'password' => Hash::make('password'),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
    }
}
