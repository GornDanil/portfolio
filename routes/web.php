<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostedController;
use App\Http\Controllers\UploadController;
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

Route::get('/', [PostedController::class, 'portfolio']);
Route::get('/portfolio/{id}', [PostedController::class, 'ShowOnePortfolio'])->name('ShowOnePortfolio');
Route::get('/upload', [UploadController::class, 'uploadForm']);
Route::post('/upload', [UploadController::class, 'uploadSubmit']);
Route::get('/remove/{id}', [UploadController::class, 'removePost']);
Route::post('/remove/{id}', [UploadController::class, 'updateSubmit']);
Route::post('/delete/{id}', [UploadController::class, 'removePost']);
Route::post('/delete/{id}', [UploadController::class, 'deletePost']);
Route::view('/login', 'login');
Route::any('/admin', [AuthController::class, 'Authentication'])->name('admin');
Route::get('/logout', [AuthController::class, 'logout']);
