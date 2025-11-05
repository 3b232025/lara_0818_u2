<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HelloController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', function () {
    return view('home.index');
});

Route::get('/home', [HomeController::class, 'index'])->name('home.index');

Route::get('hello/{name?}', [HelloController::class, 'index'])->name('hello.index');






