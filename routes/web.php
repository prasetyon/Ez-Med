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
    return view('auth/login');
});

Auth::routes();
Route::resource('home', 'HomeController');
Route::post('loginvalidate','HomeController@loginvalidate');
Route::get('logout','HomeController@logout');
Route::resource('user', 'UserController');
Route::resource('admins', 'AdminController');
Route::resource('pharmacy', 'PharmacyController');
Route::resource('doctor', 'DoctorController');
Route::resource('finance', 'FinanceController');

Route::resource('pharmacys', 'PharmacyMainController');
Route::resource('doctors', 'DoctorMainController');

Route::any('docedit', ['as'=>'docedit', 'uses'=>'DoctorMainController@edit']);
Route::any('pharedit', ['as'=>'pharedit', 'uses'=>'PharmacyMainController@edit']);
Route::any('pharaddobat', ['as'=>'pharaddobat', 'uses'=>'PharmacyMainController@addobat']);

Route::any('doceditinfo', ['as'=>'doceditinfo', 'uses'=>'DoctorMainController@editinfo']);
Route::any('phareditinfo', ['as'=>'phareditinfo', 'uses'=>'PharmacyMainController@editinfo']);
Route::any('tambah', ['as'=>'tambah', 'uses'=>'PharmacyMainController@tambah']);

Route::any('docverify', ['as'=>'docverify', 'uses'=>'DoctorMainController@verify']);
Route::any('pharverify', ['as'=>'pharverify', 'uses'=>'PharmacyMainController@verify']);

Route::any('doctransaction', ['as'=>'doctransaction', 'uses'=>'DoctorMainController@transaction']);
Route::any('phartransaction', ['as'=>'phartransaction', 'uses'=>'PharmacyMainController@transaction']);

Route::any('doctorlist', ['as'=>'doctorlist', 'uses'=>'DoctorController@doctorlist']);
Route::any('doctortransaction', ['as'=>'doctortransaction', 'uses'=>'DoctorController@doctortransaction']);
Route::any('pharmacylist', ['as'=>'pharmacylist', 'uses'=>'PharmacyController@pharmacylist']);
Route::any('pharmacytransaction', ['as'=>'pharmacytransaction', 'uses'=>'PharmacyController@pharmacytransaction']);
