<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');
Route::get('/post/{id}', 'PostController@getPost');
Route::get('inventory', function()
{
	return View::make('pages.inventory');
});

Route::get('watch', function()
{
	return View::make('pages.watch');
});

Route::get('awards', function()
{
	return View::make('pages.awards');
});

Route::get('my_email', function()
{
	return View::make('pages.emails');
});
Route::get('auth/login', function()
{
	$email = Input::get('email');
    $password = Input::get('password');

    return View::make('auth/login');

});

Route::get('/user/register', function() {
    $email = Input::get('email');
    $password = Input::get('password');

    return View::make('auth/register');

});