<?php

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

Route::get('/',[\App\Http\Controllers\HomeController::class,'getAllChannels'])->name('home');

Route::prefix('/channel')->group(function () {
//    Route::get('show/{id}', [\App\Http\Controllers\ChannelController::class,'show'])->name('channel.show');

    Route::get('create', [\App\Http\Controllers\ChannelController::class,'create'])->name('channel.create');
    Route::post('store', [\App\Http\Controllers\ChannelController::class,'store'])->name('channel.store');

    Route::get('/edit/{ChannelID}', [\App\Http\Controllers\ChannelController::class,'edit'])->name('channel.edit');
    Route::put('/update/{ChannelID}', [\App\Http\Controllers\ChannelController::class,'update'])->name('channel.update');

    Route::delete('/delete/{ChannelID}', [\App\Http\Controllers\ChannelController::class,'delete'])->name('channel.delete');
});

