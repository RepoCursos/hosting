<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('lang/{lang}', [LanguageController::class, 'switchLang'])->name('lang');

Route::get('/product', [ProductController::class, 'index'])->name('product.index');
Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
Route::get('/product/edit/{product}', [ProductController::class, 'edit'])->name('product.edit');
Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
Route::put('/product/update/{product}', [ProductController::class, 'update'])->name('product.update');
Route::delete('product/destroy/{product}', [ProductController::class, 'destroy'])->name('product.destroy');

Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
Route::get('/category/edit/{category}', [CategoryController::class, 'edit'])->name('category.edit');
Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
Route::put('/category/update/{category}', [CategoryController::class, 'update'])->name('category.update');
Route::delete('/category/destroy/{category}', [CategoryController::class, 'destroy'])->name('category.destroy');


Route::view('/', 'home')->name('home');