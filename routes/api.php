<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\JanjiTemuController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\RekamMedisPasienController;
use App\Http\Controllers\RuanganController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



Route::apiResource('/RekamMedisPasien', RekamMedisPasienController::class);

Route::apiResource('/janjitemu', JanjiTemuController::class);

Route::apiResource('/dokters', DokterController::class);

Route::apiResource('/pasiens', PasienController::class);


