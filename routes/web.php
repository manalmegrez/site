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
Route::get('/client', function () {
    return view('client');
});
Route::get('/calender', function () {
    return view('calender');
});
Route::get('/administrateur', function () {
    return view('administrateur');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/commercial', function () {
    return view('commercial');
});
Route::get('/prospect', function () {
    return view('prospect');
});
Route::get('/oper', function () {
    return view('opportunity');
})->name('/oper');
Route::get('/infper', function () {
    return view('infper');
})->name('/infper');
