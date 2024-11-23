<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::group(['prefix' => 'account'],function(){
    Route::group(['middleware' => 'guest'],function() {
        Route::get('/account/login',[LoginController::class,'index'])->name('account.login');
        Route::get('/account/register',[LoginController::class,'register'])->name('account.register');
        Route::post('/account/process-register',[LoginController::class,'processRegister'])->name('account.processRegister');
        Route::post('/account/authenticate',[LoginController::class,'authenticate'])->name('account.authenticate');
    });

    Route::group(['middleware' => 'auth'], function(){
        Route::get('/account/logout',[LoginController::class,'logout'])->name('account.logout');
        Route::get('/account/dashboard',[DashboardController::class,'index'])->name('account.dashboard');
    });
});



