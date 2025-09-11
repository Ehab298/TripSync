<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TripsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('trips')->delete();
        
        \DB::table('trips')->insert(array (
            0 => 
            array (
                'id' => 1,
                'company_id' => 1,
                'driver_id' => 1,
                'vehicle_id' => 1,
                'start_time' => '2025-09-01 01:01:01',
                'end_time' => '2025-09-02 01:01:01',
                'status' => 'cancelled',
                'created_at' => '2025-09-10 22:02:19',
                'updated_at' => '2025-09-10 23:09:47',
            ),
            1 => 
            array (
                'id' => 2,
                'company_id' => 1,
                'driver_id' => 1,
                'vehicle_id' => 1,
                'start_time' => '2025-09-01 04:06:17',
                'end_time' => '2025-09-02 01:01:01',
                'status' => 'completed',
                'created_at' => '2025-09-10 22:06:35',
                'updated_at' => '2025-09-10 23:09:59',
            ),
            2 => 
            array (
                'id' => 3,
                'company_id' => 1,
                'driver_id' => 1,
                'vehicle_id' => 1,
                'start_time' => '2025-09-11 00:00:00',
                'end_time' => '2025-09-12 00:00:00',
                'status' => 'active',
                'created_at' => '2025-09-10 22:16:20',
                'updated_at' => '2025-09-10 22:16:20',
            ),
            3 => 
            array (
                'id' => 4,
                'company_id' => 1,
                'driver_id' => 1,
                'vehicle_id' => 1,
                'start_time' => '2025-09-11 00:00:00',
                'end_time' => '2025-09-12 00:00:00',
                'status' => 'active',
                'created_at' => '2025-09-10 22:16:45',
                'updated_at' => '2025-09-10 22:16:45',
            ),
            4 => 
            array (
                'id' => 5,
                'company_id' => 1,
                'driver_id' => 1,
                'vehicle_id' => 1,
                'start_time' => '2025-09-13 00:00:00',
                'end_time' => '2025-09-14 00:00:00',
                'status' => 'active',
                'created_at' => '2025-09-10 22:47:08',
                'updated_at' => '2025-09-10 23:10:11',
            ),
            5 => 
            array (
                'id' => 6,
                'company_id' => 1,
                'driver_id' => 1,
                'vehicle_id' => 1,
                'start_time' => '2025-09-14 00:00:00',
                'end_time' => '2025-09-15 00:00:00',
                'status' => 'scheduled',
                'created_at' => '2025-09-10 22:59:16',
                'updated_at' => '2025-09-10 22:59:16',
            ),
            6 => 
            array (
                'id' => 7,
                'company_id' => 1,
                'driver_id' => 1,
                'vehicle_id' => 2,
                'start_time' => '2025-09-12 00:00:00',
                'end_time' => '2025-09-13 00:00:00',
                'status' => 'scheduled',
                'created_at' => '2025-09-11 07:12:45',
                'updated_at' => '2025-09-11 07:12:45',
            ),
            7 => 
            array (
                'id' => 8,
                'company_id' => 1,
                'driver_id' => 1,
                'vehicle_id' => 2,
                'start_time' => '2025-09-17 00:00:00',
                'end_time' => '2025-09-28 00:00:00',
                'status' => 'scheduled',
                'created_at' => '2025-09-11 07:15:47',
                'updated_at' => '2025-09-11 07:15:47',
            ),
            8 => 
            array (
                'id' => 9,
                'company_id' => 1,
                'driver_id' => 2,
                'vehicle_id' => 1,
                'start_time' => '2025-09-19 00:00:00',
                'end_time' => '2025-09-22 00:00:00',
                'status' => 'completed',
                'created_at' => '2025-09-11 07:16:53',
                'updated_at' => '2025-09-11 21:07:40',
            ),
            9 => 
            array (
                'id' => 10,
                'company_id' => 1,
                'driver_id' => 2,
                'vehicle_id' => 2,
                'start_time' => '2025-09-28 00:00:00',
                'end_time' => '2025-09-29 00:00:00',
                'status' => 'scheduled',
                'created_at' => '2025-09-11 21:08:09',
                'updated_at' => '2025-09-11 21:08:09',
            ),
        ));
        
        
    }
}