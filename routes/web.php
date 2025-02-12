<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HallController;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/halls', [HallController::class, 'getHallsWithFacilities']);
