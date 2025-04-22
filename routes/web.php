<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SepedaController;
use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'loginView'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/', function () {
    return redirect('/sepedas');
});

Route::middleware('auth')->group(function () {
    Route::get('/sepedas', [SepedaController::class, 'index']);
});
