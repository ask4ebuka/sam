<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassScheduleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classSchedule', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('lecturer_id')->unsigned();
			$table->integer('course_id')->unsigned();
			$table->integer('module_id')->unsigned();
			$table->integer('room_id')->unsigned();
			$table->dateTime('start_at');
			$table->integer('duration');
            $table->timestamps();
			
			/* foreign key relationships*/
			$table->foreign('lecturer_id')->references('id')->on('lecturer');
			$table->foreign('room_id')->references('id')->on('room');
			$table->foreign('course_id')->references('id')->on('course');
			$table->foreign('module_id')->references('id')->on('module');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('classSchedule');
    }
}
