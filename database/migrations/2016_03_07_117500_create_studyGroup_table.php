<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudyGroupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studyGroup', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('sglstudent_id')->unsigned();
			$table->integer('room_id')->unsigned();
			$table->dateTime('use_at');		
			$table->integer('duration');
            $table->timestamps();
			
			/* foreign key relationships*/
			$table->foreign('room_id')->references('id')->on('room');
			$table->foreign('sglstudent_id')->references('id')->on('student');
			
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('studyGroup');
    }
}
