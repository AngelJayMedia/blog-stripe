<?php

use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {

    Route::group(['prefix' => 'users', 'as' => 'users.'], function () {
        // Users
        Route::get('/', [UserController::class, 'index'])->name('index');
    });

    Route::group(['prefix' => 'posts', 'as' => 'posts.'], function () {
        // Posts
        Route::get('/', [PostController::class, 'create'])->name('create');
    });
});
