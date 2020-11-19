<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CustomerController;
use GuzzleHttp\Client;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/form',[OrderController::class,'index'])->name('loginform');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::resource('orders', OrderController::class);
Route::resource('customers', CustomerController::class);
Route::post('/approve/{id}',function ($id)
{
    $v=App\Models\Order::find($id)->update(['active' => 1]);
    return redirect()->back();
})->name('new');
Route::post('/disapprove/{id}',function ($id)
{
    $v=App\Models\Order::find($id)->update(['active' => 0]);
    return redirect()->back();
})->name('new1');

Route::view('project','project');
Route::view('project1','second');
Route::view('project2','third');
Route::view('project3','login');
Route::view('project4','forgetpassword');
// Route::get('all',function(){

//     $client=new Client();
//          $v=$client->request('GET','localhost:8000/api/auth/signin');
//          dd($v);
//          exit();
//          return $v;
// });
