<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/breeds', 'DogController@getAllBreeds');
Route::get('/breed/random', 'DogController@getRandomBreed');
Route::get('/breed/{id}/image', 'DogController@getImageByBreed');
Route::get('/breed/{id}', 'DogController@getBreed');
