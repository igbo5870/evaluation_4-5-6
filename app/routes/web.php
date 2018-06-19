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
    return view('bedrooms');
});

Route::get('bedrooms', function () {
    return view('bedrooms');
});

Route::get('booking', function () {
    return view('booking');
});

Route::get('/', 'bedroomsController@getData');
Route::get('bedrooms', 'bedroomsController@getData');
Route::get('bedroom/{name}', 'bedroomsController@show');
Route::get('booking', 'BookingController@getCustomers');
Route::get('/bedroom/{name}/booking', 'BookingController@getCustomers');

Route::post('/bedroom/{name}/booking/validate', function () {
    return view('validate');
});
