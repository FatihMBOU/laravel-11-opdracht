<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HallController;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/halls', [HallController::class, 'getHallsWithFacilities']);
Route::get('/halls/with-min-capacity', [HallController::class, 'getHallsWithMinCapacity']);
Route::get('/halls/with-min-capacity-eloquent', [HallController::class, 'getHallsWithMinCapacityEloquent']);
Route::get('/halls/with-min-capacity-querybuilder', [HallController::class, 'getHallsWithMinCapacityQueryBuilder']);