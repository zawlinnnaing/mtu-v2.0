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
*/
<<<<<<< HEAD
Route::get('/', 'HomeController@index');

Route::get('/departments/archi', 'HomeController@archi');
Route::get('/departments/ceit', 'HomeController@ceit');
Route::get('/departments/che', 'HomeController@che');
Route::get('/departments/civil', 'HomeController@civil');
Route::get('/departments/ec', 'HomeController@ec');
Route::get('/departments/eng', 'HomeController@eng');
Route::get('/departments/ep', 'HomeController@ep');
Route::get('/departments/ir', 'HomeController@ir');
Route::get('/departments/maths', 'HomeController@maths');
Route::get('/departments/mech', 'HomeController@mech');
Route::get('/departments/mecha', 'HomeController@mecha');
Route::get('/departments/myan', 'HomeController@myan');
=======

Route::get('/', function () {
    return view('index');
});
>>>>>>> 13975cd39a59be96acb08a2428bf646e3e087332
