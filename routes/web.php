<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\StudentsController;

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
Route::post('/login/process',[PostController::class, 'process']); //login your data
Route::get('/index', [PostController::class, 'index']);

Route::get('/register', [PostController::class, 'register']);
Route::post('/store', [PostController::class, 'store']);  //add data from dbase


Route::get('/student/{student}',[StudentsController::class, 'show']); // show data from dbase
Route::put('/student/{student}',[StudentsController::class, 'update']); //update data from dbase

Route::delete('/student/{student}', [StudentsController::class, 'destroy']); //delete data from dbase

Route::get('/add/student',[StudentsController::class, 'create']); //add new student
Route::post('/add/student',[StudentsController::class, 'store']); //store data from dbase

Route::post('/logout',[PostController::class, 'logout']);




