<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateManagerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('managerer', function (Blueprint $table) {
            $table->increments('id');
			$table->string('manager_fname');
			$table->string('manager_lname');
			$table->integer('contact_id')->unsigned();
			$table->integer('user_id')->unsigned();
            $table->timestamps();
			
			
			/* foreign key relationships*/
			$table->foreign('contact_id')->references('id')->on('contact');
			$table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('managerer');
    }
}
