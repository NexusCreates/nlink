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

Route::get('/', function () {
    return redirect('https://nebulousmc.com');
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
    //
});
    
Route::get('twitter', function () {
	return redirect('https://twitter.com/NebulousMC');
});
Route::get('discord', function () {
	return redirect('https://discord.gg/0b7aUqx2yknng2st');
});
Route::get('website', function () {
	return redirect('https://nebulousmc.com');
});
Route::get('staff/developers', function () {
	return redirect('https://docs.google.com/spreadsheets/d/1MCYm9aP3TK4Bv8lKzlLa2XIYtlFtUQemMLM5TIKUreY');
});