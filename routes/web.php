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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/booking', function () {
    return view('booking.index');
});

Route::get('/abouturl', function () {
    return view('about');
})->name('aboutroute')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/hosts', 'HostController');
Route::resource('/addcategory', 'AddCategoryController');
Route::resource('/adds', 'AddController');