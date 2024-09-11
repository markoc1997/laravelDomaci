<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;

Route::get("/", [HomepageController::class, "index"]);
Route::get('/shop', [ShopController::class, 'index']);
Route::get('/about', [ShopController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
