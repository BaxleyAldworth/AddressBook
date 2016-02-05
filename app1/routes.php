
<?php

    Route::get('/', function()
{
	Schema::create('art', function($newtable)
	{
		$newtable->increments('id');
		$newtable->string('artist');
		$newtable->string('title', 500);
		$newtable->text('description');
		$newtable->date('created');
		$newtable->date('exhibition_date');
		$newtable->timestamps();
	});
		
	return View::make('hello');
});


Route::get('about', function()
{
	return 'About content goes here.';
});
