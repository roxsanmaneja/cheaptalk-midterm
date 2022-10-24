<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
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
    return view('pages.index');
});

Route::get('/register', [AuthController::class, 'registrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/verification/{user}/{token}', [AuthController::class, 'verification']);


Route::group(['middleware' => 'auth'], function() {

    Route::get('/dashboard', [PostController::class, 'index'])->name('dashboard');

    Route::post('/dashboard', [PostController::class, 'store'])->name('dashboard');

    Route::get('/categories/{category}', [CategoryController::class, 'index']);

    Route::get('/authors', [PostController::class, 'getUsers']);

    Route::get('/authors/{user}', [PostController::class, 'getPostByAuthor']);

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});
