<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Room;
use App\Http\Controllers\Gamer;
use App\Http\Controllers\Roole;
Route::get('/', function () {
    return view('index');
});

Route::group(['prefix' => 'api'], function () {
    Route::group(['prefix' => 'room'], function () {
        Route::get('/', [Room::class, 'index']);
        Route::post('/add', [Room::class, 'create']);
    });
    Route::group(['prefix' => 'roole'], function () {
        Route::get('/', [Roole::class, 'index']);
        Route::post('/add', [Roole::class, 'create']);
    });
    Route::group(['prefix' => 'gammer'], function () {
        Route::get('/', [Gamer::class, 'index']);
        Route::get('/add', [Gamer::class, 'create']);
    });
});
