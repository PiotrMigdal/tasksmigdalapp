<?php

namespace Database\Seeders;

use App\Models\Projects;
use Illuminate\Database\Seeder;

class ProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        // $table->id();
        // $table->string('name');
        // $table->text('description');
        // $table->date('date_created');
        // $table->date('date_started');
        // $table->date('date_completed');
        // $table->date('due_date');
        // $table->integer('color');
        // $table->integer('status_id');
        // $table->integer('parent_project_id');

        $faker = \Faker\Factory::create();

        for($i = 0, $i < 10, $i++){
          Projects::create([
            "name" => $faker->sentence($nbWords = 3, $variableNbWords = true),
            "descritpion" => $faker->sentence($nbWords = 7, $variableNbWords = true),
            "date_created" => $faker->dateTime($max = "now", $timezone = null),
            "date_started" => $faker->dateTime($max = "now", $timezone = null),
            //boolean(50) so 50% chance there will be a value and 50% chance of null
            "date_completed" => boolean(50) ? dateTime($max = "now", $timezone = null) : null,
            "due_date" => $faker->dateTime($max = "2021-11-11", $timezone = null),
            "color" => $faker->hexColor(),
            "status_id" => $faker->numberBetween($min = 1, $max = 5),
            "parent_project_id" => boolean(50) ? $faker->randomDigitNot($i) : null

          ]);
        }
    }
}
