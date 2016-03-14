<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeminarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seminar', function (Blueprint $table) {
            $table->increments('id');
			$table->string('seminar_name');	
			$table->string('seminar_topic');
			$table->string('seminar_locaton');
			$table->dateTime('seminar_at');
			$table->integer('room_id')->unsigned();
			$table->integer('lecturer_id')->unsigned();
			$table->integer('duration');
            $table->timestamps();
			
			/* foreign key relationships*/
			$table->foreign('lecturer_id')->references('id')->on('lecturer');
			$table->foreign('room_id')->references('id')->on('room');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('seminar');
    }
}
