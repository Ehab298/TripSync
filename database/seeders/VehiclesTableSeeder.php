<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class VehiclesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('vehicles')->delete();
        
        \DB::table('vehicles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'company_id' => 1,
                'plate_number' => '645',
                'model' => 'Honda Civic',
                'created_at' => '2025-09-10 18:01:06',
                'updated_at' => '2025-09-11 21:02:49',
            ),
            1 => 
            array (
                'id' => 2,
                'company_id' => 1,
                'plate_number' => '515',
                'model' => 'cheery tigo',
                'created_at' => '2025-09-11 00:03:09',
                'updated_at' => '2025-09-11 21:03:12',
            ),
            2 => 
            array (
                'id' => 3,
                'company_id' => 2,
                'plate_number' => '459',
                'model' => 'MG',
                'created_at' => '2025-09-11 21:12:20',
                'updated_at' => '2025-09-11 21:12:20',
            ),
            3 => 
            array (
                'id' => 4,
                'company_id' => 2,
                'plate_number' => '690',
                'model' => 'Nissan',
                'created_at' => '2025-09-11 21:12:42',
                'updated_at' => '2025-09-11 21:12:42',
            ),
        ));
        
        
    }
}