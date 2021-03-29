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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/','App\Http\Controllers\Admin\DashboardController@index');

Route::get('/adminHome','App\Http\Controllers\HomeController@index');

Route::post('reserve','App\Http\Controllers\ReservationController@reserve');

//Route::post('/contact','ContactController@sendMessage')->name('contact.send');

Route::get('/logout', function () {
    Auth::logout();
    return Redirect::to('/login');
});
Auth::routes();

Route::post('reserve','App\Http\Controllers\ReservationController@reserve');

Route::post('contact','App\Http\Controllers\ContactController@sendMessage');

Route::get('/Reservation','App\Http\Controllers\Admin\ReservationController@index')->name('Reservation.index');
Route::post('Reservation/{id}','App\Http\Controllers\Admin\ReservationController@status')->name('Reservation.status');
Route::delete('Reservation/{id}','App\Http\Controllers\Admin\ReservationController@destroy')->name('Reservation.destroy');

Route::get('/menu','App\Http\Controllers\Admin\ItemController@index');

/*Route::get('/home', function () {
    return view('home');
});*/

/*Route::get('/slider', function () {
    return view('admin.slider.index');
});*/
Route::get('/user', function () {
    return view('admin.user.user');
});
Route::get('/slider','App\Http\Controllers\Admin\SliderController@index');
Route::get('/slider-create','App\Http\Controllers\Admin\SliderController@create');
Route::post('/slider-add','App\Http\Controllers\Admin\SliderController@store');

Route::get('/menu/category-create','App\Http\Controllers\Admin\CategoryController@create');
Route::get('/menu/category-create/{id}','App\Http\Controllers\Admin\CategoryController@edit');
Route::post('/menu/add','App\Http\Controllers\Admin\CategoryController@store');

Route::get('/menu/item-create','App\Http\Controllers\Admin\ItemController@create');
Route::post('/menu/item-add','App\Http\Controllers\Admin\ItemController@store');

Route::get('/menu/item-create/{item_id}','App\Http\Controllers\Admin\ItemController@edit');
Route::post('/menu/item-create/{item_id}','App\Http\Controllers\Admin\ItemController@update');

//Route::get('item-destroy/{item_id}','App\Http\Controllers\Admin\ItemController@destroy');

Route::get('/menu/category-create/{id}','App\Http\Controllers\Admin\CategoryController@edit');
Route::post('/menu/category-create/{id}','App\Http\Controllers\Admin\CategoryController@update');
