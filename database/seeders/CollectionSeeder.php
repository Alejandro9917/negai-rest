<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CollectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('collections')->insert([
            'name' => 'Houseki no Kuni',
        ]);

        DB::table('collections')->insert([
            'name' => 'Houseki no Kuni',
        ]);

        DB::table('collections')->insert([
            'name' => 'Naruto',
        ]);
        
        DB::table('collections')->insert([
            'name' => 'Spider Man',
        ]);

        DB::table('collections')->insert([
            'name' => 'Vinland Saga',
        ]);
    }
}
