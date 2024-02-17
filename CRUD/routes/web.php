<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsView;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/insert', [ProductsView::class,'insertPage']);

Route::post('/insertData',[ProductsController::class, 'insertData']);

Route::get('/view', [ProductsController::class,'view']);

Route::get('/delete/{id}', [ProductsController::class,'deleteProducts']);

Route::get('/update/{id}', [ProductsController::class,'updatePage']);


Route::post('/updateData/{id}',[ProductsController::class, 'updateProducts']);


