<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::controller(PostController::class)->prefix('post')->name('post.')->group(function () {
    Route::get('/find/{id}','find');
    Route::get('/create','create');
    Route::post('/store', 'store')->name('store');
    Route::get('/delete','delete');
    Route::get('/handling', 'handle')->name('handling');
    Route::get('/all', 'all')->name('all');
    Route::get('/handling/edit/{id}', 'edit')->name('edit');
    Route::patch('/handling/{selected_post}', 'update')->name('update');
});

