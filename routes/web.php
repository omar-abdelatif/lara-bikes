<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Bike\BikeController;
use App\Http\Controllers\Site\SiteController;
use Illuminate\Support\Facades\Route;

//! Frontend Routes
Route::group(["middleware" => "auth"], function () {
    Route::get('main', [SiteController::class, 'viewMainData']);
    Route::get('profile/{id}', [SiteController::class, 'viewProfile', 'viewData']);
    Route::view('contact', 'frontend.contact');
    Route::view('about', 'frontend.about');
    Route::view('blog', 'frontend.blog');
    Route::view('bikesignup', 'frontend.bikesignup');
    Route::view('404', 'frontend.404');
    Route::get('user-dashboard', [SiteController::class, 'viewTable', 'viewData'])->name('user-dashboard');
    Route::post('editprofile', [SiteController::class, 'updateProfile']);
    Route::view('editbike/{id}', 'frontend.dashboard.editbike');
    Route::view('bikes', 'frontend.dashboard.bikes');
    Route::view('social', 'frontend.dashboard.social');
    Route::post('storebikes', [BikeController::class, 'storeBikes']);
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

Route::group(['prefix' => 'admin/'], function () {
    Route::controller(AdminController::class)->group(function () {
        Route::group(['middleware' => ['auth:admin']], function () {
            Route::get('dashboard', [AdminController::class, 'dashboard']);
            Route::get('logout', [AdminController::class, 'logout']);
            Route::get('editprofie/{id}', [AdminController::class, 'edit']);
            Route::view('allusers',  'users');
            Route::view('allblogs', 'blogs');
            Route::view('addblog', 'addblog');
            Route::view('blog/{id}', 'singleblog');
            Route::view('editblog/{id}', 'editblog');
            Route::view('contact', 'contact');
            Route::view('allbikes', 'bikes');
            Route::view('about', 'about');
        });
        Route::view('login', 'index')->name('signin');
        Route::view('regist', 'register');
        Route::post('storeadmin', [AdminController::class, 'storeadmin']);
        Route::post('adminlogin', [AdminController::class, 'loginAdmin'])->name('loginAdmin');
    });
});
