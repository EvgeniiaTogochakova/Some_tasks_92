<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/get-employee-data', [EmployeeController::class, 'index'])->name('show-form');
Route::post('/store-form', [EmployeeController::class, 'store'])->name('store-form');

Route::get('/edit/{id}', [EmployeeController::class, 'edit'])->name('edit-form');
Route::put('/user/{id}', [EmployeeController::class, 'update'])->name('update-form');
