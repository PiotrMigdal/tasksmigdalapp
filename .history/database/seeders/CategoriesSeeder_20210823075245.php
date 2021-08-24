<?php

namespace Database\Seeders;

use App\Models\Categories;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        for($i = 0; $i <5; $i++) {
          Categories::create([
            "name" => $faker->word,
            "description" => $faker->sentence($nbWords = 4, $variableNbWords = true),
            "color" => $faker->hexColor()
          ]);
        }
    }
}
