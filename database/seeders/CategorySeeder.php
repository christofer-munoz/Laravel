<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (range(1, 5) as $index) {
            $categories[] = [
                'name' => "Category $index",
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }
    
    DB::table('categories')->insert($categories);
    }
}