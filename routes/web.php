<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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
Route::get('/',[function() {
    return view('welcome');
}]);
Route::get('/p', [ProductController::class, 'index']);
Route::get('/p/{product}', [ProductController::class, 'show']);
Route::delete('/p/{product}', [ProductController::class, 'destroy']);
Route::patch('/p/{product}', [ProductController::class, 'edit']);
Route::put('/p/{product}', [ProductController::class, 'update']);
Route::post('/p', [ProductController::class, 'store']);
Route::get('/add/p', [ProductController::class, 'create']);
Route::get('/c', [CategoryController::class, 'index']);
Route::get('/c/{category}', [CategoryController::class, 'show']);
Route::delete('/c/{category}', [CategoryController::class, 'destroy']);
Route::patch('/c/{category}', [CategoryController::class, 'edit']);
Route::put('/c/{category}', [CategoryController::class, 'update']);
Route::post('/c', [CategoryController::class, 'store']);
Route::get('/add/c', [CategoryController::class, 'create']);


