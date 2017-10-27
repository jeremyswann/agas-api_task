<?php

use Illuminate\Database\Seeder;

class ClientsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('clients')->delete();
        
        \DB::table('clients')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Karl',
                'last_name' => 'Stephens',
                'email' => 'karliscool@email.com',
                'completed' => 0,
                'due_at' => '2017-01-01',
                'clientable_id' => 1,
                'clientable_type' => 'App\\\Models\\\Employee',
                'deleted_at' => NULL,
                'created_at' => '2017-10-19 23:51:56',
                'updated_at' => '2017-10-19 23:51:56',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Sky',
                'last_name' => 'Degrass',
                'email' => 'skyblueD@lovestheD.com',
                'completed' => 0,
                'due_at' => '2017-01-01',
                'clientable_id' => 1,
                'clientable_type' => 'App\\\Models\\\Employee',
                'deleted_at' => NULL,
                'created_at' => '2017-10-19 23:51:58',
                'updated_at' => '2017-10-19 23:51:58',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Jenny',
                'last_name' => 'Carmon',
                'email' => 'jenontheblock89@bignblack.com',
                'completed' => 0,
                'due_at' => '2017-05-13',
                'clientable_id' => 2,
                'clientable_type' => 'App\\\Models\\\Employee',
                'deleted_at' => NULL,
                'created_at' => '2017-10-19 23:53:10',
                'updated_at' => '2017-10-19 23:53:10',
            ),
        ));
        
        
    }
}