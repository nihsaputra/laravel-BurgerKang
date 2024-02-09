<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
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

// Auth
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout']);
Route::get('/register', [RegisterController::class,'index']);
Route::post('/register', [RegisterController::class,'store']);

// DASHBOARD
Route::get('/', [DashboardController::class, 'index'])->middleware('auth');

// CATEGORY
Route::get('/categories', [CategoryController::class, 'index'])->middleware('auth');
Route::get('/categories/{id}', [CategoryController::class, 'index'])->middleware('auth');
Route::get('/categories/add', [CategoryController::class, 'index'])->middleware('auth');
Route::post('/categories/add', [CategoryController::class, 'index'])->middleware('auth');
Route::post('/categories/edit', [CategoryController::class, 'index'])->middleware('auth');
Route::get('/categories/delete/{id}', [CategoryController::class, 'index'])->middleware('auth');


// PRODUCT
Route::get('/products',[ProductController::class, 'index'])->middleware('auth');
Route::get('/products/{id}',[ProductController::class, 'index'])->middleware('auth');
Route::get('/products/add',[ProductController::class, 'index'])->middleware('auth');
Route::post('/products/add',[ProductController::class, 'index'])->middleware('auth');
Route::post('/products/edit',[ProductController::class, 'index'])->middleware('auth');
Route::get('/products/delete/{id}',[ProductController::class, 'index'])->middleware('auth');


// ORDER
Route::get('/orders', function () {
    return view('order/index',[
        'title' => 'Orders'
    ]);
})->middleware('auth');

// REPORT
Route::get('/reports', function () {
    return view('report/index',[
        'title' => 'Reports'
    ]);
})->middleware('auth');

