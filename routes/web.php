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
Route::resource('user', 'UserController');
Route::resource('admins', 'AdminController');
Route::resource('pharmacy', 'PharmacyController');
Route::resource('doctor', 'DoctorController');
Route::resource('finance', 'FinanceController');

Route::resource('pharmacys', 'PharmacyMainController');
Route::resource('doctors', 'DoctorMainController');

Route::any('doctorlist', ['as'=>'doctorlist', 'uses'=>'DoctorController@doctorlist']);
Route::any('doctortransaction', ['as'=>'doctortransaction', 'uses'=>'DoctorController@doctortransaction']);
Route::any('pharmacylist', ['as'=>'pharmacylist', 'uses'=>'PharmacyController@pharmacylist']);
Route::any('pharmacytransaction', ['as'=>'pharmacytransaction', 'uses'=>'PharmacyController@pharmacytransaction']);
