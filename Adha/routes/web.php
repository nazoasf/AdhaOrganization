<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home', 'App\http\Controllers\CharityController@home');

Route::get('/about', 'App\http\Controllers\CharityController@about');

Route::get('/contact', 'App\http\Controllers\CharityController@contact');
Route::post('/sendmessage', 'App\http\Controllers\CharityController@sendmessage');

Route::get('/blog', 'App\http\Controllers\CharityController@blog');

Route::get('/donate', 'App\http\Controllers\CharityController@donate');

Route::post('/insertD', 'App\http\Controllers\CharityController@insertDonations');

Route::get('/projects', 'App\http\Controllers\CharityController@projects');

Route::get('/gallery', 'App\http\Controllers\CharityController@gallery');





