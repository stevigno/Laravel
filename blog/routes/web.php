<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    ArticleController,
    LoginController,
    RegisterController,
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

Route::get('register', [RegisterController::class, 'index'])->name('register');
Route::get('profile', [UserController::class, 'profile'])->name('user.profile');
Route::get('login', [LoginController::class, 'index'])->name('login');

Route::post('register', [RegisterController::class, 'register'])->name('post.register');
Route::post('login', [LoginController::class, 'login'])->name('post.login');

Route::resource('articles', ArticleController::class);
/* Route::get('structures', function () {
    return view('structures');
});

Route::get('test', function(){
    return view('test')->withTitle('Laravel');
});
Route::get('test2', function(){
    return view('test2')->withTitle('php');
}); */

