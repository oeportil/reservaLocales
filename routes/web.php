<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocalController;
use App\Http\Controllers\ReservasController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('aboutus', function(){
    return  view('aboutus');
})->name('aboutus');

Route::get('ourlocales', [LocalController::class, 'index'])->name('ourlocales');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    
    Route::get('/reservas', [ReservasController::class, 'index'])->name('reservas');

});


