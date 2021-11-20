<?php

use App\Events\Test;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Posts\EditPostController;
use App\Http\Controllers\Posts\PostShowController;
use App\Http\Controllers\Posts\PostsIndexController;
use App\Http\Controllers\Users\UserSettingsController;

Route::get('/', PostsIndexController::class)
    ->middleware('auth');

Route::get('/posts/{post:slug}', PostShowController::class)
    ->name('post.show')
    ->middleware('auth');

Route::get('/posts/{post:slug}/edit', EditPostController::class)
    ->name('post.edit')
    ->middleware('auth');    
    
Route::get('/users/settings', UserSettingsController::class)
    ->middleware('auth')
    ->name('register');

Route::get('/broadcast', function(){
    broadcast(new Test);
}); 

require __DIR__.'/auth.php';
