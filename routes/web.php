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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', 'PublicController@index');
//OK
Route::get('/books','BookController@index');
//OK
Route::get('/home', 'HomeController@index')->name('home');
// for: http://www.books.test:8081/public/login 
//OK


  

Route::get('/private','PrivateController@index');

//OK
Auth::routes();