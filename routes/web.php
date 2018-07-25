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
Route::get('register', function () {
    return view('register');
});
Route::get('registerM', function () {
    return view('registermember');
});
Route::post('reg','RegisterUser@store');
Route::get('log', function () {
    return view('login');
});
Route::get('memberlog', function () {
    return view('memberlogin');
});
Route::post('login','Auth\LoginController@authenticate');
Route::post('memberloginn','DashController@check');

Route::get('checksociety/{id}','CheckSociety@check');

Route::post('reg_society','CheckSociety@store');
Route::post('reg_member','DashController@store');


Route::get('dash/{s_id}','DashController@dashboard');

Route::get('lgout','DashController@logout');
