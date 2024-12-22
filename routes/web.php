<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::view('/', 'home')->name('home');
Route::view('/about-us', 'about-us')->name('aboutUs');
Route::view('/catalog', 'catalog')->name('catalog');
Route::view('/contact-us', 'contact-us')->name('contactUs');
Route::view('/showcase', 'showcase')->name('showcase');
Route::view('/login', 'auth.login')->name('login');
Route::view('/signup', 'auth.signup')->name('signup');
Route::view('/post-a-rental', 'auth.post-a-rental-form')->name('post-a-rental');


Route::controller(AdminController::class)->group(function () {
    Route::get('/admin', 'index')->name('dashboard');
    Route::get('/admin/property-management', 'property_management')->name('property-management');
    Route::get('/admin/user-management', 'user_management')->name('user-management');
    Route::get('/admin/settings', 'settings')->name('admin.settings');
});
