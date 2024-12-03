<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SamplePostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class,'home']);

Route::get('/about', [AboutController::class,'about']);

Route::get('/contact', [ContactController::class,'contact']);

Route::post('/send-message', [ContactController::class,'sendMessage']);


Route::get('/samplePosts', [SamplePostController::class,'samplePosts']);


// Route::get('/about', [AboutController::class,'about']);



