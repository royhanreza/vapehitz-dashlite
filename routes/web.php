<?php

use App\Http\Controllers\ProductCategoryController;
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
    return view('dashboard.index');
});

Route::prefix('/product-category')->group(function () {
    Route::get('/', [ProductCategoryController::class, 'index']);
    Route::get('/create', [ProductCategoryController::class, 'create']);
    Route::get('/edit/{id}', [ProductCategoryController::class, 'create']);
    Route::post('/', [ProductCategoryController::class, 'store']);
    Route::patch('/{id}', [ProductCategoryController::class, 'update']);
});
