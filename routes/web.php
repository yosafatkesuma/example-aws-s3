<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'App\Http\Controllers\ImageController@index');

Route::get('/storage/image/{fileName}', 'App\Http\Controllers\ImageController@showImage')->name('image.imageShow');

Route::get('/create', 'App\Http\Controllers\ImageController@create')->name('image.create');
Route::post('/create', 'App\Http\Controllers\ImageController@store')->name('image.store');
Route::get('/{image}', 'App\Http\Controllers\ImageController@show')->name('image.show');
