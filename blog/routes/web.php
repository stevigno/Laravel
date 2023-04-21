<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    ArticleController,
    UserController
};

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

Route::get('structures', function () {
    return view('structures');
});

Route::get('test', function(){
    return view('test')->withTitle('Laravel');
});
Route::get('test2', function(){
    return view('test2')->withTitle('php');
});

Route::get('profile', [UserController::class, 'profile'])->name('user.profile');

Route::resource('articles', ArticleController::class);