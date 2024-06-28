<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); 

Route::get('/events/home', [App\Http\Controllers\EventController::class, 'index']);

Route::get('/events/create', [App\Http\Controllers\EventController::class, 'create']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
