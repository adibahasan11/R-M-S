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

Route::get('/','App\Http\Controllers\Admin\DashboardController@index');
Route::post('sendMessage','App\Http\Controllers\ContactController@store')->name('sendMessage.store');
Route::post('reserve','App\Http\Controllers\ReservationController@reserve');

Route::get('/logout', function () {
    Auth::logout();
    return Redirect::to('/login');
});
Auth::routes();
Route::get('/adminHome','App\Http\Controllers\HomeController@index');

Route::get('/Reservation','App\Http\Controllers\Admin\ReservationController@index')->name('Reservation.index');
Route::post('Reservation/{id}','App\Http\Controllers\Admin\ReservationController@status')->name('Reservation.status');
Route::post('Reservation/decline/{id}','App\Http\Controllers\Admin\ReservationController@decline')->name('Reservation.decline');

Route::delete('/Reservation/Reservation-destroy/{id}','App\Http\Controllers\Admin\ReservationController@destory')->name('Reservation.destroy');

Route::get('/menu','App\Http\Controllers\Admin\ItemController@index');

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

Route::delete('/menu/item-destroy/{item_id}','App\Http\Controllers\Admin\ItemController@destroy');

Route::get('/menu/category-create/{id}','App\Http\Controllers\Admin\CategoryController@edit');
Route::post('/menu/category-create/{id}','App\Http\Controllers\Admin\CategoryController@update');

Route::delete('/menu/category-destroy/{id}','App\Http\Controllers\Admin\ItemController@destroy');

Route::resource('contact', 'App\Http\Controllers\Admin\ContactController');
