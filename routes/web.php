<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

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

Route::get('/', [AuthController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);
Route::get('/register', [AuthController::class, 'register_index']);
Route::get('/post', [PostController::class, 'index']);

Route::group([
 'prefix' => 'auth'
], function () {
 Route::post('/login', [AuthController::class, 'login'])->name('login.post');
 Route::post('/register', [AuthController::class, 'register'])->name('register.post');
 Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::group([
 'prefix' => 'post',
], function () {
 Route::post('/add', [PostController::class, 'post'])->name('add.post');
});
