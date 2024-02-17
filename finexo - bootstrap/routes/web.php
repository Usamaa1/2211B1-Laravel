<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Index;
use App\Http\Controllers\Services;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [Index::class, 'indexPage']);


Route::get('/about', [Index::class, 'aboutPage']);

Route::get('/team', [Index::class, 'teamPage']);

Route::get('/services', [Services::class,'servicesPage']);

Route::get('/why', [Index::class, 'whyPage']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
