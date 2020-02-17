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

Route::get('/','Crud1@home')->name('home');

Route::get('/addmember','Crud1@addmember')->name('addmember');
Route::post('/addmember','Crud1@addmemberP');

Route::get('/show/{id}','Crud1@show')->name('show');

Route::get('/update/{id}','Crud1@update')->name('update');
Route::post('/update/{id}','Crud1@updateMember');

Route::get('/delete/{id}','Crud1@delete')->name('delete');


//Image Upload

Route::get('/image','Crud1@image')->name('image');
Route::post('/image','Crud1@uploadImage');
