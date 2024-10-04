<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderImportController;


Route::get('import-orders', function () {
    return view('import-orders');
});

Route::post('import-orders', [OrderImportController::class, 'import'])->name('import.orders');


Route::get('/', function () {
    return view('welcome');
});
