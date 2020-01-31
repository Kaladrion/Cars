<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/', function () { //original
    return view('welcome');
    //return "welcome to cars project";
});
*/
//Route::get('/', 'PagesController@index');

Route::get('/', function () {
    $name = "Miki";
    $age = "33";
    return view('welcome', compact("name"), compact("age")); 
    //return "welcome to cars project";
});

Route::get('/about', function(){
	return 'about us';
});

