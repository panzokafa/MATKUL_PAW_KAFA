<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SepedaController;


Route::get('/', [SepedaController::class, 'index'])->name('sepeda.index');
