<?php

use Illuminate\Support\Facades\Route;

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
Route::delete('/post{id}', [App\Http\Controllers\PostController::class, 'destroy'])->name('posts.destroy');
Route::get('/post/{id}', [App\Http\Controllers\PostController::class, 'show'])->name('posts.show');
Route::post('/post', [App\Http\Controllers\PostController::class, 'store'])->name('posts.store');
Route::get('/post/create', [App\Http\Controllers\PostController::class, 'create'])->name('posts.create');
Route::get('/post', [App\Http\Controllers\PostController::class, 'index'])->name('posts.index');

Route::get('/', function () {
    return view('welcome');
});
