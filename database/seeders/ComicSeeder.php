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
            'description' => 'Houseki no Kuni se establece en un futuro lejano, en una tierra habitada por formas de vidas inmortales llamadas Houseki(gemas), quienes están hechas de gemas.',
            'publisher' => 'Sueshia',
            'type' => 'Tapa dura',
            'edition' => 'Primero',
            'image' => 'https://i.imgur.com/eEFsjKB.png',
            'state' => '1',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('comics')->insert([
            'tag_id' => 1,
            'collection_id' => 1,
            'name' => 'Tomo 2',
            'author' => 'Haruko Ichikawa',
            'price' => '19.99',
            'description' => 'Houseki no Kuni se establece en un futuro lejano, en una tierra habitada por formas de vidas inmortales llamadas Houseki(gemas), quienes están hechas de gemas.',
            'publisher' => 'Sueshia',
            'type' => 'Tapa dura',
            'edition' => 'Primero',
            'image' => 'https://i.imgur.com/Ti6xuiN.png',
            'state' => '1',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('comics')->insert([
            'tag_id' => 1,
            'collection_id' => 1,
            'name' => 'Tomo 3',
            'author' => 'Haruko Ichikawa',
            'price' => '19.99',
            'description' => 'Houseki no Kuni se establece en un futuro lejano, en una tierra habitada por formas de vidas inmortales llamadas Houseki(gemas), quienes están hechas de gemas.',
            'publisher' => 'Sueshia',
            'type' => 'Tapa dura',
            'edition' => 'Primero',
            'image' => 'https://i.imgur.com/HS8TrpR.png',
            'state' => '1',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('comics')->insert([
            'tag_id' => 1,
            'collection_id' => 1,
            'name' => 'Tomo 4',
            'author' => 'Haruko Ichikawa',
            'price' => '19.99',
            'description' => 'Houseki no Kuni se establece en un futuro lejano, en una tierra habitada por formas de vidas inmortales llamadas Houseki(gemas), quienes están hechas de gemas.',
            'publisher' => 'Sueshia',
            'type' => 'Tapa dura',
            'edition' => 'Primero',
            'image' => 'https://i.imgur.com/75aH4X9.png',
            'state' => '1',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('comics')->insert([
            'tag_id' => 1,
            'collection_id' => 1,
            'name' => 'Tomo 5',
            'author' => 'Haruko Ichikawa',
            'price' => '19.99',
            'description' => 'Houseki no Kuni se establece en un futuro lejano, en una tierra habitada por formas de vidas inmortales llamadas Houseki(gemas), quienes están hechas de gemas.',
            'publisher' => 'Sueshia',
            'type' => 'Tapa dura',
            'edition' => 'Primero',
            'image' => 'https://i.imgur.com/OhVJhUG.png',
            'state' => '1',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('comics')->insert([
            'tag_id' => 1,
            'collection_id' => 1,
            'name' => 'Tomo 6',
            'author' => 'Haruko Ichikawa',
            'price' => '19.99',
            'description' => 'Houseki no Kuni se establece en un futuro lejano, en una tierra habitada por formas de vidas inmortales llamadas Houseki(gemas), quienes están hechas de gemas.',
            'publisher' => 'Sueshia',
            'type' => 'Tapa dura',
            'edition' => 'Primero',
            'image' => 'https://i.imgur.com/mxMcRrH.png',
            'state' => '1',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('comics')->insert([
            'tag_id' => 1,
            'collection_id' => 1,
            'name' => 'Tomo 7',
            'author' => 'Haruko Ichikawa',
            'price' => '19.99',
            'description' => 'Houseki no Kuni se establece en un futuro lejano, en una tierra habitada por formas de vidas inmortales llamadas Houseki(gemas), quienes están hechas de gemas.',
            'publisher' => 'Sueshia',
            'type' => 'Tapa dura',
            'edition' => 'Primero',
            'image' => 'https://i.imgur.com/snxKSRI.png',
            'state' => '1',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('comics')->insert([
            'tag_id' => 2,
            'collection_id' => 2,
            'name' => 'Tomo 1',
            'author' => 'Naoki Urasawa',
            'price' => '19.99',
            'description' => 'La serie sigue los pasos del neurocirujano Kenzo Tenma que desobedece las órdenes del director del hospital, quien le había ordenado operar a un político influyente.',
            'publisher' => 'Sueshia',
            'type' => 'Tapa dura',
            'edition' => 'Remaster',
            'image' => 'https://i.imgur.com/9kO7wVA.png',
            'state' => '1',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('comics')->insert([
            'tag_id' => 3,
            'collection_id' => 3,
            'name' => 'Tomo 1',
            'author' => 'Makoto Yukimura',
            'price' => '19.99',
            'description' => 'Thors, un gran guerrero vikingo, es asesinado en batalla por Askeladd, un mercenario. Thorfinn, hijo de Thors, juró vengarse',
            'publisher' => 'Sueshia',
            'type' => 'Tapa dura',
            'edition' => 'Nueva',
            'image' => 'https://i.imgur.com/yaIpIAb.png',
            'state' => '1',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('comics')->insert([
            'tag_id' => 3,
            'collection_id' => 3,
            'name' => 'Tomo 2',
            'author' => 'Makoto Yukimura',
            'price' => '19.99',
            'description' => 'Thors, un gran guerrero vikingo, es asesinado en batalla por Askeladd, un mercenario. Thorfinn, hijo de Thors, juró vengarse',
            'publisher' => 'Sueshia',
            'type' => 'Tapa dura',
            'edition' => 'Nueva',
            'image' => 'https://i.imgur.com/9pCtPGZ.png',
            'state' => '1',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('comics')->insert([
            'tag_id' => 3,
            'collection_id' => 3,
            'name' => 'Tomo 3',
            'author' => 'Makoto Yukimura',
            'price' => '19.99',
            'description' => 'Thors, un gran guerrero vikingo, es asesinado en batalla por Askeladd, un mercenario. Thorfinn, hijo de Thors, juró vengarse',
            'publisher' => 'Sueshia',
            'type' => 'Tapa dura',
            'edition' => 'Nueva',
            'image' => 'https://i.imgur.com/8aSURR4.png',
            'state' => '1',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
    }
}
