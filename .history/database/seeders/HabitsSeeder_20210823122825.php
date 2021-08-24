<?php

namespace Database\Seeders;

use App\Models\Habits;
use Illuminate\Database\Seeder;

class HabitsSeeder extends Seeder
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
          Habits::create([
            "name" => $faker->sentence($nbWords = 3, $variableNbWords = true),
            "description" => $faker->sentence($nbWords = 7, $variableNbWords = true),
            "date_created" => $faker->dateTime($max = "now", $timezone = null),
            "date_started" => $faker->dateTime($max = "now", $timezone = null),
            "date_completed" => $faker->boolean(50) ? $faker->dateTime($max = "now", $timezone = null) : null,
            "due_date" => $faker->dateTime($max = "2021-11-11", $timezone = null)
          ]);
        }
    }
}

$table->id();
$table->string('name');
$table->text('description')->nullable();
$table->date('date_created');
$table->date('date_started')->nullable();
$table->date('date_completed')->nullable();
$table->date('due_date')->nullable();