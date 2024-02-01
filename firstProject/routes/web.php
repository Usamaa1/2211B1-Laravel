<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home', function () {
    return view('index');
});

Route::get('/about', function ($a = 'Message') {
    return view('about')->with('a',$a);
});

// Route::get('/about/{company}', function (){
//     return 'This is company route through about page';
// })->where('company','[A-Za-z]+');
// Route::get('/about/{company}', function (){
//     return 'This is company route through about page';
// })->whereAlpha('company');
// Route::get('/about/{company}', function (){
//     return 'This is company route through about page';
// })->whereNumber('company');
// Route::get('/about/{company}', function (){
//     return 'This is company route through about page';
// })->whereAlphaNumeric('company');


Route::get('/about/{company}', function (){
    return 'This is company route through about page';
})->whereIn('company',['food','textile','software']);



Route::get('/services', function () {
    return view('services');
});

Route::get('/contact', function () {
    return view('contact');
});


