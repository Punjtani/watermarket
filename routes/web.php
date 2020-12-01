<?php

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CustomerController;
use App\Http\Middleware\session;

Route::middleware([session::class])->group(function () {

Route::view('forgetpassword','forgetpassword');
Route::get('/home',[OrderController::class,'data'])->name('data');
Route::get('/users/{id}',[OrderController::class,'represent'])->name('users');
Route::get('/waterlap/{id}',[OrderController::class,'image'])->name('image');
Route::get('/logout',[OrderController::class,'logout'])->name('logout');
});
Route::post('form', [OrderController::class,'index'])->name('form');
Route::view('/','login')->name('login');

