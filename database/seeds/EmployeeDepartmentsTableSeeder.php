<?php

use Illuminate\Database\Seeder;

class EmployeeDepartmentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('employee_departments')->delete();
        
        \DB::table('employee_departments')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'IT',
                'created_at' => '2017-10-19 01:26:46',
                'updated_at' => '2017-10-19 01:26:46',
            ),
        ));
        
        
    }
}