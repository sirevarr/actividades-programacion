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
Route::resource('tasks', App\Http\Controllers\TaskController::class);
Route::get('/inventories/search', [App\Http\Controllers\InventoryController::class, 'search'])->name('inventories.search');
Route::get('/reports/{report}/export', [App\Http\Controllers\ReportController::class, 'export'])->name('reports.export');