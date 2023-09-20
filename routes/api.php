<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/dash/{lessonId}/video/{subFolder}/{filename}', [DashController::class, 'serveDashVideo']);
Route::get('/dash/{lessonId}/audio/und/{subFolder}/{filename}', [DashController::class, 'serveDashAudio']);
Route::get('/dash/{lessonId}/{filename}', [DashController::class, 'mpdFile']);