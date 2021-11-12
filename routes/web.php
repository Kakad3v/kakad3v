<?php

use App\Http\Controllers\Users\UserSettingsController;
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

Route::get('/', function () {
    return inertia('index');
})->middleware('auth');

Route::get('/users/settings', UserSettingsController::class)
    ->middleware('auth')
    ->name('register');

require __DIR__.'/auth.php';
