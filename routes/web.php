<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CustomerController;
use GuzzleHttp\Client;


    Route::view('project','project');
Route::view('project1','second');
Route::view('project2','third');
Route::view('project4','forgetpassword');

Route::view('project3','login')->name('mainlogin');

