<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        	/*
        Schema::create('entries', function($newtable)
	{
		$newtable->increments('id');
		$newtable->string('Name');
		$newtable->string('Address');
		$newtable->string('Phone');
		$newtable->string('Email');
		$newtable->string('Relation');
		$newtable->string('Notes');
	});
			 */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::drop('art');
    }
}
