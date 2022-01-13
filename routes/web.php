<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PreferenceController;
use App\Http\Controllers\UserController;
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

Route::get('/', [HomeController::class, 'getIndexPage']);


Route::get('/login', [UserController::class, 'getLoginPage']);
Route::post('/login', [UserController::class, 'login']);

Route::get('/register', [UserController::class, 'getRegisterPage']);
Route::post('/register', [UserController::class, 'register']);

Route::get('/preferences/{id}', [PreferenceController::class, 'getPreferencesPage']);
Route::post('/preferences', [PreferenceController::class, 'addPreference']);
Route::delete('/preferences/{user_id}/{category_id}', [PreferenceController::class, 'deletePreference']);

Route::get('/saved', [UserController::class, 'getSavedPage']);
Route::get('/saved/{id}', [UserController::class, 'getSavedDetailPage']);
