<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;



Route::controller(PostController::class)->prefix('post')->name('post.')->group(function () {
    Route::get('/','all');
    Route::get('/{id}','find');
});
