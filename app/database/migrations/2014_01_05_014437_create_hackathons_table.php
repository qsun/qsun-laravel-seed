<?php

use Illuminate\Database\Migrations\Migration;

class CreateHackathonsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('hackathons', function ($table) {
                $table->increments('id');
                $table->timestamps();
                $table->string('title');
                $table->string('description');
                $table->string('location');
                $table->integer('category_id');
                $table->integer('views')->default(0);
                $table->string('availability');
                $table->string('contact');
                $table->string('website');
                $table->string('seo_url')->unique();
            });
		//
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('hackathons');
		//
	}

}