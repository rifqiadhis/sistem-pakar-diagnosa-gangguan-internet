<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiagnosaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/diagnosa', [DiagnosaController::class, 'index']);
Route::post('/diagnosa', [DiagnosaController::class, 'proses']);
