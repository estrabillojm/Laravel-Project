<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NinjaController;
use App\Models\Ninja;

Route::get('/', function () {
    return view('welcome');
});

// NOTE: Named routes -> name() will not be used in REST API Laravel
Route::group(['prefix' => 'ninjas'], function() {
    Route::get('/', [NinjaController::class, 'index'])->name('ninjas.index');
    Route::get('/create', [NinjaController::class, 'create'])->name('ninjas.create');
    Route::get('/{id}', [NinjaController::class, 'show'])->name('ninjas.show');
});


















Route::get('/test/{uuid}', function($uuid){

    $ninjas = Ninja::findById($uuid);
    return view('ninjas.show', ['id' => $uuid]);
});