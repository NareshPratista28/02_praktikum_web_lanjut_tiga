<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;

//HomeController
Route::get('/',[HomeController::class, 'index']);

// ProductController
Route::prefix('category')->group(function () {
    Route::get('/marbel-edu-games',[ProductsController::class, 'marbeledugames']);
    Route::get('/marbel-and-friends-kids-games',[ProductsController::class, 'marbelandfriends']);
    Route::get('/riri-story-books',[ProductsController::class, 'riristory']);
    Route::get('/kolak-kids-songs',[ProductsController::class, 'kolaksongs']);
});

// NewsController
Route::get('/news',[NewsController::class, 'news']);
Route::get('/news/{$id}',[NewsController::class, 'educaberbagi']);

// ProgramController
Route::prefix('program')->group(function () {
    Route::get('/karir',[ProgramController::class, 'karir']);
    Route::get('/magang',[ProgramController::class, 'magang']);
    Route::get('/kunjungan-industri',[ProgramController::class, 'kunjungan']);
});

// AboutController
Route::get('/about-us',[AboutController::class, 'about']);

//ContactsController
Route::get('/contact',[ContactController::class, 'contact']);