<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;
use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\BlogController;
Route::controller(MainController::class)->group(function () {
    Route::view('/', 'main')->name('main');
    Route::get('/about', 'about')->name('about');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/blogs', 'blogs')->name('blogs');
});


Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{post}', [BlogController::class, 'show'])->name('blog.show');