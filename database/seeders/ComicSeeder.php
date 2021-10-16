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
            'name' => 'Tomo 1',
            'author' => 'Haruko Ichikawa',
            'price' => '19.99',
            'description' => 'Sinopsis de Houseki no Kuni',
            'publisher' => 'Sueshia',
            'type' => 'Tapa dura',
            'edition' => 'Primero',
            'image' => 'https://i.imgur.com/iuGTy0v.jpg',
            'state' => '1',
        ]);

        DB::table('comics')->insert([
            'tag_id' => 1,
            'collection_id' => 1,
            'name' => 'Tomo 2',
            'author' => 'Haruko Ichikawa',
            'price' => '19.99',
            'description' => 'Sinopsis de Houseki no Kuni',
            'publisher' => 'Sueshia',
            'type' => 'Tapa dura',
            'edition' => 'Primero',
            'image' => 'https://i.imgur.com/iuGTy0v.jpg',
            'state' => '1',
        ]);

        DB::table('comics')->insert([
            'tag_id' => 1,
            'collection_id' => 1,
            'name' => 'Tomo 3',
            'author' => 'Haruko Ichikawa',
            'price' => '19.99',
            'description' => 'Sinopsis de Houseki no Kuni',
            'publisher' => 'Sueshia',
            'type' => 'Tapa dura',
            'edition' => 'Primero',
            'image' => 'https://i.imgur.com/iuGTy0v.jpg',
            'state' => '1',
        ]);

        DB::table('comics')->insert([
            'tag_id' => 1,
            'collection_id' => 1,
            'name' => 'Tomo 4',
            'author' => 'Haruko Ichikawa',
            'price' => '19.99',
            'description' => 'Sinopsis de Houseki no Kuni',
            'publisher' => 'Sueshia',
            'type' => 'Tapa dura',
            'edition' => 'Primero',
            'image' => 'https://i.imgur.com/iuGTy0v.jpg',
            'state' => '1',
        ]);

        DB::table('comics')->insert([
            'tag_id' => 1,
            'collection_id' => 1,
            'name' => 'Tomo 5',
            'author' => 'Haruko Ichikawa',
            'price' => '19.99',
            'description' => 'Sinopsis de Houseki no Kuni',
            'publisher' => 'Sueshia',
            'type' => 'Tapa dura',
            'edition' => 'Primero',
            'image' => 'https://i.imgur.com/iuGTy0v.jpg',
            'state' => '1',
        ]);

        DB::table('comics')->insert([
            'tag_id' => 1,
            'collection_id' => 1,
            'name' => 'Tomo 6',
            'author' => 'Haruko Ichikawa',
            'price' => '19.99',
            'description' => 'Sinopsis de Houseki no Kuni',
            'publisher' => 'Sueshia',
            'type' => 'Tapa dura',
            'edition' => 'Primero',
            'image' => 'https://i.imgur.com/iuGTy0v.jpg',
            'state' => '1',
        ]);

        DB::table('comics')->insert([
            'tag_id' => 1,
            'collection_id' => 1,
            'name' => 'Tomo 7',
            'author' => 'Haruko Ichikawa',
            'price' => '19.99',
            'description' => 'Sinopsis de Houseki no Kuni',
            'publisher' => 'Sueshia',
            'type' => 'Tapa dura',
            'edition' => 'Primero',
            'image' => 'https://i.imgur.com/iuGTy0v.jpg',
            'state' => '1',
        ]);
    }
}
