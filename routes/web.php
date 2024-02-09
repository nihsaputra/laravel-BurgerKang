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
Route::resource('categories', CategoryController::class);
Route::get('/categories', [CategoryController::class, 'index'])->middleware('auth');
Route::get('/categories/create', [CategoryController::class, 'create'])->middleware('auth');
Route::get('/categories/{id}', [CategoryController::class, 'show'])->middleware('auth');
Route::get('/categories/edit/{id}', [CategoryController::class, 'edit'])->middleware('auth');
Route::post('/categories', [CategoryController::class, 'store'])->middleware('auth');
Route::put('/categories/{id}', [CategoryController::class, 'update'])->middleware('auth');
Route::delete('/categories/{id}', [CategoryController::class, 'destroy'])->middleware('auth');


// PRODUCT
Route::resource('products', ProductController::class);
Route::get('/products',[ProductController::class, 'index'])->middleware('auth');
Route::get('/products/create',[ProductController::class, 'create'])->middleware('auth');
Route::get('/products/edit/{id}',[ProductController::class, 'edit'])->middleware('auth');
Route::post('/products',[ProductController::class, 'store'])->middleware('auth');
Route::put('/products/{id}',[ProductController::class, 'update'])->middleware('auth');
Route::delete('/products/{id}',[ProductController::class, 'destroy'])->middleware('auth');


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

