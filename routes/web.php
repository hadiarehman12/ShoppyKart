<?php

use App\Http\Controllers\CardController;
use App\Http\Controllers\CarouselController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Shoppykart');
});
Route::get('/Shoppykart', [HomeController::class, 'shoppy']);
Route::get('/products/{id}', [HomeController::class, 'product'])
    ->name('product.detail');


Route::get('/carouselform', [CarouselController::class, 'create']);
Route::post('/carouselstore', [CarouselController::class, 'store'])
    ->name('carousel.store');

Route::get('/cardform', [CardController::class, 'create']);
Route::post('/cardstore', [CardController::class, 'store'])
    ->name('card.store');

Route::get('/itemform', [ItemController::class, 'create']);
Route::post('/itemstore', [ItemController::class, 'store'])
    ->name('item.store');

Route::get('/categoryform', [CategoryController::class, 'create']);
Route::post('/categorystore', [CategoryController::class, 'store'])
    ->name('category.store');

Route::get('/productform', [ProductController::class, 'create']);
Route::post('/productstore', [ProductController::class, 'store'])
    ->name('product.store');
Route::get('/producttable', [ProductController::class, 'table'])
    ->name('product.table');




