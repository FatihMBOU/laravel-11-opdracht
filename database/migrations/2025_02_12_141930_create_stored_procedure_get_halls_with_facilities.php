<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration {
    public function up(): void
    {
        DB::unprepared('
            CREATE PROCEDURE GetHallsWithFacilities()
            BEGIN
                SELECT halls.id, halls.name, halls.capacity, halls.price_per_hour, 
                       GROUP_CONCAT(facilities.name SEPARATOR ", ") AS facilities
                FROM halls
                LEFT JOIN hall_facility ON halls.id = hall_facility.hall_id
                LEFT JOIN facilities ON hall_facility.facility_id = facilities.id
                GROUP BY halls.id;
            END
        ');
    }

    public function down(): void
    {
        DB::unprepared('DROP PROCEDURE IF EXISTS GetHallsWithFacilities');
    }
};