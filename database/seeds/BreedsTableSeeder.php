<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BreedsTableSeeder extends Seeder
{
    public function run() {
       /*  DB::table('breeds')->insert([
            ['id' => 1, 'name' => 'Domestic'],
            ['id' => 2, 'name' => 'Persian'],
            ['id' => 3, 'name' => 'Siamese'],
            ['id' => 4, 'name' => 'Abyssinian']
        ]); */

        factory(Furbook\Breed::class, 4) ->create();
    }
}