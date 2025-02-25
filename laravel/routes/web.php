<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'Home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');
Route::view('/services', 'services')->name('services');

// Route::get()
// Route::post()
// Route::put()
// Route::delete()
// Route::patch()