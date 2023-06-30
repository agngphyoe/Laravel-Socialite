<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OAuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();
Route::get('/oauth/redirect',[OAuthController::class, 'redirect'])->name('oauth');
Route::get('/oauth/github/callback', [OAuthController::class, 'githubCallback']);
Route::get('/oauth/google/callback', [OAuthController::class, 'googleCallback']);
Route::get('/oauth/discord/callback', [OAuthController::class, 'discordCallback']);
Route::get('/oauth/bitbucket/callback', [OAuthController::class, 'bitbucketCallback']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/index', [OAuthController::class, 'index']);
