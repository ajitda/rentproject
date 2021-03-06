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

Route::get('/', 'FrontController@index');



Route::get('/abouturl', function () {
    return view('about');
})->name('aboutroute')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/hosts', 'HostController');
Route::resource('/addcategory', 'AddCategoryController');
Route::resource('/adds', 'AddController');

Route::get('/add/publish/{add}', [
	'uses' => 'AddController@publish',
	'as' => 'add.publish'
])->middleware('admin');

Route::get('/add/unpublish/{add}', [
	'uses' => 'AddController@unpublish',
	'as' => 'add.unpublish'
]);

Route::get('/add/{add}', [
	'uses' => 'FrontController@showadd',
	'as' => 'showadd.view'
]);