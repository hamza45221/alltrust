<?php

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
Route::post('/user-store',[\App\Http\Controllers\admin\UserController::class,'store'])->name('user-store');
Route::get('/user-update',[\App\Http\Controllers\admin\UserController::class,'update'])->name('user-update');
Route::get('/user-delete',[\App\Http\Controllers\admin\UserController::class,'delete'])->name('user-delete');


Route::get('/faq',[\App\Http\Controllers\admin\FaqController::class,'index'])->name('faq');
Route::post('/faq-store',[\App\Http\Controllers\admin\FaqController::class,'store'])->name('faq-store');
Route::get('/faq-update',[\App\Http\Controllers\admin\FaqController::class,'update'])->name('faq-update');
Route::get('/faq-delete',[\App\Http\Controllers\admin\FaqController::class,'delete'])->name('faq-delete');


Route::get('/ticket',[\App\Http\Controllers\admin\TicketController::class,'index'])->name('ticket');
Route::post('/ticket-store',[\App\Http\Controllers\admin\TicketController::class,'store'])->name('ticket-store');
Route::get('/ticket-update',[\App\Http\Controllers\admin\TicketController::class,'update'])->name('ticket-update');
Route::get('/ticket-delete',[\App\Http\Controllers\admin\TicketController::class,'delete'])->name('ticket-delete');


