<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student', function (Blueprint $table) {
            $table->increments('id');
			$table->string('student_fname');
			$table->string('student_lname');
			$table->Integer('contact_id')->unsigned();
			$table->integer('user_id')->unsigned();
            $table->timestamps();
			
			/* foreign key relationships*/
			$table->foreign('user_id')->references('id')->on('users');
			$table->foreign('contact_id')->references('id')->on('contact');
			
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('student');
    }
}
