<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HallFacilitySeeder extends Seeder {
    public function run(): void {
        // Voeg zalen toe
        DB::table('halls')->insert([
            ['name' => 'Grote Conferentiezaal', 'capacity' => 200, 'price_per_hour' => 250.00],
            ['name' => 'Vergaderruimte A', 'capacity' => 20, 'price_per_hour' => 50.00],
        ]);

        // Voeg faciliteiten toe
        DB::table('facilities')->insert([
            ['name' => 'WiFi'],
            ['name' => 'Beamer'],
            ['name' => 'Airco'],
        ]);

        // Koppel faciliteiten aan zalen
        DB::table('hall_facility')->insert([
            ['hall_id' => 1, 'facility_id' => 1], // Grote Conferentiezaal - WiFi
            ['hall_id' => 1, 'facility_id' => 2], // Grote Conferentiezaal - Beamer
            ['hall_id' => 2, 'facility_id' => 1], // Vergaderruimte A - WiFi
            ['hall_id' => 2, 'facility_id' => 3], // Vergaderruimte A - Airco
        ]);
    }
}