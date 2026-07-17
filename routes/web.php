<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/book', [BookController::class, 'index']);
Route::get('/category', [CategoryController::class, 'index']);
Route::resource('book', BookController::class);
