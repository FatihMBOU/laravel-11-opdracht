<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Hall;

class HallController extends Controller
{
    public function getHallsWithFacilities()
    {
        $halls = DB::select('CALL GetHallsWithFacilities()');
        return response()->json($halls);
    }

    public function getHallsWithMinCapacity()
    {
        $halls = DB::table('halls')
            ->where('capacity', '>', 50)
            ->get();

        return response()->json($halls);
    }

    public function getHallsWithMinCapacityEloquent()
    {
        $halls = Hall::where('capacity', '>', 50)->get();
        return response()->json($halls);
    }

    public function getHallsWithMinCapacityQueryBuilder()
    {
        $halls = DB::table('halls')
            ->where('capacity', '>', 50)
            ->get();

        return response()->json($halls);
    }
}