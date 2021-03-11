<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AutismController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TrainingController;
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

Route::get('/logout', [LogoutController::class, 'index']) -> name('logout');

Route::get('/login', [LoginController::class, 'index']) -> name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::get('/register', [RegisterController::class, 'index']) -> name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/contactus', [ContactController::class, 'index']) -> name('contactus');
Route::post('/contactus', [ContactController::class, 'store']);

Route::get('/autism', [AutismController::class, 'index']) -> name('autism');

Route::get('/rain', [TrainingController::class, 'index']) -> name('reviewer');

Route::get('/', function ()
    {
    return view('contents.landing');
    }) -> name('home');

Route::get('/gallery', function ()
    {
    return view('contents.gallery');
    }) -> name('gallery');

Route::get('/train', function ()
    {
    return view('train.train_land');
    }) -> name('training');

Route::get('/exam', function ()
    {
    return view('train.exam');
    }) -> name('exam');

Route::get('/result', function ()
    {
    return view('train.result');
    }) -> name('result');
    