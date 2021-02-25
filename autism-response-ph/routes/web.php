<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
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
Route::get('/register', [RegisterController::class, 'index'])-> name('register');
Route::post('/register', [RegisterController::class, 'store']);


Route::get('/home', function () {
    return view('contents.landing');
})-> name('home');

Route::get('/about', function () {
    return view('contents.about');
})-> name('about');

Route::get('/contact', function () {
    return view('contents.contact');
})-> name('contact');   