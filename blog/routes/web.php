<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    ArticleController,
    ForgotController,
    LoginController,
    LogoutController,
    RegisterController,
    ResetController,
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
Route::get('profile/{user}', [UserController::class, 'profile'])->name('user.profile');
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::get('logout', [LogoutController::class, 'logout'])->name('logout');
Route::get('forgot', [ForgotController::class, 'index'])->name('forgot');
Route::get('reset/{token}', [ResetController::class, 'index'])->name('reset');

Route::post('register', [RegisterController::class, 'register'])->name('post.register');
Route::post('login', [LoginController::class, 'login'])->name('post.login');
Route::post('forgot', [ForgotController::class, 'store'])->name('post.forgot');
Route::post('reset', [ResetController::class, 'reset'])->name('post.reset');

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

