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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/post', 'PostController@post')->name('post');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'ProfileController@profile')->name('profile');

Route::get('/category', 'CategoryController@category')->name('category');

Route::post('/addCategory', 'CategoryController@addCategory')->name('addCategory');

Route::post('/addProfile', 'ProfileController@addProfile')->name('addProfile');