<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FetchDataController;

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
    return view('home');
});

Route::get('/fetchData',[FetchDataController::class,'fetch_data'])->name('fetchdata')->middleware('auth');
Route::get('/user/register',[FetchDataController::class,'register'])->name('register');
Route::post('/crete/register',[FetchDataController::class,'user_create'])->name('register.create');
Route::get('/user/login',[FetchDataController::class,'login'])->name('login');
Route::post('/login/create',[FetchDataController::class,'login_create'])->name('login.create');
Route::get('/logout',[FetchDataController::class,'logout'])->name('logout');
