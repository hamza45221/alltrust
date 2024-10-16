<?php

// use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\FaqController;
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


Route::get('/ticket',[\App\Http\Controllers\admin\TicketController::class,'index'])->name('ticket');
Route::post('/ticket-store',[\App\Http\Controllers\admin\TicketController::class,'store'])->name('ticket-store');
Route::get('/ticket-update',[\App\Http\Controllers\admin\TicketController::class,'update'])->name('ticket-update');
Route::get('/ticket-delete',[\App\Http\Controllers\admin\TicketController::class,'delete'])->name('ticket-delete');


Route::get('/support',[\App\Http\Controllers\admin\SupportController::class,'index'])->name('support');
Route::post('/support-store',[\App\Http\Controllers\admin\SupportController::class,'store'])->name('support-store');
Route::get('/support-update',[\App\Http\Controllers\admin\SupportController::class,'update'])->name('support-update');
Route::get('/support-delete',[\App\Http\Controllers\admin\SupportController::class,'delete'])->name('support-delete');


Route::get('/faq', [FaqController::class, 'index'])->name('faq');
Route::get('/faq-view', [FaqController::class, 'indexView'])->name('faq.view');
Route::post('/faq-store', [FaqController::class, 'store'])->name('faq-store');
Route::post('/faq-update/{id}', [FaqController::class, 'update'])->name('faq-update');
Route::get('/faq-delete/{id}', [FaqController::class, 'destroy'])->name('faq-delete');


Route::get('/ticket', [\App\Http\Controllers\admin\TicketController::class, 'index'])->name('ticket');
Route::post('/ticket-store', [\App\Http\Controllers\admin\TicketController::class, 'store'])->name('ticket-store');
Route::post('/ticket-update/{id}', [\App\Http\Controllers\admin\TicketController::class, 'update'])->name('ticket-update');
Route::get('/ticket-delete/{id}', [\App\Http\Controllers\admin\TicketController::class, 'delete'])->name('ticket-delete');


Route::get('/faq', [FaqController::class, 'index'])->name('faq');
Route::post('/faq-store', [FaqController::class, 'store'])->name('faq-store');
Route::post('/faq-update/{id}', [FaqController::class, 'update'])->name('faq-update');
Route::get('/faq-delete/{id}', [FaqController::class, 'destroy'])->name('faq-delete');


Route::get('/new-adviser', [\App\Http\Controllers\admin\NewAdviserController::class, 'create'])->name('newAdviser');

Route::post('/newAdviser-store', [\App\Http\Controllers\admin\NewAdviserController::class, 'store'])->name('newAdviser-store');
Route::get('/newAdviser-edit/{id}', [\App\Http\Controllers\admin\NewAdviserController::class, 'edit'])->name('newAdviser-edit');
Route::post('/newAdviser-update/{id}', [\App\Http\Controllers\admin\NewAdviserController::class, 'update'])->name('newAdviser-update');
Route::get('/newAdviser-delete/{id}', [\App\Http\Controllers\admin\NewAdviserController::class, 'destroy'])->name('newAdviser-delete');

Route::get('/new-adviser-pending', [\App\Http\Controllers\admin\NewAdviserController::class, 'pending'])->name('newAdviser-pending');
Route::get('/new-adviser-existing', [\App\Http\Controllers\admin\NewAdviserController::class, 'existing'])->name('newAdviser-existing');


