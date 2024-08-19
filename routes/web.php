<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;
use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

Route::controller(MainController::class)->group(function () {
    Route::view('/', 'main')->name('main');
    Route::get('/about', 'about')->name('about');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/gallery', 'gallery')->name('gallery');
});
//Route::post('/files', function (Request $request) {
//    $path = $request->file('file')->store('files');
//    File::create(['file_path' => $path]);
//
//    return back()->with('success', 'Файл завантажено успішно!');
//})->name('files.store');

