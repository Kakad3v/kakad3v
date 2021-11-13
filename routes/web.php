<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Posts\PostShowController;
use App\Http\Controllers\Posts\PostsIndexController;
use App\Http\Controllers\Users\UserSettingsController;

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

Route::get('/', PostsIndexController::class)
    ->middleware('auth');

Route::get('/posts/{post:slug}', PostShowController::class)
    ->name('posts.show');
    
Route::get('/users/settings', UserSettingsController::class)
    ->middleware('auth')
    ->name('register');

require __DIR__.'/auth.php';
