<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DriversTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('drivers')->delete();
        
        \DB::table('drivers')->insert(array (
            0 => 
            array (
                'id' => 1,
                'company_id' => 1,
                'name' => 'Omar farag',
                'license_number' => '530',
                'created_at' => '2025-09-10 17:38:07',
                'updated_at' => '2025-09-11 21:01:29',
            ),
            1 => 
            array (
                'id' => 2,
                'company_id' => 1,
                'name' => 'mohammed Farag',
                'license_number' => '238',
                'created_at' => '2025-09-11 00:02:48',
                'updated_at' => '2025-09-11 21:02:02',
            ),
            2 => 
            array (
                'id' => 3,
                'company_id' => 2,
                'name' => 'Mohammed hany',
                'license_number' => '2381',
                'created_at' => '2025-09-11 21:13:38',
                'updated_at' => '2025-09-11 21:13:38',
            ),
            3 => 
            array (
                'id' => 4,
                'company_id' => 2,
                'name' => 'Mohammed ramdan ',
                'license_number' => '7555',
                'created_at' => '2025-09-11 21:15:35',
                'updated_at' => '2025-09-11 21:15:35',
            ),
        ));
        
        
    }
}