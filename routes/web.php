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
	$locations = \App\Location::all();

    return view('index', compact('locations'));
});

Route::get('/hotels', 'HotelController@index');

Route::view('/services', 'services');
Route::view('/about','about');
Route::view('/contact', 'contact');
Route::get('/hotels/{location}/{id}/rooms', function () {
	$hotel = App\Hotel::findOrFail(request()->id);

	return view('hotel-room', compact('hotel'));
})->name('rooms');
Route::get('/hotels/{location}/{id}/rooms/booking', 'BookingController@create')->name('booking');
Route::post('/hotels/{location}/{id}/rooms/booking', 'BookingController@store')->name('store.booking');