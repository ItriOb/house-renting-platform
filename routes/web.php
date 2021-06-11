<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class,'listAllHouses'])->name('home');

Route::get('/houses', [HomeController::class,'listAllHouses2'])->name('houselist');

Route::get('/results', function () {
    return view('main.houseresults');
})->name('houseresults');

Route::get('/contact', function () {
    return view('main.contact');
})->name('contact');

Route::get('/about', [HomeController::class,'about'])->name('about');


Route::get('/details2', function () {
    return view('main.housedetails2');
})->name('details2');

Route::match(['GET','POST'],'/search',[HomeController::class,'search'])->name('search');

Route::post('/postMessage',[HomeController::class , 'postMessage'])->name('message');

Route::get('/details',[HomeController::class , 'houseDetails'])->name('details');

Route::get('/details2',[HomeController::class , 'houseDetails2'])->name('details2');

Route::get('image', [HomeController::class,'image']);

Route::get('book', function () {
    return view('main.booknow');
})->name('book');

Route::post('finishOrder', [HomeController::class, 'addBooking'])->name('finishOrder');
