<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CustomerController;
use GuzzleHttp\Client;


Route::view('home','project');
Route::view('waterlap','second');
Route::view('users','third');
Route::view('forgetpassword','forgetpassword');

Route::view('/','login')->name('mainlogin');

