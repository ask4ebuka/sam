<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttendanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendance', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('student_id')->unsigned();
			$table->integer('room_id')->unsigned();
			$table->integer('course_id')->unsigned();
			$table->dateTime('checkIn_at');
            $table->timestamps();
			
			
			/* foreign key relationships*/
			$table->foreign('student_id')->references('id')->on('student');
			$table->foreign('room_id')->references('id')->on('room');
			$table->foreign('course_id')->references('id')->on('course');
			
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('attendance');
    }
}
