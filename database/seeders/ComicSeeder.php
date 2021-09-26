<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comics')->insert([
            'tag_id' => 1,
            'collection_id' => 1,
            'name' => 'Tomo 1: Land of Lustros',
            'author' => 'Haruko Ichikawa',
            'price' => '19.99',
            'description' => 'Sinopsis de Houseki no Kuni',
            'publisher' => 'Sueshia',
            'type' => 'Tapa dura',
            'edition' => 'Primero',
            'image' => 'url imagen',
            'state' => '1',
        ]);

        for ($i=0; $i < 10; $i++) { 
            DB::table('comics')->insert([
                'tag_id' => 1,
                'collection_id' => 1,
                'name' => Str::random(10),
                'author' => Str::random(10),
                'price' => Str::random(10),
                'description' => Str::random(10),
                'publisher' => Str::random(10),
                'type' => Str::random(10),
                'edition' => Str::random(10),
                'image' => Str::random(10),
                'state' => '1',
            ]);
        }
    }
}
