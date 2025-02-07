<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\EntradaController;

Route::controller(PageController::class)->group(function(){
    Route::get('/', 'Home')->name('home');
    Route::get('/blog', 'Blog')->name('blog');
    Route::get('/blog/{mi_entrada:entrada_id}', 'Entrada')->name('entrada');
});

Route::resource('misentradas', EntradaController::class)->except(['show']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
