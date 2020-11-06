<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Faker\Factory as Faker; //se importa la librería de faker

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();   //creamos la instancia de faker
        $products = [];
        
        foreach (range(1, 20) as $index) {
            $products[] = [
                'name' => "Product $index",
                'price' => $faker->randomDigitNot(0) * 100, //asignamos algun valor con faker, php artisan migrate:fresh --sed
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }
    
    DB::table('products')->insert($products);
    }
}
