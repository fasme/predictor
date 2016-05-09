<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('login');
});


Route::get("index", function(){
	return view("index");
});

Route::get('prueba', function () {
    return view('prueba');
});


Route::get("torneo/{id}", function($id)
{
	//return $id;
	return view("torneo")->with("id",$id);
});




Route::group(array('prefix' => 'api'), function() {

    // since we will be using this just for CRUD, we won't need create and edit
    // Angular will handle both of those forms
    // this ensures that a user can't access api/create or api/edit when there's nothing there}

    // index -> GET
    // store -> POST
    // destroy -> 
    Route::resource('comments', 'VideoController', array('only' => array('index', 'store', 'destroy')));
  

  	Route::post("login",'LoginController@index');
});


