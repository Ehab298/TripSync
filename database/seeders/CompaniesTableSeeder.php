<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CompaniesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('companies')->delete();
        
        \DB::table('companies')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Careem',
                'created_at' => '2025-09-09 23:32:47',
                'updated_at' => '2025-09-11 20:59:43',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'uber',
                'created_at' => '2025-09-11 20:59:24',
                'updated_at' => '2025-09-11 20:59:24',
            ),
        ));
        
        
    }
}