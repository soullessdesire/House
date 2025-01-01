<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PropertyController;

Route::view('/', 'home')->name('home');
Route::view('/about-us', 'about-us')->name('aboutUs');
Route::view('/contact-us', 'contact-us')->name('contactUs');


Route::controller(PropertyController::class)->group(function () {
    Route::get('/property', 'index')->name('property');
    Route::get('/property/{property}', 'show')->name('property.showcase');
    Route::get('/property/create/meta', 'createMeta')->name('property.create.meta');
    Route::get('/property/create/media', 'createMedia')->name('property.create.media');
    Route::get('/property/edit/{property}', 'edit')->name('property.edit')->can('update', 'property');

    Route::post('/property/create', 'store')->name('property.store');


    Route::patch('/property/{property}', 'update')->name('property.update')->can('update', 'property');

    Route::delete('/property/{property}', 'destroy')->name('property.destroy');
});

Route::controller(AuthController::class)->group(function () {
    Route::post('/session', 'session')->name('session.user');
    Route::post('/register', 'register')->name('register.user');

    Route::get('/login', 'login')->name('login');
    Route::get('/signup', 'signup')->name('signup');
});


Route::controller(AdminController::class)->group(function () {
    Route::get('/admin', 'index')->name('dashboard');
    Route::get('/admin/property-management', 'property_management')->name('property-management');
    Route::get('/admin/user-management', 'user_management')->name('user-management');
    Route::get('/admin/settings', 'settings')->name('admin.settings');
});
