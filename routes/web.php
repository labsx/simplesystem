<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/', [PostController::class, 'login']);
Route::get('/index', [PostController::class, 'index']);

Route::get('/register', [PostController::class, 'register']);
Route::post('/store', [PostController::class, 'store']);

Route::post('/login/process',[PostController::class, 'process']);