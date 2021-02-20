<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\FinishController;
use App\Http\Controllers\ContentController;


Route::get('/', [IndexController::class, 'index']);
Route::post('/', [IndexController::class, 'post']);
Route::get('/content', [IndexController::class, 'write1']);
Route::get('/finish', [FinishController::class, 'index']);
Route::get('/mail', 'App\Http\Controllers\MailSendController@index');
