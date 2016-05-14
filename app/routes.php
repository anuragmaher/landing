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
	return View::make('index');
});

Route::get('/privacy', function()
{
	return View::make('privacy');
});

Route::get('/login', function()
{
	return View::make('login');
});

Route::get('/about', function()
{
	return View::make('about');
});

Route::get('/terms', function()
{
	return View::make('terms');
});

Route::get('/kiran', function()
{
	return View::make('kiran');
});
