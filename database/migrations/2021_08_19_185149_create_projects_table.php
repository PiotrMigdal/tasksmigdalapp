<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
          $table->id();
          $table->string('name');
          $table->text('description')->nullable();
          $table->date('date_created');
          $table->date('date_started')->nullable();
          $table->date('date_completed')->nullable();
          $table->date('due_date')->nullable();
          $table->string('color');
          $table->integer('status_id');
          $table->integer('parent_project_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
