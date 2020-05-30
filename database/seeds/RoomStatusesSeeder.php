<?php

use Illuminate\Database\Seeder;

class RoomStatusesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('room_statuses')->insert(array(
            array(
                'name' => 'AVBL',
                'description' => 'Available',
            ),
            array(
                'name' => 'SERV',
                'description' => 'Service Required',
            ),
            array(
                'name' => 'MAIN',
                'description' => 'Maintenance Required',
            ),
            array(
                'name' => 'OOSV',
                'description' => 'Out of Service',
            ),
            array(
                'name' => 'UNAV',
                'description' => 'Unavailable',
            ),
            array(
                'name' => 'OCCP',
                'description' => 'Occupied',
            ),
        ));
    }
}
