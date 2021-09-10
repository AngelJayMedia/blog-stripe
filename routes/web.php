<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Pages\TagController;
use App\Http\Controllers\Pages\HomeController;
use App\Http\Controllers\Pages\PostController;
use App\Http\Controllers\Pages\AuthorController;
use App\Http\Controllers\Pages\CheckoutController;
use App\Http\Controllers\Pages\MembershipController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

require 'admin.php';

Route::get('/', HomeController::class)->name('home');
Route::get('/membership', MembershipController::class)->name('membership');
Route::get('/users', [UserController::class, 'index'])->name('users');
Route::get('/checkout', CheckoutController::class)->name('checkout');

/* Name: Authors
 * Url: /authors/*
 * Route: authors.*
*/
Route::group(['prefix' => 'authors', 'as' => 'authors.'], function () {
    Route::get('/', [AuthorController::class, 'index'])->name('index');
    Route::get('michelle-jones', [AuthorController::class, 'show'])->name('show');
});

/* Name: Posts
 * Url: /posts/*
 * Route: posts.*
*/
Route::group(['prefix' => 'posts', 'as' => 'posts.'], function () {
    Route::get('/', [PostController::class, 'index'])->name('index');
    Route::get('/title-of-post', [PostController::class, 'show'])->name('show');
});

/* Name: Tags
 * Url: /tags/*
 * Route: tags.*
*/
Route::group(['prefix' => 'tags', 'as' => 'tags.'], function () {
    Route::get('/', [TagController::class, 'index'])->name('index');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
