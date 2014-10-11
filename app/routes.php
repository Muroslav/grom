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

Route::get('/', function()
{
	return View::make('pages.news');
});
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
