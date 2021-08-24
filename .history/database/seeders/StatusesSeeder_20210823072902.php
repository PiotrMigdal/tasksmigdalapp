<?php

namespace Database\Seeders;

use App\Models\Statuses;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class StatusesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    private $statuses = ["Open" => "0", "In Progress" => "0", "Hold" => "0", "Completed" => "100", "Overdue" => "0"];

    public function run()
    {
        $faker = \Faker\Factory::create();
      foreach ($this->statuses as $name => $percent) {
        Statuses::create([
          "name" => $name,
          "percent_progress" => $percent
        ]);
      }
    }
}
