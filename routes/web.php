<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'showView'])->name('view');
Route::post('/submit', [Maincontroller::class, 'submitForm'])->name('submit');
