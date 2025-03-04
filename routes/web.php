<?php

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\RegisterRequestController;
use App\Http\Controllers\PropertyImageController;
use App\Http\Controllers\PropertyVideoController;
use App\Models\RegisterRequest;
use App\Http\Controllers\LocationController;

Route::get('/', function () {
    return view('home', ['counties' => LocationController::getCounties(), 'wards' => LocationController::getWards(), 'constituencies' => LocationController::getCounstituency(), 'subcounties' => LocationController::getSubCounties()]);
})->name('home');
Route::view('/about-us', 'about-us')->name('aboutUs');
Route::view('/contact-us', 'contact-us')->name('contactUs');


Route::controller(PropertyController::class)->group(function () {
    Route::get('/property', 'index')->name('property');
    Route::get('/property/{property}', 'show')->name('property.showcase');
    Route::get('/property/create/meta', 'createMeta')->name('property.create.meta');
    Route::get('/property/create/media', 'createMedia')->name('property.create.media');
    Route::get('/property/edit/{property}', 'edit')->name('property.edit');

    Route::post('/property/media/redirect', 'storeMeta')->name('property.redirect.media');
    Route::post('/property/create', 'store')->name('property.store');
    Route::post('/property/image/{property}', 'imageStore')->name('property.image.create');
    Route::post('/property/video/{property}', 'videoStore')->name('property.video.create');


    Route::patch('/property/{property}', 'update')->name('property.update');

    Route::delete('/property/{property}', 'destroy')->name('property.destroy');
});

Route::controller(AuthController::class)->group(function () {
    Route::post('/session', 'session')->name('session.user');
    Route::post('/logout', 'logout')->name('logout');
    Route::post('/register', 'register')->name('register.user');

    Route::get('/login', 'login')->name('login');
    Route::get('/signup', 'signup')->name('signup');

    Route::delete('/user/delete/{id}', 'destroy')->name('destroy.user');

    Route::get('/auth/{provider}/redirect', 'redirectToProvider')->name('social.redirect');
    Route::get('/auth/{provider}/callback', 'handleProviderCallback')->name('social.callback');
});


Route::controller(AdminController::class)->group(function () {
    Route::get('/admin', 'index')->name('dashboard');
    Route::get('/admin/property-management', 'property_management')->name('property-management');
    Route::get('/admin/user-management', 'user_management')->name('user-management');
    Route::get('/admin/settings', 'settings')->name('admin.settings');
});
Route::controller(RegisterRequest::class)->group(function () {
    Route::get('/admin/user-register-request/', [RegisterRequestController::class, 'show'])->name('register-request');
    Route::post('/admin/user-register-request/accept/{registerrequest}', [RegisterRequestController::class, 'accept_request'])->name('accept-register-request');
    Route::post('/admin/user-register-request/deny/{registerrequest}', [RegisterRequestController::class, 'deny_request'])->name('deny-register-request');
});

Route::delete('/property/image/{propertyImage}', [PropertyImageController::class, 'destroy'])->name('property.image.destroy');
Route::delete('/property/video/{propertyVideo}', [PropertyVideoController::class, 'destroy'])->name('property.video.destroy');
