<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Site\SiteController;
// use App\Http\Controllers\Bike\BikeController;
use Illuminate\Support\Facades\Route;


//! Frontend Routes
Route::group(["middleware" => "auth"], function () {
    Route::view('main', 'frontend.home');
    Route::get('profile', [\App\Http\Controllers\Site\SiteController::class, 'viewProfile', 'viewData']);
    Route::view('contact','frontend.contact');
    Route::view('about','frontend.about');
    Route::view('blog' , 'frontend.blog');
    Route::view('bikesignup', 'frontend.bikesignup');
    Route::view('404', 'errors.404');
    Route::view('user-dashboard', 'frontend.dashboard.dashboard')->name('user-dashboard');
    Route::view('edituser', 'frontend.user-dashboard.editprofile');
    Route::view('editbike', 'frontend.user-dashboard.editbike');
    Route::view('bikes', 'frontend.user-dashboard.bikes');
    Route::view('social', 'frontend.user-dashboard.social');
    Route::get('logout', [SiteController::class, 'logout']);
});

Route::group(["middleware" => "guest"], function () {
    Route::view('/', 'home');
    Route::view('signin', 'frontend.auth.login')->name('login');
    Route::view('signup', 'frontend.auth.register');
    Route::view('request', 'frontend.auth.request_pass')->name('email');
    Route::view('lost-password', 'frontend.auth.lost_pass');
    Route::post('store', [SiteController::class, 'storeuser'])->name('register');
    Route::post('email', [SiteController::class, 'checkEmail']);
    Route::post('loginRequest', [SiteController::class, 'loginRequest'])->name('loginRequest');
    Route::post('updatepassword', [SiteController::class, 'updatePassword'])->name('updatePassword');
});



//! Backend Routes

Route::group(['prefix' => 'admin/login'], function () {
    Route::controller(AdminController::class)->group(function () {
        Route::get('/', 'login');
    });
});
