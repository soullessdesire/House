<?php

use Illuminate\Support\Facades\Route;

Route::view('/','home')->name('home');
Route::view('/about-us', 'about-us')->name('aboutUs');
Route::view('/catalog', 'catalog')->name('catalog');
Route::view('/contact-us', 'contact-us')->name('contactUs');
Route::view('/showcase', 'showcase')->name('showcase');
