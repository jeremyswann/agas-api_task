<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tasks')->delete();
        
        \DB::table('tasks')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Delivery to Rockhampton',
                'completed' => 0,
                'due_at' => '01-01-2017',
                'taskable_id' => 1,
                'taskable_type' => 'App\\\Models\\\Employee',
                'deleted_at' => NULL,
                'created_at' => '2017-10-19 01:25:00',
                'updated_at' => '2017-10-19 01:25:00',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Build a computer',
                'completed' => 0,
                'due_at' => '01-01-2017',
                'taskable_id' => 2,
                'taskable_type' => 'App\\\Models\\\Employee\\\Department',
                'deleted_at' => NULL,
                'created_at' => '2017-10-19 01:25:07',
                'updated_at' => '2017-10-19 01:25:07',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Go to the moon',
                'completed' => 0,
                'due_at' => '10/3/2017',
                'taskable_id' => 1,
                'taskable_type' => 'App\\\Models\\\Employee',
                'deleted_at' => NULL,
                'created_at' => '2017-10-19 01:36:01',
                'updated_at' => '2017-10-19 01:36:01',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Do a thing',
                'completed' => 0,
                'due_at' => '10/2/2017',
                'taskable_id' => 1,
                'taskable_type' => 'App\\\Models\\\Employee',
                'deleted_at' => NULL,
                'created_at' => '2017-10-19 01:48:59',
                'updated_at' => '2017-10-19 01:54:45',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'HEY Get off Facebook!',
                'completed' => 0,
                'due_at' => '10/3/2017',
                'taskable_id' => 2,
                'taskable_type' => 'App\\\Models\\\Employee',
                'deleted_at' => NULL,
                'created_at' => '2017-10-19 01:52:16',
                'updated_at' => '2017-10-19 23:55:52',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Kill hitler',
                'completed' => 0,
                'due_at' => '10/2/2017',
                'taskable_id' => 1,
                'taskable_type' => 'App\\\Models\\\Employee',
                'deleted_at' => NULL,
                'created_at' => '2017-10-19 02:02:19',
                'updated_at' => '2017-10-19 03:58:49',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Go to Melbourne',
                'completed' => 0,
                'due_at' => '10/2/2017',
                'taskable_id' => 2,
                'taskable_type' => 'App\\\Models\\\Employee',
                'deleted_at' => NULL,
                'created_at' => '2017-10-19 02:11:28',
                'updated_at' => '2017-10-19 02:18:48',
            ),
        ));
        
        
    }
}