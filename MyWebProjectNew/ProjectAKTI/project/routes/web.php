<?php
use App\Http\Controllers\WebController;
use App\Http\Controllers\AdminController;


use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;


Route::get('/webb/index', [WebController::class,'index'])->name('windex');
Route::get('/webb/master', [WebController::class,'master'])->name('wmaster');
Route::get('/webb/shop', [WebController::class,'shop'])->name('wshop');

Route::get('/webb/removecart/{id}', [WebController::class,'wwww'])->name('wremovecart');
Route::get('/webb/cart/{id}', [WebController::class,'cart'])->name('wcart');
Route::get('/webb/checkout', [WebController::class,'checkout'])->name('wcheckout');
Route::get('/webb/cartt/', [WebController::class,'carttt'])->name('cartt');
Route::get('/webb/checkout', [WebController::class,'checkout'])->name('wcheckout');

Route::get('/admin/index', [AdminController::class,'index'])->name('aindex');
Route::get('/admin/addproduct', [AdminController::class,'addproduct'])->name('aaddproduct');
Route::post('/admin/store', [AdminController::class,'store'])->name('astore');
Route::post('/admin/edited/{id}', [AdminController::class,'edited'])->name('aedited');
Route::get('/admin/deleteproduct/{id}', [AdminController::class,'deleteproduct'])->name('adeleteproduct');
Route::get('/admin/editproduct/{id}', [AdminController::class,'editproduct'])->name('aeditproduct');

Route::post('/webb/orderplaced', [WebController::class,'placedorder'])->name('wplaceorder');
