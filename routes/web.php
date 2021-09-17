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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'HomeController@index')->name('index');

Route::get('/home/about', 'HomeController@aboutUs')->name('aboutUs');

Route::get('/home/blog', 'BlogController@blog')->name('blog');

Route::get('/home/blogSingle', 'BlogController@blogSingle')->name('blogSingle');

Route::get('/home/contact', 'HomeController@contactUs')->name('contactUs');
Route::post('storeContact', 'HomeController@storeContact')->name('storeContact');

Route::get('/home/rooms', 'RoomController@rooms')->name('rooms');

Route::get('/home/roomSingle', 'RoomController@roomSingle')->name('roomSingle');

Route::get('/home/restoBar', 'HomeController@restoBar')->name('restoBar');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
