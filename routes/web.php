<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocalController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('aboutus', function(){
    return  view('aboutus');
})->name('aboutus');

Route::get('ourlocales', [LocalController::class, 'index'])->name('ourlocales');
Route::get('vistalocal', [LocalController::class, 'localView'])->name('vistalocal');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
});


