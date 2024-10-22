<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sink', \App\Livewire\Kitchensink::class)->name('sink'); // For demo purposes
Route::get('/login', \App\Livewire\Demo\Login::class)->name('login'); // For demo purposes
Route::get('/dashboard', \App\Livewire\Demo\Dashboard::class)->name('dashboard'); // For demo purposes
