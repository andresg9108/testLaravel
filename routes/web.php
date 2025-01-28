<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;



/*
Route::get('/', [PageController::class, 'Home'])->name('home');
Route::get('/blog', [PageController::class, 'Blog'])->name('blog');
Route::get('/blog/{id}', [PageController::class, 'Entrada'])->name('entrada');
*/
Route::controller(PageController::class)->group(function(){
    Route::get('/', 'Home')->name('home');
    Route::get('/blog', 'Blog')->name('blog');
    Route::get('/blog/{mi_entrada:entrada_id}', 'Entrada')->name('entrada');
});