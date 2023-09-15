<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/', [PostController::class, 'Dashboard']);
Route::get('/profile', [PostController::class, 'Profile']);

// posts
Route::get('/post/create', [PostController::class, 'CreatePost']);
Route::post('/', [PostController::class, 'Store']);

// update
Route::get('/post/{id}/edit', [PostController::class, 'Edit']);
Route::put('/post/{id}/update', [PostController::class, 'Update']);

//delete
Route::delete('/post/{id}/delete', [PostController::class, 'Delete']);