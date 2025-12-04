<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('students', StudentController::class);
Route::resource('categories', App\Http\Controllers\CategoryController::class);
Route::group(['prefix' => 'productos'], function () {
    Route::resource('products', App\Http\Controllers\ProductController::class);
});