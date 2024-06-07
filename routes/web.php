<?php

use App\Http\Controllers\CalcController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get(
    '/div/{a}/{b}',
    [CalcController::class, 'div']
)->where('a', '[0-9]+')->where('b', '[0-9]+');
