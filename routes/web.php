<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::controller(MainController::class)->group(function () {
    Route::view('/', 'main')->name('main');
    Route::get('/about', 'about')->name('about');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/blog', 'blog')->name('blog');
});
