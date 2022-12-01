<?php

use App\Http\Controllers\FlowerController;
use App\Http\Controllers\UserController;
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

Route::get('/', [FlowerController::class, 'index']);

Route::get('/flowers', [FlowerController::class, 'index']);

Route::get('/new-flower', [FlowerController::class, 'create']);

Route::post('/new-flower', [FlowerController::class, 'insert']);

Route::get('/flowers/delete/{id}', [FlowerController::class, 'deleteThisFlower']);

Route::get('/flowers/update/{id}', [FlowerController::class, 'editFlowerDetails']);

Route::post('/flowers/update/{id}', [FlowerController::class, 'update']);

Route::get('/flowers/{id}', [FlowerController::class, 'show']);

// user routes
Route::get('/users', [UserController::class, 'index']);

Route::get('/register', [UserController::class, 'register']);

Route::post('/register', [UserController::class, 'addNewUser']);

Route::get('/users/{id}', [UserController::class, 'show']);
