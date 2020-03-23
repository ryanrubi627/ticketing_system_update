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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/home', 'HomeController@display');
Route::post('create', 'HomeController@insert');
//Route::post('update', 'HomeController@update');
Route::post('/update/{id}', 'HomeController@update');

Route::get('/admin', 'AdminPageController@display');
Route::delete('/delete/{id}', 'AdminPageController@delete');
















