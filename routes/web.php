<?php

use App\Http\Controllers\EcomController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('app');
});

Route::get('/collection', [EcomController::class, 'collection']);
Route::get('/signin', [EcomController::class, 'signin']);
Route::post('/signin', [EcomController::class, 'log']);
Route::get('/signup', [EcomController::class, 'signup']);
Route::post('/signup', [EcomController::class, 'reg']);
Route::get('/home', [EcomController::class, 'index'])->middleware('auth');
