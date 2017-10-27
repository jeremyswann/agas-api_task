<?php

use Illuminate\Database\Seeder;

class EmployeesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('employees')->delete();
        
        \DB::table('employees')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Geoff',
                'department' => 1,
                'created_at' => '2017-10-19 01:26:57',
                'updated_at' => '2017-10-19 01:26:57',
                'taskable_id' => 1,
                'taskable_type' => 'App\\\Models\\\Employee\\\Department',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Dave',
                'department' => 2,
                'created_at' => '2017-10-19 23:34:29',
                'updated_at' => '2017-10-19 23:34:29',
                'taskable_id' => 2,
                'taskable_type' => 'App\\\Models\\\Employee\\\Department',
            ),
        ));
        
        
    }
}