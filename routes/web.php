<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('aboutus', function(){
    return  view('aboutus');
})->name('aboutus');

Route::get('ourlocales', function(){
    return view('ourlocales');
})->name('ourlocales');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


});
