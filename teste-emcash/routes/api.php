<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BaseController;
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

Route::post('/triangulo', [BaseController::class, 'triangulo'])->name('triangulo');
Route::post('/retangulo', [BaseController::class, 'retangulo'])->name('retangulo');
Route::get('/resultado', [BaseController::class, 'resultado'])->name('resultado');
