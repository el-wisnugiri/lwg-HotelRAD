<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        // calling the rate seeder seed class
        $this->call(RateSeeder::class);
        // calling the feedback subject seed class
        $this->call(FeedbackSubjectSeeder::class);
        // calling the room statuses seed class
        $this->call(RoomStatusesSeeder::class);
    }
}
