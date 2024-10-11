<?php

// use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashboard', [\App\Http\Controllers\admin\AdminController::class, 'index'])->name('dashboard');


Route::get('/user',[\App\Http\Controllers\admin\UserController::class,'index'])->name('user');
Route::get('/user-store',[\App\Http\Controllers\admin\UserController::class,'store'])->name('user-store');
Route::get('/user-update',[\App\Http\Controllers\admin\UserController::class,'update'])->name('user-update');
Route::get('/user-delete',[\App\Http\Controllers\admin\UserController::class,'delete'])->name('user-delete');

