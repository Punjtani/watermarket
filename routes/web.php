<?php

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CustomerController;
use App\Http\Middleware\session;

Route::middleware([session::class])->group(function () {
    Route::view('home','project')->name('home');
Route::view('waterlap','second')->name('waterlap');
Route::view('users','third')->name('users');
Route::view('forgetpassword','forgetpassword');
});

Route::post('form', [OrderController::class,'index'])->name('form');
Route::view('/','login')->name('login');
Route::get('/logout',function() {
    session()->forget('status');
    return redirect('/');
});

