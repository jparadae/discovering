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

/*Route::get('/', function () {
    return view('home');
})->name('home');*/

Route::get('/','HomeController');
#Route::view('/','home', compact('noticias'))->name('home');
Route::view('/about','about')->name('about');
Route::view('/contact','contact')->name('contact');