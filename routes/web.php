<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

Route::get('/', [Controller::class, 'showLogin'])->name('login');
Route::post('/dashboard', [Controller::class, 'processLogin'])->name('login.process');
Route::get('/dashboard', [Controller::class, 'showDashboard'])->name('dashboard');
Route::get('/pengelolaan', [Controller::class, 'showPengelolaan'])->name('pengelolaan');
Route::get('/profile', [Controller::class, 'showProfile'])->name('profile');
Route::post('/logout', function () {
    Auth::logout(); 
    Session::flush(); 
    return redirect()->route('login');
})->name('logout');