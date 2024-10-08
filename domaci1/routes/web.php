<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;

Route::get("/", [HomepageController::class, "index"]);
Route::get('/shop', [ShopController::class, 'getAllProducts']);
Route::get('/about', [ShopController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/admin/all-contacts', [ContactController::class, 'getAllContacts']);

Route::post('send-contact', [ContactController::class, 'sendContact']);

Route::get('/admin/products', [ShopController::class, 'adminProducts'])->name('adminProducts');
Route::post('/admin/add-product', [ShopController::class, 'adminAddProduct']);

Route::get('/admin/allProducts', [ProductsController::class, 'index']);
Route::delete('/admin/delete-product/{product}', [ProductsController::class, 'delete']);
