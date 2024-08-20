<?php

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
    return redirect('/p');
}]);
Route::get('/p', [ProductController::class, 'index']);
Route::get('/p/{product}', [ProductController::class, 'show']);
Route::delete('/p/{product}', [ProductController::class, 'destroy']);
Route::patch('/p/{product}', [ProductController::class, 'edit']);
Route::put('/p/{product}', [ProductController::class, 'update']);
Route::post('/p', [ProductController::class, 'store']);
Route::get('/add', [ProductController::class, 'create']);


