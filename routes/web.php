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
    return view('main.home');
})->name('home');

Route::get('/houses', function () {
    return view('main.houseslist');
})->name('houselist');

Route::get('/results', function () {
    return view('main.houseresults');
})->name('houseresults');

