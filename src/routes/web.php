<?php

use App\Http\Controllers\ImageController;
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
    return view('storage_test');
});

Route::prefix('/storage')->group(function () {
    Route::post('/rename/to_sample', [ImageController::class, 'upload']);
    Route::prefix('/named')->group(function () {
        Route::post('/to_named_sample', [ImageController::class, 'uploadNamed']);
        Route::post('/to_public', [ImageController::class, 'uploadNamedToPublic']);
    });
});