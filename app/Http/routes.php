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



Route::get("torneo/predictor/{id}", function($id)
{
	//return $id;
	return view("predictor")->with("id",$id);
});


Route::post("torneo/api/proximosPartidos","PartidoController@proximosPartidos");
Route::post("api/login",'LoginController@index');



