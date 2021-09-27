<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            'tag' => Str::random(10),
        ]);

        DB::table('tags')->insert([
            'tag' => Str::random(10),
        ]);

        DB::table('tags')->insert([
            'tag' => Str::random(10),
        ]);

        DB::table('tags')->insert([
            'tag' => Str::random(10),
        ]);

        DB::table('tags')->insert([
            'tag' => Str::random(10),
        ]);
    }
}
