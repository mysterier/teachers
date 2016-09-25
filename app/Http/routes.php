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

//Route::model('user', 'App\User');


Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

Route::resource('special', 'SpecialController', [
    'only' => ['create', 'store']   
]);

/***************    Site routes  **********************************/
Route::pattern('id', '[0-9]+');
Route::get('/', 'HomeController@index');
Route::get('home', 'HomeController@index');
Route::get('about', 'PagesController@about');
Route::get('contact', 'PagesController@contact');
Route::get('teachers', 'TeachersController@index');
Route::get('teacher/{id}', 'TeachersController@show');
Route::get('lessons', 'LessonsController@index');
Route::get('lesson/{id}', 'LessonsController@show');
Route::get('products', 'ProductsController@index');
Route::get('product/{id}', 'ProductsController@show');
Route::get('activity', 'ActivityController@index');
Route::get('activity/{id}', 'ActivityController@show');

//===============
Route::get('/phpinfo', function () {
    return phpinfo();
});
