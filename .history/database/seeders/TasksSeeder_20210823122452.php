<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TasksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = \Faker\Factory::create();
        for ($i = 0; $i < 10; $i++) {
          Projects::create([
            "name" => $faker->sentence($nbWords = 3, $variableNbWords = true),
            "description" => $faker->sentence($nbWords = 7, $variableNbWords = true),
            "date_created" => $faker->dateTime($max = "now", $timezone = null),
            "date_completed" => $faker->boolean(50) ? $faker->dateTime($max = "now", $timezone = null) : null,
            "due_date" => $faker->dateTime($max = "2021-11-11", $timezone = null),
            "status_id" => $faker->numberBetween($min = 1, $max = 5),
            "project_id" => $faker->boolean(50) ? $faker->randomDigitNot($i) : null
          ]);
        }
    }
}
