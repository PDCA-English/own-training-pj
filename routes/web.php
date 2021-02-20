<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\FinishController;
use App\Http\Controllers\ContentController;


Route::get('/', [IndexController::class, 'index']);
Route::post('/', [IndexController::class, 'post']);
Route::get('/content', [ContentController::class, 'content']);
Route::get('/content', [ContentController::class, 'index']);
Route::get('/finish', [FinishController::class, 'index']);

Route::post('/training-contents','IndexController@write1');