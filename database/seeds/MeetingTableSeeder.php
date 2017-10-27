<?php

use Illuminate\Database\Seeder;

class MeetingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
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
                    'name' => 'How to not get fired',
                    'attending' => 0,
                    'time' => '2018-01-01',
                    'meetingable_id' => 1,
                    'meetingable_type' => 'App\\\Models\\\Employee',
                    'deleted_at' => NULL,
                    'created_at' => '2017-10-19 01:25:00',
                    'updated_at' => '2017-10-19 01:25:00',
                ),
            1 =>
                array (
                    'id' => 2,
                    'name' => 'Discover Self Love',
                    'attending' => 1,
                    'time' => '2018-01-01',
                    'meetingable_id' => 1,
                    'meetingable_type' => 'App\\\Models\\\Employee',
                    'deleted_at' => NULL,
                    'created_at' => '2017-10-19 01:25:00',
                    'updated_at' => '2017-10-19 01:25:00',
                )
        ));
    }
}
