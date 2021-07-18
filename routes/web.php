<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Room;
use App\Http\Controllers\Gamer;
use App\Http\Controllers\Roole;
use App\Http\Controllers\Index;
Route::get('/', [Index::class, 'index']);
Route::prefix('api')->group(function () {
    Route::prefix('room')->group(function () {
        Route::get('/', [Room::class, 'index']);
        Route::post('/add', [Room::class, 'create']);
    });
    Route::prefix('roole')->group(function () {
        Route::get('/', [Roole::class, 'index']);
        Route::post('/add', [Roole::class, 'create']);
    });
    Route::prefix('gamer')->group(function () {
        Route::get('/', [Gamer::class, 'index']);
        Route::get('/add', [Gamer::class, 'create']);
    });
});


