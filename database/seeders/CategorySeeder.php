<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Faker\Factory as Faker; //importamos libreria faker

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $categories = [];

        foreach (range(1, 5) as $index) {
            $categories[] = [
                'name' => $faker->text(20), //
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }
    DB::table('categories')->insert($categories);
    }
}