<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
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
    return view('welcome');
});

Route::get('login', [AuthController::class, 'formLogin'])->name('login');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::post('logon', [AuthController::class, 'logon'])->name('logon');


Route::group(['middleware' => 'auth'], function(){
    Route::resource('products', ProductController::class);
    Route::get('products/{product}',[ProductController::class, 'destroy'])->name('products.delete');
    Route::post('products/{product}',[ProductController::class, 'update'])->name('products.atualizar');

    Route::resource('categories', CategoryController::class);
    Route::get('categories/{category}',[CategoryController::class, 'destroy'])->name('categories.delete');
});


