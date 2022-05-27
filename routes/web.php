<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/add_video_file', [\App\Http\Controllers\FileController::class, 'addFile'])->name('add_video_file');
