<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HallController extends Controller {
    public function getHallsWithFacilities() {
        $halls = DB::select('CALL GetHallsWithFacilities()');
        return response()->json($halls);
    }
}