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

Auth::routes();
Route::resource('home', 'HomeController');
Route::resource('admins', 'AdminController');
Route::resource('pharmacy', 'PharmacyController');
Route::resource('doctor', 'DoctorController');
Route::resource('finance', 'FinanceController');
