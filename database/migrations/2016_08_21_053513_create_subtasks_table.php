<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubtasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subtasks', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('task_id')->unsigned()->index();
          $table->foreign('task_id')->references('id')->on('tasks')->onDelete('cascade');
          $table->string('name');
          $table->string('slug');
          $table->longtext('desc');
          $table->date('duedate');
          $table->boolean('completed')->default(false);
          $table->timestamps();
          $table->softdeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('subtasks');
    }
}
