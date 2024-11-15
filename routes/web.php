<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DollarController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('dollars', [DollarController::class, 'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
