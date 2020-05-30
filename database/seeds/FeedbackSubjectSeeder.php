<?php

use Illuminate\Database\Seeder;

class FeedbackSubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('feedback_subjects')->insert(array(
            array(
                'name' => 'General',
                'description' => 'General Enquiry/Comments',
            ),
            array(
                'name' => 'Booking',
                'description' => 'Booking Enquiry / Room Availability',
            ),
            array(
                'name' => 'Thank You',
                'description' => 'Message to thank the hotel/staff',
            ),
            array(
                'name' => 'Complaint',
                'description' => 'Had a problem with your booking or stay',
            ),
            array(
                'name' => 'Help',
                'description' => 'Assistance Required',
            ),
            array(
                'name' => 'Bug',
                'description' => 'Problem with the application/web site',
            ),
        ));
    }
}
