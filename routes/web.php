<?php

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

//user route........................
Route::prefix('user')->middleware('auth')->name('user.')->group(function (){
    Route::get('/dashboard',[\App\Http\Controllers\User\UserController::class,'dashboard'])->name('dashboard');
    Route::get('/product/manage',[\App\Http\Controllers\User\ProductController::class,'index'])->name('product.manage');
    Route::get('/product/create',[\App\Http\Controllers\User\ProductController::class,'create'])->name('product.create');
});


require __DIR__.'/auth.php';
