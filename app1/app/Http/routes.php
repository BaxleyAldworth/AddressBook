<?php




/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () { //slash is the homepage, function() means we're inlining it
	
	/*
	Schema::table('entries', function($table)
	{
		$table->date('updated_at');
		$table->date('created_at');
	});
	*/
	 
	/*
	$entry = new Entry;
	$entry->Name = 'Bobby Hill';
	$entry->Address = '21 Ladybird St., Arlen, Texas 59244';
	$entry->Phone = '756-883-3385';
	$entry->Email = 'bobhill@gmail.com';
	$entry->Relation = 'Colleague';
	$entry->Notes = 'Works the night shift.';
	$entry->save();
	*/
	 
	return "Hello";
	//return View::make('hello');
});

Route::get('/about', function(){
	return view ('pages/about'); //look in resources/views/pages/about.blade.php | pages/about can also be pages.about
});
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //Route::get('posts', 'PostsController@index');
	//Route::get('create', 'PostsController@create');
	//Route::post('posts', 'PostsController@store');
	//Route::get('posts/{id}/edit', 'PostsController@edit');
	Route::resource('posts', 'PostsController');
});
